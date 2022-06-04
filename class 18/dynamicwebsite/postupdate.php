<?php
      $heading='';
      $content='';
     


      $postid=$_POST['postid'];
      $heading=$_POST['heading'];
      $content=$_POST['content'];
      


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


      $sql = "UPDATE posts SET heading='$heading' , content='$content' WHERE id='$postid'"; 

    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost/dynamicwebsite/index.php");
    } else {
        header("Location: http://localhost/dynamicwebsite/posteditform.php?postid='.$postid'");
    }
    
    $conn->close();

     






?>