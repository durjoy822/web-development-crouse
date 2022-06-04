<?php
    session_start();
      if(!isset( $_SESSION["loginstatus"]) ||  $_SESSION["loginstatus"]==0){ 
      header("Location: http://localhost/studentproject/login.php");
      }
  ?>




<?php
include('includes/header.php');
?>
  <body>
    <!--bannar part start here part----->
  <div class="container">
        <div class="col-md-12 mb-3">
            <img src="img/post-Web-Banner.png" alt="" class="w-100">
        </div>
    <!--bannar part end here ----->    
    <!--form part start here ----->    
<div class="row">
    <div class="col-md-8">

  <form action="postsave.php" method="post" class=" ml-5">
  <h4 class="text-center">Uplode Your Project Title and discription</h4>
  <div class="form-group ">
            <label for="exampleInputPassword1">title</label>
            <input type="text" name="title" placeholder="Your project title" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group ">
            <label for="exampleInputPassword1">discription</label>
            <input type="text" name="discription" placeholder="Your project discription" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Uplode</button>
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