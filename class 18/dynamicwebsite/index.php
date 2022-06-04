<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8f8ef4eb26.js" crossorigin="anonymous"></script>
    <title>Dynamic Website</title>
  </head>
  <body>
    <!---bannar ----->
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <img src="img/brain.jpg" alt="bannar" class="w-100">
              </div>
              </div>
              <div class="row">
              <div class="col-md-8">
               <h3> post</h3>
               <?php
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
                 
                       $sql = "SELECT * FROM posts ORDER BY id DESC  ";
                       $result = $conn->query($sql);
                       if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        //  echo "heading: " . $row["heading"]. " - content: " . $row["content"]. "<br>";
                          echo "<h4>".$row['heading']."</h4> <a href='posteditform.php?postid=".$row["id"]."'> edit</a>|<a href='delete.php?postid=".$row["id"]."'> delete</a>";
                          echo "<p>".$row['content']."</p>";
                          echo "<hr>"; 
                        }
                      } else {
                        echo "0 results";
                      }
                      $conn->close();
                   
               ?>
              </div>
              
              <div class="col-md-4">
                <a href="Home.php" >Home</a>
               <?php
                
                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]==0 ) {
               ?>
                <a href="login.php"class="ml-2">login</a>
               <?php
               }
               ?>
                <?php
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==1 ){
                ?>
              <a href="postform.php"class="ml-2">Add to post</a>
               <a href="logout.php"class="ml-2">Logout</a>
               
               <?php
                }
                ?>
                <a href="register.php"class="ml-2">regiestration</a> 
                 
              </div>
              </div>
              <div class="col-md-12 text-center">
                  copyright reserved by nr durjoy
              </div>
          </div>
      </div>
               















    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>