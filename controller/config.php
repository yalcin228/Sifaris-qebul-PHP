<?php 

session_start();
ob_start();

try{
    $conn=new PDO("mysql:host=sql306.epizy.com;dbname=epiz_28850367_sifaris_qebulu","epiz_28850367","w8tp2bc6");
}
catch(PDOException $e){
    echo $e->getMessage();
    echo "Salam";
}

?>
<!-- Start of Tawk.to Script-->

<!--End of Tawk.to Script -->