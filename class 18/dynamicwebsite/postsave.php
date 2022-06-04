<?php
      $heading='';
      $content='';
     


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


      $sql = "INSERT INTO posts (heading, content)
      VALUES ('$heading', '$content')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        header("Location: http://localhost/dynamicwebsite/index.php");
    } else {
        header("Location: http://localhost/dynamicwebsite/postform.php");
    }
    
    $conn->close();

     






?>