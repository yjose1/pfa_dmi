<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ENSAH - Département Math-Info </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/superslides.css')}}">
    <link id="switcher" href="{{asset('css/themes/default-theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('style')

</head>
<body>



<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"></a>
<!-- END SCROLL TOP BUTTON -->

<!--=========== BEGIN HEADER SECTION ================-->

<header id="header">
    <!-- BEGIN MENU -->
    <div class="menu_area">
        <nav id="nav-pr" class="navbar  navbar-default navbar-fixed-top" role="navigation">  <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- TEXT BASED LOGO -->
                    <img class="floated left" src="{{asset('img/logo_dmi.png')}}" height="90px"/>

                    <a  class="navbar-brand right text-center visible-lg" href="./" > <span><span> Departement   </span> <span class="blue">Math</span>-<span class="green">info</span><br/>
                         ENSAH </span> </a>
                    <!-- IMG BASED LOGO  -->
                    <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->

                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <div id="top-menu-desc" class="visible-lg visible-md text text-right" style="margin-top:0px;padding-top: 10px; margin-right: 20px"> <span style="font-size: 26px; color: #216D7A;"> <span class="fa fa-facebook-square"></span> <span class="fa fa-twitter-square"></span> <span class="fa fa-facebook-square"></span> <span class="fa fa-google-plus-square"></span></span> DEV VERSION 4/18/2016 </div>
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li class="active"><a href="./">Accueil</a></li>
                        <li><a href="./ensah">ENSAH</a></li>
                        <li><a href="./actualites">Actualité</a></li>
                        <li><a href="./gallery">Gallery</a></li>
                        <li><a href="./formation">Formation</a></li>
                        <li><a href="./Corps_Enseigant">Corps Enseignant</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Compte<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('connexion')}}">Connexion</a></li>
                                <li><a href="{{url('inscription')}}">Inscription</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <nav id="nav-sc" class=" hidden navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a  class=" hidden navbar-brand right text-center visible-lg" href="./" > <span>DMI ENSAH
                        </span> </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li class="active"><a href="./">Accueil</a></li>
                        <li><a href="./ensah">ENSAH</a></li>
                        <li><a href="./actualites">Actualité</a></li>
                        <li><a href="./gallery">Gallery</a></li>
                        <li><a href="./formation">Formation</a></li>
                        <li><a href="./Corps_Enseigant">Corps Enseignant</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Compte<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('connexion')}}">Connexion</a></li>
                                <li><a href="{{url('inscription')}}">Inscription</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>

</header>

@yield('content')

<footer id="footer">
    <!-- Start footer top area -->
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-ld-3  col-md-3 col-sm-3">
                    <div class="single_footer_widget">
                        <h3>Presentation</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class="col-ld-3  col-md-3 col-sm-3">
                    <div class="single_footer_widget">
                        <h3>links 2</h3>
                        <ul class="footer_widget_nav">
                            <li><a href="#">Our Tutors</a></li>
                            <li><a href="#">Our Students</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">News &amp; Media</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-ld-3  col-md-3 col-sm-3">
                    <div class="single_footer_widget">
                        <h3>links</h3>
                        <ul class="footer_widget_nav">
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                            <li><a href="#">Link 4</a></li>
                            <li><a href="#">Link 5</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-ld-3  col-md-3 col-sm-3">
                    <div class="single_footer_widget">
                        <h3>Social Links</h3>
                        <ul class="footer_social">
                            <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End footer top area -->

    <!-- Start footer bottom area -->
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer_bootomLeft">
                        <p> Copyright &copy; All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer_bootomRight">
                        <p>GI2 2015/2016</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End footer bottom area -->
</footer>
<!--=========== END FOOTER SECTION ================-->



<!-- Javascript Files
================================================== -->



<!-- initialize jQuery Library -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

@yield('script')
<!-- Custom js-->
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>