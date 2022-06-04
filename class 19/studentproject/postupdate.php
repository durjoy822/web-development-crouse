<?php
    $title='';
    $discription='';
    
    $postid=$_POST['postid'];
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

    $sql = "UPDATE project SET title='$title' , discription='$discription'  WHERE id= '$postid'"; 
   
    if ($conn->query($sql) === TRUE) {
      header("Location: http://localhost/studentproject/index.php");
    } else {
        header("Location: http://localhost/studentproject/posteditform.php?postid='.$postid.'");
    }
    
    $conn->close();
    ?>