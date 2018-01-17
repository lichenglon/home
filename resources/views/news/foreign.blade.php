<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Blog</title>
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/reality-icon.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/settings.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/range-Slider.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/search.css">
</head>
<body>
<!--Loader-->
<div class="loader">
    <div class="span">
        <div class="location_indicator"></div>
    </div>
</div>
@include('public.publicLoaderCartoon')

{{--头部--}}
@include('house.listingPublic.header')

<!-- Page Banner Start-->
<section class="page-banner padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-uppercase">Blog classic</h1>
                <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                <ol class="breadcrumb text-center">
                    <li><a href="{{asset('home')}}/#.">Home</a></li>
                    <li><a href="{{asset('home')}}/#.">Properties</a></li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- Page Banner End -->



<!-- News Start -->
<section id="news-section-1" class="property-details padding_top">
    <div class="container property-details">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="news-1-box clearfix">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="image-2">
                                <a href="{{asset('home')}}/#"><img src="{{asset('home')}}/images/blog-1.jpg" alt="image" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 padding-left-25">
                            <h3><a href="{{asset('home')}}/#">Easy your wat to the Global sotck</a></h3>
                            <div class="news-details padding-b-10 margin-t-5">
                                <span><i class="icon-icons230"></i> by Martin Moore</span>
                                <span><i class="icon-icons228"></i> August 22, 2017</span>
                            </div>
                            <p class="p-font-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit mi accumsan nec...</p>
                            <div class="pro-3-link padding-t-20">
                                <a class="btn-more" href="{{asset('home')}}/#">
                                    <i>
                                        <img alt="arrow" src="{{asset('home')}}/images/arrowl.png">
                                    </i>
                                    <span>Contact Me</span>
                                    <i>
                                        <img alt="arrow" src="{{asset('home')}}/images/arrowr.png">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="news-1-box clearfix">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="image-2">
                                <a href="{{asset('home')}}/#"> <img src="{{asset('home')}}/images/blog-2.jpg" alt="image"  class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 padding-left-25">
                            <h3><a href="{{asset('home')}}/#">Easy your wat to the Global sotck</a></h3>
                            <div class="news-details padding-b-10 margin-t-5">
                                <span><i class="icon-icons230"></i> by Martin Moore</span>
                                <span><i class="icon-icons228"></i> August 22, 2017</span>
                            </div>
                            <p class="p-font-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit mi accumsan nec...</p>
                            <div class="pro-3-link padding-t-20">
                                <a class="btn-more" href="{{asset('home')}}/#">
                                    <i><img alt="arrow" src="{{asset('home')}}/images/arrowl.png"></i><span>Contact Me</span><i> <img alt="arrow" src="{{asset('home')}}/images/arrowr.png"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="news-1-box clearfix">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div id="agent-2-slider" class="owl-carousel">
                                <div class="item">
                                    <div class="property_item heading_space">
                                        <div class="image"><a href="{{asset('home')}}/#"><img src="{{asset('home')}}/images/blog-3.jpg" alt="listin" class="img-responsive"></a></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="property_item heading_space">
                                        <div class="image"><a href="{{asset('home')}}/#"><img src="{{asset('home')}}/images/blog-4.jpg" alt="listin" class="img-responsive"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="property_item heading_space">
                                        <div class="image"><a href="{{asset('home')}}/#"><img src="{{asset('home')}}/images/blog-5.jpg" alt="listin" class="img-responsive"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 padding-left-25">
                            <h3><a href="{{asset('home')}}/#">Easy your wat to the Global sotck</a></h3>
                            <div class="news-details padding-b-10 margin-t-5">
                                <span><i class="icon-icons230"></i> by Martin Moore</span>
                                <span><i class="icon-icons228"></i> August 22, 2017</span>
                            </div>
                            <p class="p-font-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit mi accumsan nec...</p>
                            <div class="pro-3-link padding-t-20">
                                <a class="btn-more" href="{{asset('home')}}/#"><i><img alt="arrow" src="{{asset('home')}}/images/arrowl.png"></i><span>Contact Me</span><i><img alt="arrow" src="{{asset('home')}}/images/arrowr.png"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="news-1-box clearfix">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="image-2">
                                <a href="{{asset('home')}}/#"><img src="{{asset('home')}}/images/blog-4.jpg" alt="image" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 padding-left-25">
                            <h3><a href="{{asset('home')}}/#">Easy your wat to the Global sotck</a></h3>
                            <div class="news-details padding-b-10 margin-t-5">
                                <span><i class="icon-icons230"></i> by Martin Moore</span>
                                <span><i class="icon-icons228"></i> August 22, 2017</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit mi accumsan nec...</p>
                            <div class="pro-3-link">
                                <a class="btn-more" href="{{asset('home')}}/#">
                                    <i><img alt="arrow" src="{{asset('home')}}/images/arrowl.png"></i><span>Contact Me</span><i><img alt="arrow" src="{{asset('home')}}/images/arrowr.png"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="news-1-box clearfix">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="image-2">
                                <a href="{{asset('home')}}/#"><img src="{{asset('home')}}/images/blog-5.jpg" alt="image" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 padding-left-25">
                            <h3><a href="{{asset('home')}}/#">Easy your wat to the Global sotck</a></h3>
                            <div class="news-details padding-b-10 margin-t-5">
                                <span><i class="icon-icons230"></i> by Martin Moore</span>
                                <span><i class="icon-icons228"></i> August 22, 2017</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit mi accumsan nec...</p>
                            <div class="pro-3-link">
                                <a class="btn-more" href="{{asset('home')}}/#"><i><img alt="arrow" src="{{asset('home')}}/images/arrowl.png"></i><span>Contact Me</span><i><img alt="arrow" src="{{asset('home')}}/images/arrowr.png"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="news-1-box clearfix">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="image-2">
                                <a href="{{asset('home')}}/#"><img src="{{asset('home')}}/images/blog-6.jpg" alt="image" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 padding-left-25">
                            <h3><a href="{{asset('home')}}/#">Easy your wat to the Global sotck</a></h3>
                            <div class="news-details padding-b-10 margin-t-5">
                                <span><i class="icon-icons230"></i> by Martin Moore</span>
                                <span><i class="icon-icons228"></i> August 22, 2017</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit mi accumsan nec...</p>
                            <div class="pro-3-link">
                                <a class="btn-more" href="{{asset('home')}}/#"><i><img alt="arrow" src="{{asset('home')}}/images/arrowl.png"></i><span>Contact Me</span><i><img alt="arrow" src="{{asset('home')}}/images/arrowr.png"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin_bottom">
                    <div class="col-md-12">
                        <ul class="pager">
                            <li><a href="{{asset('home')}}/#.">1</a></li>
                            <li class="active"><a href="{{asset('home')}}/#.">2</a></li>
                            <li><a href="{{asset('home')}}/#.">3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <aside class="col-md-4 col-xs-12">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-search bottom40" method="get" id="news-search" action="">
                            <div class="input-append">
                                <input type="text" class="input-medium search-query" placeholder="Search Here" value="">
                                <button type="submit" class="add-on"><i class="icon-icons185"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <h3 class="bottom20">Categories</h3>
                        <ul class="pro-list bottom20">
                            <li>
                                Air Conditioning
                            </li>
                            <li>
                                Barbeque
                            </li>
                            <li>
                                Dryer
                            </li>
                            <li>
                                Laundry
                            </li>
                            <li>
                                Refrigerator
                            </li>
                            <li>
                                Swimming Pool
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="bottom40 margin40">Featured Properties</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 p-image image bottom20">
                        <img src="{{asset('home')}}/images/f-p-1.png" alt="image">
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="feature-p-text">
                            <h4><a href="{{asset('home')}}/#.">Get the best property in Town by our agent</a></h4>
                            <span>by Martin Moore</span>
                        </div>
                    </div>
                </div>
                <div class="row padding-b-30 padding-t-30">
                    <div class="col-md-4 col-sm-4 col-xs-12 p-image image bottom20">
                        <img src="{{asset('home')}}/images/f-p-1.png" alt="image">
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="feature-p-text">
                            <h4><a href="{{asset('home')}}/#.">Get the best property in Town by our agent</a></h4>
                            <span>by Martin Moore</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 p-image image">
                        <img src="{{asset('home')}}/images/f-p-1.png" alt="image">
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="feature-p-text">
                            <h4><a href="{{asset('home')}}/#.">Get the best property in Town by our agent</a></h4>
                            <span>by Martin Moore</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="margin40 bottom20">Featured Properties</h3>
                    </div>
                    <div class="col-md-12 padding-t-30">
                        <div id="agent-2-slider" class="owl-carousel">
                            <div class="item">
                                <div class="property_item heading_space">
                                    <div class="image">
                                        <a href="{{asset('home')}}/#."><img src="{{asset('home')}}/images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
                                        <div class="feature"><span class="tag-2">For Rent</span></div>
                                        <div class="price clearfix"><span class="tag pull-right">$8,600 Per Month - <small>Family Home</small></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="property_item heading_space">
                                    <div class="image">
                                        <a href="{{asset('home')}}/#."><img src="{{asset('home')}}/images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
                                        <div class="feature"><span class="tag-2">For Rent</span></div>
                                        <div class="price clearfix"><span class="tag pull-right">$8,600 Per Month - <small>Family Home</small></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- News End -->



{{--页尾--}}
@include('house.listingPublic.footer')

{{--引入公共js文件--}}
@include('public.publicHouseJs')

</body>
</html>


