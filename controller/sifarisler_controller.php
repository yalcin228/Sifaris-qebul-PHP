<?php
require ("config.php");
if($_POST){
    
    $sif_baslig=$_POST['sif_baslig'];
    $sif_teslim_zamani=$_POST['sif_teslim_zamani'];
    $sif_tecililik=$_POST['sif_tecililik'];
    $sif_veziyyet=$_POST['sif_veziyyet'];
    $sif_detay=$_POST['sif_detay'];
    $sif_qiymet=$_POST['sif_qiymet'];
    $sif_id=$_POST['sif_id'];

    if(!$sif_baslig ||  !$sif_teslim_zamani || !$sif_tecililik || !$sif_veziyyet || !$sif_detay || !$sif_qiymet){
        echo "bos";
    }
    else{
        $sif_edit=$conn->prepare("UPDATE sifarisler SET sif_baslig=?, sif_teslim_zamani=?, sif_tecililik=?, sif_veziyyet=?, sif_detay=?, sif_qiymet=? WHERE sif_id=?");
        $sif_edit->execute(array($sif_baslig,$sif_teslim_zamani,$sif_tecililik,$sif_veziyyet,$sif_detay,$sif_qiymet,$sif_id));
        
        if($sif_edit){
            echo "yes";
        }
        else{
            echo "no";
        }
    }

}


///////// DElete sifaris ajaxla

if($_POST){
    $id=$_POST['delete_id'];
    $delete_project=$conn->prepare("DELETE FROM sifarisler WHERE sif_id=?");
    $delete_project->execute(array($id));
}



?>