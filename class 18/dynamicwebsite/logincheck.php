<?php
      $email='';
      $password='';

      $email= $_POST['email'];
      $password= $_POST['password'];
     
      $servername = "localhost";
      $username = "root";
      $pin = "";
      $dbname = "dynamic";

      // Create connection
      $conn = new mysqli($servername, $username, $pin, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);
      }

      $sql = "SELECT id FROM user  WHERE email='$email' && password= '$password'";
      $result = $conn->query($sql);
       
      if ($result->num_rows == 1) {
              session_start();
              $_SESSION["loggedin"] = "1";
              header("Location: http://localhost/dynamicwebsite/index.php");
      }
        else{
              $_SESSION["loggedin"] = "0";
              header("Location: http://localhost/dynamicwebsite/login.php");
        }



       
?>