<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="nav.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   
   <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
   
   <link href="{{ asset('css/nav.js') }}" rel="stylesheet">
   
 
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     
   <script src="nav.js"></script>
   <title>CSS MenuMaker</title>
</head>
<body>

<div id='cssmenu'>
<ul style="background-color:#404040;">
   <li class='active'><a href="{{url('/home')}}"><span>Otlob</span></a></li>
   
   <!-- <li><a href='#'><span>Company</span></a></li>
   <li class='last'><a href='#'><span>Contact</span></a></li> -->
   <li>
      
       {{--   @if({{Auth::user()->admin==1}})  --}}
        @if(Auth::check() && Auth::user()->admin==1)
      <a href="{{url('/adminpanel/resturants')}}"><span>dashboard</span></a>
      @endif 
      @if(Auth::check() && Auth::user()->admin==2)
      <a href="{{url('/adminpanel2/resturants')}}"><span>dashboard</span></a>
      @endif   
</li>
    
   <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        <li><a href="{{url('/team')}}">Team</a></li>
        <li><a href="{{url('/contact-us')}}">Contact us</a></li>
        <li><a href="{{url('/aboutus')}}">About us</a></li>
        @guest
            <li><a href="{{ route('login') }}">Login</a></li> 
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
               {{ Auth::user()->name }} <span class="caret"></span>
             </a>
               
                <ul class="dropdown-content">
                   
                    <li>
                        <a href="{{ route('logout')}}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Logout
                                </a> 
                     
  

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    
                   
                </ul>
            </li>
        @endguest
    </ul>
  
 
</ul>
</div>

</body>
<html>
