<?php
 session_start();
 $_SESSION["loggedin"] = "0" ;
 header("Location: http://localhost/dynamicwebsite/index.php"); 

?>