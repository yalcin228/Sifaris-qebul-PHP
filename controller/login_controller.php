<?php
require("config.php");

//Login Prosesi
if($_POST){
    
    $istifadeci_mail = $_POST['istifadeci_mail'];
    $i_parol = $_POST['istifadeci_parol'];
    $istifadeci_parol=md5($i_parol);


    if(!$istifadeci_mail || !$istifadeci_parol){
        echo "bos";
    }
    else{
        $giris=$conn->prepare("SELECT * FROM istifadeci WHERE istifadeci_mail=? AND istifadeci_parol=? ");
        $giris->execute(array($istifadeci_mail,$istifadeci_parol));
        $success=$giris->fetch(PDO::FETCH_ASSOC); 

       
        if($success){
            $_SESSION['status']=true;
            $_SESSION['ad']=$success['istifadeci_ad'];
            $_SESSION['mail']=$success['istifadeci_mail'];
            $_SESSION['parol']=$success['istifadeci_parol'];


        
            echo "yes";
        }
        else{
            echo "no";
        }
    }
}


?>