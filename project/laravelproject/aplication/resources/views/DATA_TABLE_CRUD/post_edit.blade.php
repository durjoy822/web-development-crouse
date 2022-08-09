<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Post create</title>
  </head>
  <body>
 
<div class="container mt-5">
  <form class="col-6" action="{{URL::to('/')}}/post/{{$power->id}}" method="post"> @csrf
  {{method_field('put')}}
    <h2>Post  Edit  page</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="exampleInputEmail1" value="{{$power->title}}" aria-describedby="emailHelp">
 <select class="form-select mt-1" name="section" aria-label="Default select example">
  <option value="" selected>SELECT SECTION</option>
  <option value="services" @if($power->section=='Service')selected @endif >SERVICE</option>
  <option value="protfolio"@if($power->section=='protfolio')selected @endif>PROTFOLIO</option>
  <option value="about"    @if($power->section=='about')selected @endif>ABOUT</option>
  <option value="team"      @if($power->section=='team')selected @endif>TEAM</option>
</select> 
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Content</label>
  <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="4">"{{$power->content}}"</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>