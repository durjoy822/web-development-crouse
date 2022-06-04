<?php
    $collage='';
    $registration='';
    $roll='';

    $collage=$_POST['collage'];
    $registration=$_POST['registration'];
    $roll=$_POST['roll']; 




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

    $sql = "SELECT id FROM student WHERE collage='$collage'&& registration='$registration'&& roll=' $roll' ";
    $result = $conn->query($sql);
 
    session_start();
    if ($result->num_rows == 1) {
        $_SESSION["loginstatus"]="1";
       header("Location: http://localhost/studentproject/index.php");
    } else {
        $_SESSION["loginstatus"]="0";
        header("Location: http://localhost/studentproject/login.php");
    }
    
     
    $conn->close();
?>