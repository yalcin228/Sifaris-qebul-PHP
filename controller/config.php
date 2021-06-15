<?php 

session_start();
ob_start();

try{
    $conn=new PDO("mysql:host=localhost;dbname=sifaris_qebulu","root","");
}
catch(PDOException $e){
    echo $e->getMessage();
    echo "Salam";
}

?>
<!-- Start of Tawk.to Script-->

<!--End of Tawk.to Script -->
