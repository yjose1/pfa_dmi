@extends('layouts.app')

@section('style')
@endsection


@section('content')
@section('content')
    <!--=========== BEGIN SLIDER SECTION ================-->

    <section id="slider">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="slider_area">
                    <!-- Start super slider -->
                    <div id="slides">
                        <ul class="slides-container">
                            <li>
                                <img src="{{asset('img/slider/2.jpg')}}" alt="img">
                                <div class="slider_caption">
                                    <h2>Departement Mathematiques et Informatique - ENSAH</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    <a class="slider_btn" href="#">Know More</a>
                                </div>
                            </li>
                            <!-- Start single slider-->
                            <li>
                                <img src="{{asset('img/slider/3.jpg')}}" alt="img">
                                <div class="slider_caption slider_right_caption">
                                    <h2>Better Education Environment</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                                    <a class="slider_btn" href="#">Know More</a>
                                </div>
                            </li>
                            <!-- Start single slider-->
                            <li>
                                <img src="{{asset('img/slider/4.jpg')}}" alt="img">
                                <div class="slider_caption">
                                    <h2>Find out you in better way</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                                    <a class="slider_btn" href="#">Know More</a>
                                </div>
                            </li>
                        </ul>
                        <nav class="slides-navigation">
                            <a href="#" class="next"></a>
                            <a href="#" class="prev"></a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
        <div class="container">
            <div class="row">
                <!-- Start about us area -->
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="aboutus_area wow fadeInLeft">
                        <h2 class="titile">Presentation</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="newsfeed_area wow fadeInRight">
                        <ul class="nav nav-tabs feed_tabs nav-justified " id="myTab2">
                            <li class="active"><a href="#news" data-toggle="tab">Actualités</a></li>
                            <li><a href="#notice" data-toggle="tab">Notifications</a></li>
                            <li><a href="#events" data-toggle="tab">Evenements</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Start news tab content -->
                            <div class="tab-pane fade in active" id="news">
                                <ul class="news_tab">
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="#">
                                                    <img class="media-object" src="{{asset('img/news.jpg')}}" alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">Dummy text of the printing and typesetting industry</a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque cupiditate dolor eligendi harum laborum .....</p>
                                                <span class="feed_date"> <i class="fa fa-clock-o"></i> 27.02.15</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="#">
                                                    <img class="media-object" src="{{asset('img/news.jpg')}}" alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">Dummy text of the printing and typesetting industry</a>
                                                <span class="feed_date">28.02.15</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="#">
                                                    <img class="media-object" src="{{asset('img/news.jpg')}}" alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">Dummy text of the printing and typesetting industry</a>
                                                <span class="feed_date">28.02.15</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a class="see_all" href="#">See All</a>
                            </div>
                            <!-- Start notice tab content -->
                            <div class="tab-pane fade " id="notice">
                                    <ul class="news_tab">
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a class="news_img" href="#">
                                                        <img class="media-object" src="{{asset('img/news.jpg')}}" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Dummy text of the printing and typesetting industry</a>
                                                    <span class="feed_date">27.02.15</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a class="news_img" href="#">
                                                        <img class="media-object" src="{{asset('img/news.jpg')}}" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Dummy text of the printing and typesetting industry</a>
                                                    <span class="feed_date">28.02.15</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a class="news_img" href="#">
                                                        <img class="media-object" src="{{asset('img/news.jpg')}}" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Dummy text of the printing and typesetting industry</a>
                                                    <span class="feed_date">28.02.15</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                            </div>
                            <!-- Start events tab content -->
                            <div class="tab-pane fade " id="events">
                                <ul class="news_tab">
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="#">
                                                    <img class="media-object" src="{{asset('img/news.jpg')}}" alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">Dummy text of the printing and typesetting industry</a>
                                                <span class="feed_date">27.02.15</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="#">
                                                    <img class="media-object" src="{{asset('img/news.jpg')}}" alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">Dummy text of the printing and typesetting industry</a>
                                                <span class="feed_date">28.02.15</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="news_img" href="#">
                                                    <img class="media-object" src="{{asset('img/news.jpg')}}" alt="img">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">Dummy text of the printing and typesetting industry</a>
                                                <span class="feed_date">28.02.15</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a class="see_all" href="#">See All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--=========== BEGIN WHY US SECTION ================-->

    <section id="whyUs">
        <!-- Start why us top -->
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="whyus_top">
                    <div class="container">
                        <!-- Why us top titile -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="title_area">
                                    <h2 class="title_two">DMI ENSAH</h2>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <!-- End Why us top titile -->
                        <!-- Start Why us top content  -->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_whyus_top wow fadeInUp">
                                    <div class="whyus_icon">
                                        <span class="fa fa-android"></span>
                                    </div>
                                    <h3>Titre 1</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci alias aut corporis </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_whyus_top wow fadeInUp">
                                    <div class="whyus_icon">
                                        <span class="fa fa-users"></span>
                                    </div>
                                    <h3>Titre 2</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque doloremque eius hic natus necessitatibus vitae.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_whyus_top wow fadeInUp">
                                    <div class="whyus_icon">
                                        <span class="fa fa-tasks"></span>
                                    </div>
                                    <h3>Titre 3</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto asperiores quod saepe? aza</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_whyus_top wow fadeInUp">
                                    <div class="whyus_icon">
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                    <h3>Titre 4</h3>
                                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Why us top content  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End why us top -->

    </section>
@endsection

@endsection
@section('script')

    <!-- superslides slider -->
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/jquery.animate-enhanced.min.js')}}"></script>
    <script src="{{asset('js/jquery.superslides.min.js')}}" type="text/javascript" charset="utf-8"></script>

@endsection
