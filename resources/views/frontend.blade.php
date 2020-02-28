<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="{{asset('moviefrontend/css/bootstrap.min.css')}}">
  <script type="text/javascript" src="{{asset('moviefrontend/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('moviefrontend/js/bootstrap.bundle.min.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('moviefrontend/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('moviefrontend/style1.css')}}">
  <script type="text/javascript" src="{{asset('moviefrontend/custom.js')}}"></script>
</head>
<body style="background-color:#000000 ">
<div id="cool">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active px-3">
            <a class="nav-link text-light" href="">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active px-3">
            <a class="nav-link text-light" href="#">About <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active px-3">
            <a class="nav-link text-light" href="#">Trailers <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active px-3">
            <a class="nav-link text-light" href="contact.html">Content<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active px-3">
            <a class="nav-link text-light" href="#" data-toggle="modal" data-target="#cardoneModal">SignIn/SignUp <span class="sr-only">(current)</span></a>
          </li>



        </ul>
      </div>
    </nav>
    <div class="container" id="navtitle">
      <div class="row justify-content-center text-center">
        <div class="col-10">
          <a class="navbar-brand" href="#"><img src="image/nn.png" style="width:300px; height:80px">
      </a><h1 class="display-2 text-light col-lg-12">Movie Theatire</h1>
          <hr class="my-5" id="divider">

        </div>
        

      </div>


    </div>



  </div>
           <div class="container col-lg-12 my-5">
           <h1 class="display-2 text-danger">Now Showing Movie</h1>
          

<!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/en.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Avenger Endgame</h5>
        <p>Feb 10 to 18</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/st.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Feb 10 to 18</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/go.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Feb 10 to 18</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 -->

 <div class="row my-5">
  <div class="column">
    <a href="#"><img src="image/go.jpg"  style="width:100%"></a>
    <h1 class="display-10 text-dark">Godzilla</h1>
  </div>
  <div class="column">
    <a href=""><img src="image/fa.jpg"  style="width:100%"></a>
    <h1 class="display-10 text-dark">Fanstatic 4</h1>
  </div>
  <div class="column">
    <a href=""><img src="image/st.jpg"  style="width:100%"></a>
    <h1 class="display-10 text-dark">Star War The Last Jedi</h1>
  </div>
</div>

</div>

 @yield('content1')

  <!-- Footer -->
<footer class="bg-danger">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>