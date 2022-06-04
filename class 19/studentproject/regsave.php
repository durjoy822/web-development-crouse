<?php
    $name='';
    $collage='';
    $registration='';
    $roll='';

    $name=$_POST['name'];
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

    $sql = "INSERT INTO student (name,collage, registration,roll)
    VALUES ('$name', '$collage', '$registration', ' $roll')";
    
    if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
      header("Location: http://localhost/studentproject/login.php");
    } else {
        header("Location: http://localhost/studentproject/reg.php");
    }
    
    $conn->close();
    ?>