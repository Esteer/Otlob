<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Otlob</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  
        <link href="lib/animate-css/animate.min.css" rel="stylesheet">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    </head>
    <body>
            @include('nav') 
            @yield('home')        
  
 @yield('street')
 @yield('resturant')
 @yield('cate')
 @yield('meals')
 @yield('extra-js')
 @yield('extra-css')
 @yield('content')
 @yield('extraa-js')
 @yield('content1')
 @yield('lib')
 @yield('team')
 @yield('teamsc')
 @yield('clib')
 @yield('contact')

 @yield('aboutlib')
 @yield('aboutus')
 @yield('scaboutus')
 @include('footer')
 <script src="lib/jquery/jquery.min.js"></script>
 
 
  <script src="lib/superfish/superfish.min.js"></script>
 
  <script src="lib/wow/wow.min.js"></script>

  <script src="lib/easing/easing.js"></script> 
    </body>
</html>
