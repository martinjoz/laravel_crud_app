<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Techkey Cybernetics | Client Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Techkey Cybernetic client dashboard." name="description" />
    <meta content="Techkey Cybernetics" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/logo.png" />

    <!-- Bootstrap Css -->
    <link
      href="{{asset('css/bootstrap.css')}}"
      id="bootstrap-stylesheet"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Icons Css -->
    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link
      href="{{asset('css/app.css')}}"
      id="app-stylesheet"
      rel="stylesheet"
      type="text/css"
    />
  </head>

  <body class="authentication-bg">
    <div class="account-pages mt-3 mb-2">

      <!-- Start container -->

        @yield('content')

      <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="{{asset('js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('js/app.min.js')}}"></script>
  </body>
</html>
