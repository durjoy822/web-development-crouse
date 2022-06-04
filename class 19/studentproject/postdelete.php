<?php
    
    
    $postid=$_GET['postid'];
   
   



    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "multiple"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    " ";
    $sql = "DELETE FROM project WHERE id='$postid'"; 
   
    if ($conn->query($sql) === TRUE) {
      header("Location: http://localhost/studentproject/index.php");
    } else {
        header("Location: http://localhost/studentproject/index.php");
    }
    
    $conn->close();
    ?>