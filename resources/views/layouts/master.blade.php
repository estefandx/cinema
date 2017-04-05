<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Flat Theme</title>
   <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">


  <!--  <link href="css/font-awesome.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">


   <!-- <link href="css/prettyPhoto.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ URL::asset('css//prettyPhoto.css') }}">

    <!--<link href="css/animate.css" rel="stylesheet">-->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">


   <!-- <link href="css/main.css" rel="stylesheet">-->
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <!--[if lt IE 9]>



   <!-- <script src="js/respond.min.js"></script>-->
    <script type="text/javascript" src="{{ URL::asset('js/respond.min.js') }}"></script>
    <![endif]-->
    <!--<link rel="shortcut icon" href="images/ico/favicon.ico">-->
    <link rel="stylesheet" href="{{ URL::asset('images/ico/favicon.ico') }}">


    <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">-->
    <link rel="stylesheet" href="{{ URL::asset('images/ico/apple-touch-icon-144-precomposed.png') }}">

    <!--<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">-->
    <link rel="stylesheet" href="{{ URL::asset('images/ico/apple-touch-icon-114-precomposed.png') }}">

   <!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">-->
    <link rel="stylesheet" href="{{ URL::asset('images/ico/apple-touch-icon-72-precomposed.png') }}">

   <!-- <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">-->
    <link rel="stylesheet" href="{{ URL::asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->
<body>
<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Cinema<img src="images/cine.png" alt="logo" height="27px"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{ url('/')}}">Home</a></li>
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="{{ url('/pelicula') }}">Cartelera</a></li>
                @if (Auth::guest())
                     <li><a href="{{ url('/login') }}">Iniciar sesion</a></li>
                    <li><a href="{{ url('/register') }}">Registrarme</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->nombre }} <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Salir
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <li><a href="blog-item.html">Editar perfil</a></li>

                        </ul>
                    </li>

                @endif


            </ul>
        </div>
    </div>
</header><!--/header-->




@yield('contenido')




<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Faq</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<!--<script src="js/jquery.js"></script>-->
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>

<!--<script src="js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

<!--<script src="js/jquery.prettyPhoto.js"></script>-->
<script type="text/javascript" src="{{ URL::asset('js/jquery.prettyPhoto.js') }}"></script>

<!--<script src="js/main.js"></script>-->
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>