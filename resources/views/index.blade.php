<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('animate/animate.css') }}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('select2/select2.min.css') }}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/util.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form">
          <span class="login100-form-title p-b-43">
            Negros Polymedic Hospital
          </span>
          
          
          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email">
            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>
          </div>
          
          
          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="pass">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>
          
        </form>

        <div class="login100-more" style="background-image: url('images/bg-01.jpg');">
        </div>
      </div>
    </div>
  </div>
  
  

  
  
<!--===============================================================================================-->
  <script src="{{ URL::asset('jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ URL::asset('animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ URL::asset('bootstrap/js/popper.js') }}"></script>
  <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ URL::asset('select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ URL::asset('daterangepicker/moment.min.js') }}"></script>
  <script src="{{ URL::asset('daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ URL::asset('countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
  <script src="{{ URL::asset('js/main.js') }}"></script>

</body>
</html>