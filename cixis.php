<?php

session_start();
session_destroy();

?>
<script>  
if(confirm("Cixis etmek isteyirsiniz?")){
    setInterval(() => {
         window.location.href="login.php";
    }, 1000);
}
</script>