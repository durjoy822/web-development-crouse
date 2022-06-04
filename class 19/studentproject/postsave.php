<?php
    $title='';
    $discription='';
    
    $title=$_POST['title'];
    $discription=$_POST['discription'];
   



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

    $sql = "INSERT INTO project (title,discription )
    VALUES ('$title', '$discription')";
    
    if ($conn->query($sql) === TRUE) {
      header("Location: http://localhost/studentproject/index.php");
    } else {
        header("Location: http://localhost/studentproject/post.php");
    }
    
    $conn->close();
    ?>