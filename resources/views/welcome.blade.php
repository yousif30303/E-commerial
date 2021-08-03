<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('/css/app.css')}}" >
</head>
<body>
  <header id="header">
    <div class="py-2 bg-light border-right">
            @guest
              <a href="{{route('register')}}" class="border-right px-3 text-dark">Register</a>
              <a href="{{route('login')}}" class="border-right px-3 text-dark">Login</a>
            @endguest
            @auth
              <a href="#" class="px-3 text-dark">{{auth()->user()->name}}</a>
              <a href="{{route('logout')}}" class="px-3 text-dark">Logout</a>
            @endauth
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <a class="navbar-brand text-white" href="#">Mobile Shope</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav m-auto main_bar">
          @auth
            <a class="nav-item nav-link active text-white" href="/home">Home</a>  
          @endauth
          @guest
            <a class="nav-item nav-link active text-white" href="/">Home</a>  
          @endguest
          <a class="nav-item nav-link text-white" href="{{route('CreateProduct')}}">Create Your Own Product</a>
        </div>
        <form action="#" class="font-size-14 font-rale">
          <a href="{{route('ShowCart')}}" class="py-2 rounded-pill color-primary-bg cartIcon">
            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
            <span class="px-3 py-2 rounded-pill text-dark bg-light">@auth {{count(auth()->user()->carts()->get())}} @endauth</span>
          </a>
      </form>
      </div>
    </nav>
  </header>
  
  @yield('content')
  <footer>
      <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-white">Mobile Shopee</h5>

        <p class="text-secondary">Find best mobiles with odorable price and amazing discounds and offers.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-white">Newslatter</h5>

        <form class="input-group">
          <input type="text" class="form-control form-control-sm" placeholder="Your email"
            aria-label="Your email" aria-describedby="basic-addon2">
          <div class="input-group-append px-2">
            <button class="btn btn-sm btn-primary px-2 py-0" type="button">Subscribe</button>
          </div>
        </form>

      </div>

      <div class="col-md-1 mx-auto">

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-white">Information</h5>

        <ul class="list-unstyled footer_text">
          <li>
            <a href="#!">About Us</a>
          </li>
          <li>
            <a href="#!">Delivery Information</a>
          </li>
          <li>
            <a href="#!">Privacy Policy</a>
          </li>
          <li>
            <a href="#!">Terms & Conditions</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-white">Account</h5>

        <ul class="list-unstyled footer_text">
          <li>
            <a href="#!">My Account</a>
          </li>
          <li>
            <a href="#!">Order History</a>
          </li>
          <li>
            <a href="#!">Wish List</a>
          </li>
          <li>
            <a href="#!">Newslatters</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-white pt-5">© 2020 Copyright: Designed by
    <a href="https://mdbootstrap.com/"> Yousif</a>
  </div>
  <!-- Copyright -->

  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>