<?php
include('includes/header.php');
?>

<!----bannar part start here---->
<body>
 <div class=" container">
  <div class="col-md-12">
    <img src="img/project-plan.png" alt="bannar" class="w-100"> 
  </div>
   <!----------bannar part end here -------------> 
   <!-------------link part start  here -----------------> 
  <div class="col-md-12 text-center mt-1 " >
      <h2>
        <!---home link start-->
          <i class="fa-solid fa-house text-warning mr-2"></i>
          <!---home  link end-->

          <!---login  link start-->
          <?php
          session_start();
           if(!isset( $_SESSION["loginstatus"]) || $_SESSION["loginstatus"]==0){ 
             ?>
            <a href="login.php"><i class="fa-solid fa-circle-user mr-2 bg-transparent text-success"></i></a>
            <?php
           }
          ?>
         
          <!---login  link end-->
         <!---logout link start-->
          <?php
           if(isset( $_SESSION["loginstatus"]) &&   $_SESSION["loginstatus"]==1){ 
             ?>
            <a href="logout.php"><i class="fa-solid fa-right-from-bracket mr-2 text-primary"></i></a>           
            <a href="post.php"><i class="fa-solid fa-upload"></i></a>
            <?php
           }
          ?>
          <!---logout link end-->
         
          <!---register link start -->
         
           <a href="reg.php"><i class="fas fa-registered mr-2 text-danger"></i></a>
          <!---register link end-->     
      </h2> 
    <!-------------link part end here ----------------->   
    <!-------------post part start here ----------------->   
  </div>
  <div class="col-md-12 mt-4 mr-1rem " >
    <?php
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


    $sql = "SELECT * FROM  project ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<h4>".$row["title"]."</h4><a href='posteditform.php?postid=".$row["id"]."'> <i class='fas fa-edit' style= float:right margin-left: 4px;></i> </> </a>     
        </h4><a href='postdelete.php?postid=".$row["id"]."'><i class='fas fa-trash-alt'style=float:right;></i></>
        </a>"; 
        echo "<p>".$row["discription"]."</p>";
        echo "<p>posted on: "  .$row["created"]."</p>";
        echo "<hr>" ;
      }
    } else {
      echo "No student project here!";
    }
    $conn->close();
?>
</div>
 <!------post part end here-------->
 <!---footer start here---->
<?php
include('includes/footer.php');
?>
 <!---footer end here here---->

  












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