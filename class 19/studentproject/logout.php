<?php
 session_start();
        $_SESSION["loginstatus"]="0";
        header("Location: http://localhost/studentproject/login.php");
?>