<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ApprentisRecrutor2000</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="{{url('images/icons/graduation.ico')}}"/>
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}">
  <!--===============================================================================================-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('vendor/animate/animate.css')}}">
  <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="{{url('vendor/css-hamburgers/hamburgers.min.css')}}">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('vendor/select2/select2.min.css')}}">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
  <!--===============================================================================================-->
  </head>
  <body>
    
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div class="login100-pic js-tilt" data-tilt>
            <img src="images/logo_ecole.png" alt="IMG" style="width: 90%;">
          </div>

          <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
          @csrf
            <span class="login100-form-title">
              Bienvenue
            </span>
              <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input class="input100" type="text" id="email" name="email" placeholder="Email">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
              </div>

              <div class="wrap-input100 validate-input" data-validate = "Password is required">
                <input class="input100" type="password" id="password" name="password" placeholder="Password">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
              </div>

              <div class="container-login100-form-btn">
                <input type="submit" class="login100-form-btn" value="Valider" />
              </div>
            

            <div class="text-center p-t-12">
              <span class="txt1">
                Forgot
              </span>
              <a class="txt2" href="#">
                Username / Password?
              </a>
            </div>

            <div class="text-center p-t-136">
              <a class="txt2" href="#">
                Create your Account
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    

    
  <!--===============================================================================================-->	
    <script src="{{url('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
  <!--===============================================================================================-->
    <script src="{{url('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <!--===============================================================================================-->
    <script src="{{url('vendor/select2/select2.min.js')}}"></script>
  <!--===============================================================================================-->
    <script src="{{url('vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script >
      $('.js-tilt').tilt({
        scale: 1.1
      })
    </script>
  <!--===============================================================================================-->
    <script src="{{url('js/main.js')}}"></script>

  </body>
</html>