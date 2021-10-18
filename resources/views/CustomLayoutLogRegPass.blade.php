<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PasteurMontRoland - @yield('title')</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'>
  <link rel="stylesheet" href="{{ url('login.css') }}">
  <link rel="icon" href="{{ asset('./img/core-img/fav2.ico') }}">
</head>
<body>
<!-- partial:index.partial.html -->
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="logo">
          <img src="{{ asset('LOGO_banas_blanc.svg') }}" class="img-fluid" alt="Responsive image">
        </div>
        
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">@yield('formtitle')</h5>
            @section('form')
            @show
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<!-- partial -->
  
</body>
</html>
