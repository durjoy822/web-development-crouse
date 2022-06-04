<?php
session_start();
if(isset( $_SESSION["loginstatus"]) &&   $_SESSION["loginstatus"]==1){ 
    $_SESSION["loginstatus"]=0; 
    header("Location: http://localhost/studentproject/reg.php");
    }
?>



<!---header part start --->
<?php
include('includes/header.php');
?>
<!---header part end --->

<body>
    <!--bannar part start here part----->
  <div class="container">
        <div class="col-md-12 mb-3">
            <img src="img/student-project.jpg" alt="" class="w-100">
        </div>
    <!--bannar part end here ----->    
    <!--form part start here ----->    
<div class="row">
    <div class="col-md-8">

  <form action="regsave.php" method="post" class=" ml-5">
  <h3 class="text-center">Student Regeister Form</h3>
  <div class="form-group ">
            <label for="exampleInputPassword1"> Name</label>
            <input type="text" name="name" placeholder="Your  name" class="form-control mb-3" id="exampleInputPassword1">

            <label for="exampleInputPassword1">Collage Name</label>
            <input type="text" name="collage" placeholder="Your collage name" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group ">
            <label for="exampleInputEmail1">Registration no</label>
            <input type="number" name="registration" placeholder="Registration no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group ">
            <label for="exampleInputPassword1">Roll</label>
            <input type="number" name="roll" placeholder="Roll number" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>

<!--form  part end here----->
<!--link  part here----->
<div class="col-md-4 text-center">
    <h4>
          <a href="index.php"><i class="fa-solid fa-house text-danger mr-2"></i></a>
          <a href="login.php"><i class="fa-solid fa-circle-user mr-2 bg-transparent text-danger"></i></a>
    </h4>
</div>
</div>
<!--link part end here----->



<!--footer part----->
<div class="col-md-12 text-center"> Reserve by Nr Durjoy</div>
</div>

<!--footer part end----->









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