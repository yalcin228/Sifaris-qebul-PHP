<?php
require("config.php");
require("../funksiyalar/safe.php");

//Ayarlar Update prosesi
if(isset($_POST['btnSubmit'])){
    $sayt_title=$_POST["sayt_title"];
    $sayt_desc=$_POST["sayt_desc"];
    $sayt_keyw=$_POST["sayt_keyw"];
    $sayt_author=$_POST["sayt_author"];
    
    if(!$sayt_title || !$sayt_desc || !$sayt_keyw || !$sayt_author){
        header("Location:../ayarlar.php?islem=bos");
    }
    else{
        $ayar=$conn->prepare("UPDATE ayarlar SET sayt_title=?,sayt_desc=?,sayt_keyw=?,sayt_author=? WHERE id=?");
        $ayar->execute(array($sayt_title,$sayt_desc,$sayt_keyw,$sayt_author,1));
        if($ayar){
            header("location:../ayarlar.php?islem=ok");
        }
        else{
            header("location:../ayarlar.php?islem=no");

        }
    }
}

////// Qeydiyyat Prosesi
if(isset($_POST['qeydiyyat'])){
    $i_ad=$_POST['stifadeci_ad'];
    $i_mail=$_POST['stifadeci_mail'];
    $is_parol=$_POST['stifadeci_parol'];
    $ist_parol=md5($is_parol);
    $is_parol2=$_POST['stifadeci_parol2'];
    $ist_parol2=md5($is_parol2);


    if(!$i_ad || !$i_mail || !$ist_parol || !$ist_parol2 ){
        header("Location:../register.php?register=bos");
    }
    else{
        if($ist_parol !== $ist_parol2){
            header("Location:../register.php?register=xeta");
        }
        else{
            $reg=$conn->prepare("SELECT * FROM istifadeci WHERE istifadeci_mail=?");
            $reg->execute(array($i_mail));
            $reg_cek=$reg->fetch(PDO::FETCH_ASSOC);
            $reg_row=$reg->rowCount();
            if($reg_row == 1){
                header("Location:../register.php?register=no");
            }
            else{
                $register=$conn->prepare("INSERT INTO istifadeci SET istifadeci_ad=?, istifadeci_mail=?, istifadeci_parol=?");
                $register->execute(array($i_ad,$i_mail,$ist_parol));
                $_SESSION['status']=true;
                $_SESSION['ad']=$reg_cek['istifadeci_ad'];
                $_SESSION['mail']=$reg_cek['istifadeci_mail'];
                $_SESSION['parol']=$reg_cek['istifadeci_parol'];
                header("Location:../register.php?register=yes");
            }

        }
    }

}


////// PROYEKT ELAVE ETME
if(isset($_POST['proyekt_elave'])){
    $proyekt_baslig=$_POST['proyekt_baslig'];
    $proyekt_bitis_tarix=$_POST['proyekt_bitis_tarix'];
    $proyekt_vaxt=$_POST['proyekt_vaxt'];
    $proyekt_veziyyet=$_POST['proyekt_veziyyet'];
    $proyekt_detay=$_POST['proyekt_detay'];
   
    if(!$proyekt_baslig || !$proyekt_bitis_tarix || !$proyekt_vaxt || !$proyekt_veziyyet || !$proyekt_detay){
        header("Location:../insert_project.php?islem=bos");
    }
    else{
        $tmp_name=$_FILES['proyekt_file']['tmp_name'];
        
        $name=$_FILES['proyekt_file']['name'];
        move_uploaded_file($tmp_name,"../img/yeni/$name");
        $addProyekt=$conn->prepare("INSERT INTO proyekt SET proyekt_baslig=?, proyekt_bitis_tarix=?, proyekt_vaxt=?, proyekt_veziyyet=?, proyekt_file=?, proyekt_detay=?");
        $addProyekt->execute(array($proyekt_baslig,$proyekt_bitis_tarix,$proyekt_vaxt,$proyekt_veziyyet,$name,$proyekt_detay));
        
    

         if($addProyekt){
              header("Location:../insert_project.php?islem=yes");

          }
         else{
              header("Location:../insert_project.php?islem=no");
            }
    }   
}



///////// Edit Project Page

if($_POST){
  
    $proyekt_baslig=$_POST['proyekt_baslig'];   
    $proyekt_bitis_tarix=$_POST['proyekt_bitis_tarix'];
    $proyekt_vaxt=$_POST['proyekt_vaxt'];
    $proyekt_veziyyet=$_POST['proyekt_veziyyet'];
    $proyekt_detay=$_POST['proyekt_detay'];
    $proyekt_id=$_POST['proyekt_id'];
    $proyekt_file=$_FILES['proyekt_file'];
    
    if(!$proyekt_baslig || !$proyekt_bitis_tarix || !$proyekt_vaxt || !$proyekt_veziyyet || !$proyekt_detay){
        echo "Xanalari bos buraxmaq olmaz";
    }
    else{
        $tmp_name=$proyekt_file['tmp_name'];       
        $name=$proyekt_file['name'];
        move_uploaded_file($tmp_name,"../img/yeni/$name");
        $edit_project=$conn->prepare("UPDATE proyekt SET proyekt_baslig=?, proyekt_bitis_tarix=?, proyekt_vaxt=?, proyekt_veziyyet=?, proyekt_file=?, proyekt_detay=? WHERE proyekt_id=?");
        $edit_project->execute(array($proyekt_baslig,$proyekt_bitis_tarix,$proyekt_vaxt,$proyekt_veziyyet,$name,$proyekt_detay,$proyekt_id));
        
        if($edit_project){  
            header("Location:../project.php");
        }
        else{
            echo "xeta";
        }
    }

}

///////// Delete project
if($_POST){
    $id=$_POST['delete_id'];
    $delete_project=$conn->prepare("DELETE FROM proyekt WHERE proyekt_id=?");
    $delete_project->execute(array($id));
}



//////// Sifaris elave

if(isset($_POST['add_sif'])){ 
    $muster_ad=$_POST['musderi_ad'];
    $muster_mail=$_POST['musderi_mail'];
    $muster_tel=$_POST['musderi_tel'];
    $sif_baslig=$_POST['sif_baslig'];
    $sif_veziyyet=$_POST['sif_veziyyet'];
    $sif_qiymet=$_POST['sif_qiymet'];
    $sif_teslim_zamani=$_POST['sif_teslim_zamani'];
    $sif_tecililik=$_POST['sif_tecililik'];
    $sif_detay=$_POST['sif_detay'];

    if(!$muster_ad || !$muster_ad || !$muster_ad || !$sif_baslig || !$sif_veziyyet || !$sif_qiymet || !$sif_teslim_zamani || !$sif_tecililik || !$sif_detay){
        echo "Bos buraxmaq olmaz";
    }
    else{
        $sif=$conn->prepare("INSERT INTO sifarisler SET musderi_ad=?, musderi_mail=?, musderi_tel=?, sif_baslig=?, sif_teslim_zamani=?, sif_tecililik=?, sif_veziyyet=?, sif_detay=?, sif_qiymet=?");
        $sif->execute(array($muster_ad,$muster_mail,$muster_tel,$sif_baslig,$sif_teslim_zamani,$sif_tecililik,$sif_veziyyet,$sif_detay,$sif_qiymet));
        if($sif){
            header("Location:../insert_sifaris.php");
        }
    }



}
?>