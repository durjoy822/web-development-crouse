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
  <div class="top_nav bg-primary ">
    <div class="container ">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/')}}/post/create">Create post</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{URL::to('/')}}/dashboard">Dashboard</a>
              </li>

            </ul>
          </div>
        </div>
        <div class="mt-1">
          <form action="{{URL::to('/')}}/logout" method="post">@csrf
            <button type="submit">Logout</button>
          </form>
        </div>
      </nav>
    </div>

  </div>

  <!-- this is a post home main content part/section  -->
  <div class="container mt-3">
    <div class="row">
      <div class="col-1 border">
        <div>
          <h5 class="text-center">ID</h5>
        </div>
      </div>
      <div class="col-3 border">
        <div>
          <h5 class="text-center">Title</h5>
        </div>
      </div>
       <div class="col-1 border">
        <div>
          <h5 class="text-center">Section</h5>
        </div>
      </div> 
      <div class="col-5 border">
        <div>
          <h5 class="text-center">content</h5>
        </div>
      </div>
      <div class="col-2 border">
        <div></div>
      </div>
      @foreach($var as $item)
      <div class="col-1 border">
        <div>{{$item->id}}</div>
      </div>
      <div class="col-3 border">
        <div>{{$item->title}}</div>
      </div>
     <div class="col-1 border">
        <div>{{$item->section}}</div>
      </div>
      <div class="col-5 border">
        <div>{{$item->content}}</div>
      </div>
      <div class="col-2 border">
        <div class="text-right ">
          <button><a class="text-decorattion-none" href="{{URL::to('/')}}/post/{{$item->id}}/edit">Edit</a></button>
          <form Click="alert( 'Did you fill out a 27B/6?' )" class="d-inline" action="{{URL::to('/')}}/post/{{$item->id}}" method="post"> @csrf
            {{method_field('DELETE')}}

            <button type="submit">Delete</button>
          </form>
        </div>
      </div>
      @endforeach
    </div>
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