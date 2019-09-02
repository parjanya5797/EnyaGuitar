<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Page Title -->
    <title>@yield('page-title')</title>


    <!-- FavIcon Link -->
    <link rel="icon" type="image/ico" href="{{url('public/favicon.ico')}}">


    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="description" content="">
    <meta name="keywords" content="">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">

    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Global CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/css/style.css')}}">


    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="{{url('public/css/owl.carousel.min.css')}}">


    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Jquery 1.9.1 -->
    <script type="text/javascript" src="{{url('public/js/jquery-1.9.1.min.js')}}"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    
</head>
<body>
    
   <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></button>
   <div>
    @include('header.header')
</div>

<div style="min-height: 50vh;">
    @yield('content')
</div>

<div>
    @include('footer.footer')
</div>
</body>

<!-- Popper, Boostrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{url('public/js/bootstrap.js')}}"></script>

<script src='https://unpkg.com/xzoom/dist/xzoom.min.js'></script>
<script src='https://hammerjs.github.io/dist/hammer.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js'></script>

<!-- Owl Carousel JS -->
<script type="text/javascript" src="{{url('public/js/owl.carousel.min.js')}}"></script>


<!-- FB MESSANGER -->
<script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script>


<!-- Global JS -->
<script type="text/javascript" src="{{url('public/js/js.js')}}"></script>
</html>