<?php
      session_start();
             if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]==0 ) {
              header("Location: http://localhost/dynamicwebsite/login.php");
             }
      
          ?>
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


              $sql = "SELECT * FROM posts where id='$postid'";
              $result = $conn->query($sql);
             
              if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                $postheading= $row["heading"];
                $postcontent= $row["content"];
              }
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
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <img src="img/dannar.webp" alt="bannar" class="w-100">
              </div>  

              <div class="col-md-8">
                <h3 class="ml-3">Update post </h3>
              <form action="postupdate.php" method="post" class="col-md-8 bg-light mt-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Heading</label>
                        <input type="text"  name="heading" value="<?php echo $postheading ;?>" placeholder="Enter your heading" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">content</label>
                        <input type="text"  name="content" value="<?php echo $postcontent ;?>" placeholder="Enter your content" class="form-control "  id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                   <input type="hidden" value="<?php echo $postid ;?>" name="postid">
                    <button type="submit" class="btn btn-primary">UPDATE </button>
                </form>
              </div>

              <div class="col-md-4">
                 <a href="index.php"class="mr-2">Home</a>
                 <a href="login.php"class="mr-2">login</a>
              </div>
              <div class="col-md-12 text-center">
                  copyright reserved by nr durjoy
              </div>
          </div>
      </div>
      <?php        
              } else{
                echo "NO DATA IN OUR DATABASE!";
              }
              $conn->close();
           
      ?>


             
    















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