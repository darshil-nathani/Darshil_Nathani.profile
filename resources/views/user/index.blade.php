<!DOCTYPE html>
<html lang="en">
<head>
    <title>Darshil Nathani</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('Asset/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('Asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('Asset/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('Asset/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/css/style.css') }}">


</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

   @include('template.Navbar')
   @include('template.Home')
   @include('template.About')
   @include('template.Resume')
   @include('template.Servise')
   @include('template.Skill')
   @include('template.Project')
   @include('template.Contact')
   @include('template.Footer')


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="{{ asset('Asset/js/jquery.min.js') }}"></script>
<script src="{{ asset('Asset/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('Asset/js/popper.min.js') }}"></script>
<script src="{{ asset('Asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Asset/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('Asset/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('Asset/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('Asset/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('Asset/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('Asset/js/aos.js') }}"></script>
<script src="{{ asset('Asset/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('Asset/js/scrollax.min.js') }}"></script>
<script src="{{ asset('Asset/js/main.js') }}"></script>
</body>
</html>
