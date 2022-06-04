<?php
    


      $postid=$_GET['postid'];
     
      


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


      $sql = "DELETE FROM posts WHERE id= $postid"; 

    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost/dynamicwebsite/index.php");
    } else {
        header("Location: http://localhost/dynamicwebsite/index.php");
    }
    
    $conn->close();

     






?>