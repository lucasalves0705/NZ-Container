<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spicy Club a Hotels and Restaurants Category Bootstrap responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Spicy Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/app.css')}}" type="text/css" media="all" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/cm-overlay.css') }}" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- font -->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <!-- //font -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    @yield('styles')
    <![endif]-->
</head>
<body>
<div class="agileinfo-dot">
    <!-- banner -->
    <div class="banner jarallax">
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="agileinfo-social-grids">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-vk"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{ route('home') }}">Inicio</a></li>
                                <li><a href="{{ route('products') }}" class="scroll">Produtos</a></li>
                                <li><a href="#services" class="scroll">Mesas</a></li>
                                <li><a href="#menu" class="scroll">Menu</a></li>
                                <li><a href="#team" class="scroll">Team</a></li>
                                <li><a href="#blog" class="scroll">Blog</a></li>
                                <li><a href="#mail" class="scroll">Mail Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </div>
    <!-- //banner -->
</div>

@yield('content')

<!-- footer -->
<footer>
    <div class="container">
        <div class="copyright">
            <p>© 2017 Spicy Club. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts </a></p>
        </div>
    </div>
</footer>
<!-- //footer -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mobile.custom.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.cm-overlay.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jarallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/responsiveslides.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })

    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });

        $().UItoTop({ easingType: 'easeOutQuart' });

        $('.cm-overlay').cmOverlay();
    });
</script>

@yield('scripts')
<!-- //here ends scrolling icon -->
</body>
</html>
