<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/reality-icon.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/settings.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/range-Slider.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/search.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/style.css">
</head>
<body>


<!--Loader-->
{{--程序载人动画效果--}}
<div class="loader">
    <div class="span">
        <div class="location_indicator"></div>
    </div>
</div>
<!--Loader-->


<!--Slider-->
{{--轮播图--}}
<div class="rev_slider_wrapper">
    <div id="rev_overlaped" class="rev_slider"  data-version="5.0">
        <ul>
            <!-- SLIDE -->
            <li data-transition="fade">
                <img src="{{asset('home')}}/images/home1-banner1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
            </li>
            <li data-transition="fade">
                <img src="{{asset('home')}}/images/home1-banner2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
            </li>
            <li data-transition="fade">
                <img src="{{asset('home')}}/images/home1-banner3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
            </li>
            <div class="tp-static-layers">
                <div class="tp-caption tp-static-layer"
                     id="slide-37-layer-2"
                     data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']"
                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['230','180','150','100']"
                     data-whitespace="nowrap"
                     data-visibility="['on','on','on','on']"
                     data-fontsize="['48','48','28','28']"
                     data-start="500"
                     data-responsive_offset="on"
                     data-basealign="slide"
                     data-startslide="0"
                     data-endslide="5"
                     style="z-index: 5;">
                    <h1><span class="t_white">We Can Find just Right <br>Property for You.</span></h1>
                </div>
                <div class="tp-caption tp-static-layer"
                     id="slide-37-layer-2"
                     data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']"
                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['150','100','120','120']"
                     data-whitespace="nowrap"
                     data-visibility="['on','on','on','on']"
                     data-start="500"
                     data-basealign="slide"
                     data-startslide="0"
                     data-endslide="5"
                     style="z-index: 5;">
                    <p class="t_white">We Deal with Different kinds of Properties No matter you need a House,
                        an Apartment or garage. <br> You’ll find a good option on our Theme.
                    </p>
                </div>
                <div class="tp-caption tp-static-layer"
                     id="slide-37-layer-2"
                     data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']"
                     data-y="['bottom','bottom','bottom','bottom']" data-voffset="['60','60','60','60']"
                     data-whitespace="nowrap"
                     data-visibility="['on','on','on','on']"
                     data-start="500"
                     data-basealign="slide"
                     data-startslide="0"
                     data-endslide="5"
                     style="z-index: 5;"><a href="listing.html" class="btn-white border_radius uppercase">view Properties</a>
                </div>
            </div>
        </ul>
    </div>
</div>
<!--Slider ends-->


<!--Header-->
{{--导航--}}
<div id="mainMenuBarAnchor"></div>
<header class="white_header">
    <nav class="navbar navbar-default bootsnav">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="attr-nav">
                        <div class="upper-column info-box first">
                            <div class="icons"><i class="icon-telephone114"></i></div>
                            <ul>
                                <li><strong>Phone Number</strong></li>
                                <li>+1 900 234 567 - 68</li>
                            </ul>
                        </div>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#"><img src="{{asset('home')}}/images/logo.png" class="logo" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="news.html">News</a></li>
                            <li><a href="listing.html">Listing</a></li>
                            <li><a href="property_detail.html">Property Detail</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#">Buy Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--Header Ends-->




<button type="button" class="form_opener"><i class="fa fa-bars"></i></button>
<div class="tp_overlay">
    <div class="topbar clearfix">
        <ul class="breadcrumb_top">
            <li><a href="#"><i class="icon-icons43"></i>最爱</a></li>
            <li><a href="#"><i class="icon-icons215"></i>提交属性</a></li>
            <li><a href="#"><i class="icon-icons215"></i>我的财产</a></li>
            <li><a href="#"><i class="icon-icons230"></i>轮廓</a></li>
            <li><a href="{{url('user/login')}}"><i class="icon-icons179"></i>登陆 /</a><a href="{{url('user/register')}}">注册</a></li>
            <li class="last-icon"><i class="icon-icons215"></i></li>
        </ul>
    </div>

    <form class="callus top30 clearfix centered">
        <h2 class="text-uppercase t_white bottom20 text-center">高级搜索</h2>
        <div class="row">
            <div class="col-sm-6">
                <div class="single-query bottom15">
                    <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="single-query bottom15">
                    <div class="intro">
                        <select>
                            <option selected="" value="any">Location</option>
                            <option>All areas</option>
                            <option>Bayonne </option>
                            <option>Greenville</option>
                            <option>Manhattan</option>
                            <option>Queens</option>
                            <option>The Heights</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="single-query bottom15">
                    <div class="intro">
                        <select>
                            <option class="active">Property Type</option>
                            <option>All areas</option>
                            <option>Bayonne </option>
                            <option>Greenville</option>
                            <option>Manhattan</option>
                            <option>Queens</option>
                            <option>The Heights</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="single-query bottom15">
                    <div class="intro">
                        <select>
                            <option class="active">Property Status</option>
                            <option>All areas</option>
                            <option>Bayonne </option>
                            <option>Greenville</option>
                            <option>Manhattan</option>
                            <option>Queens</option>
                            <option>The Heights</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="search-2">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-query bottom15">
                        <div class="intro">
                            <select>
                                <option class="active">Min Beds</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-query bottom15">
                        <div class="intro">
                            <select>
                                <option class="active">Min Baths</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-query bottom15">
                    <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-query bottom15">
                    <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-8 bottom15">
                <div class="single-query-slider">
                    <div class="clearfix top20">
                        <label class="pull-left">Price Range:</label>
                        <div class="price text-right">
                            <span>$</span>
                            <div class="leftLabel"></div>
                            <span>to $</span>
                            <div class="rightLabel"></div>
                        </div>
                    </div>
                    <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
                        <div class="bar"></div>
                        <div class="leftGrip"></div>
                        <div class="rightGrip"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 text-right form-group top30">
                <button type="submit" class="border_radius btn-yellow text-uppercase">Search</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="group-button-search">
                    <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
                        <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
                        <div class="text-1">Show more search options</div>
                        <div class="text-2 hide">less more search options</div>
                    </a>
                </div>
                <div class="search-propertie-filters collapse">
                    <div class="container-2">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" name="check-box" />
                                    <span>Features</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" name="check-box" />
                                    <span>Balcony</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" name="check-box" />
                                    <span>Gas Heat</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" name="check-box" />
                                    <span>Washer, Dryer</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" name="check-box" />
                                    <span>TV Cable</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" name="check-box" />
                                    <span>Swimming Pool</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" name="check-box" />
                                    <span>Home Theater</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>




<!-- Gallery -->
<section id="property" class="padding bg_gallery">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase">real estate properties</h2>
                <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
            </div>
        </div>
        <div class="clearfix">
            <div id="filters-property" class="cbp-l-filters-button text-center">
                <div data-filter=".latest" class="cbp-filter-item-active cbp-filter-item">LATEST</div>
                <div data-filter=".sale" class="cbp-filter-item">SALE</div>
                <div data-filter=".rent" class="cbp-filter-item">RENT</div>
            </div>
        </div>
        <div id="property-gallery" class="cbp listing1">
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail.html"><img src="{{asset('home')}}/images/listing1.jpg" alt="latest property" class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                        <span class="tag_l">Featured</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#seventy" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="seventy">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest rent">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail.html"><img src="{{asset('home')}}/images/listing2.jpg" alt="latest property" class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Rent</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#six" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="six">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail.html"><img src="{{asset('home')}}/images/listing3.jpg" alt="latest property" class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                        <span class="tag_l">Featured</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="three">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest rent">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail.html"><img src="{{asset('home')}}/images/listing4.jpg" alt="latest property" class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Rent</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#twe" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="twe">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail.html"><img src="{{asset('home')}}/images/listing8.jpg" alt="latest property" class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="solid">Solid Out</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#twomore" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="twomore">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail.html"><img src="{{asset('home')}}/images/listing6.jpg" alt="latest property" class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                        <span class="tag_l">Featured</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="one">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest rent">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail.html"><img src="{{asset('home')}}/images/listing7.jpg" alt="latest property" class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Rent</span>
                        <span class="tag_l">Featured</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#seven" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="seven">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail.html"><img src="{{asset('home')}}/images/listing5.jpg" alt="latest property" class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                        <span class="tag_l">Featured</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#onemore" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="onemore">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail.html"><img src="{{asset('home')}}/images/listing9.jpg" alt="latest property" class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#sixy" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="sixy">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 text-center top20">
            <a href="listing.html" class="btn-dark border_radius uppercase margin40">more listings</a>
        </div>
    </div>
</section>
<!-- Gallery End -->


<!--Deals-->
<section id="deal" class="padding_bottom_half padding_top">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h2 class="uppercase">Best Deal Properties</h2>
                <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
            </div>
        </div>
        <div class="row">
            <div id="two-col-slider" class="owl-carousel">
                <div class="item">
                    <div class="listing_full">
                        <div class="image">
                            <img alt="image" src="{{asset('home')}}/images/b-d-property.jpg">
                            <span class="tag_t">For Sale</span>
                        </div>
                        <div class="listing_full_bg">
                            <div class="listing_inner_full">
                                <span><a href="#"><i class="icon-like"></i></a></span>
                                <a href="property_detail.html">
                                    <h3>Park Avenue Apartment</h3>
                                    <p>Towson London, MR 21501</p>
                                </a>
                                <div class="favroute clearfix">
                                    <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="listing_full">
                        <div class="image">
                            <img alt="image" src="{{asset('home')}}/images/b-d-property2.jpg">
                            <span class="tag_t">For Sale</span>
                        </div>
                        <div class="listing_full_bg">
                            <div class="listing_inner_full">
                                <span><a href="#"><i class="icon-like"></i></a></span>
                                <a href="property_detail.html">
                                    <h3>Park Avenue Apartment</h3>
                                    <p>Towson London, MR 21501</p>
                                </a>
                                <div class="favroute clearfix">
                                    <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="listing_full">
                        <div class="image">
                            <img alt="image" src="{{asset('home')}}/images/b-d-property3.jpg">
                            <span class="tag_t">For Sale</span>
                        </div>
                        <div class="listing_full_bg">
                            <div class="listing_inner_full">
                                <span><a href="#"><i class="icon-like"></i></a></span>
                                <a href="property_detail.html">
                                    <h3>Park Avenue Apartment</h3>
                                    <p>Towson London, MR 21501</p>
                                </a>
                                <div class="favroute clearfix">
                                    <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="listing_full">
                        <div class="image">
                            <img alt="image" src="{{asset('home')}}/images/b-d-property4.jpg">
                            <span class="tag_t">For Sale</span>
                        </div>
                        <div class="listing_full_bg">
                            <div class="listing_inner_full">
                                <span><a href="#"><i class="icon-like"></i></a></span>
                                <a href="property_detail.html">
                                    <h3>Park Avenue Apartment</h3>
                                    <p>Towson London, MR 21501</p>
                                </a>
                                <div class="favroute clearfix">
                                    <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Deals ends-->


<!--Parallax-->
<section id="parallax_four" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 bottom30">
                <h2 class="uppercase">Over then <strong>7000</strong> Happy Customer</h2>
            </div>
            <div class="col-sm-8 col-md-10">
                <div class="row">
                    <div class="col-sm-6 margin40">
                        <i class="icon-presentation"></i>
                        <h4 class="bottom10">Good Sale & Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend.</p>
                    </div>
                    <div class="col-sm-6 margin40">
                        <i class="icon-icons215"></i>
                        <h4 class="bottom10">Good Sale & Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Owner ends-->


<!--Testinomials-->
<section id="testinomialBg" class="padding bg_light">
    <div id="agent-2" class="padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="uppercase">AGENTS YOU CAN TRUST</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra erat Aenean elit tellus.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 margin40">
                    <div class="agent_wrap">
                        <div class="image">
                            <img src="{{asset('home')}}/images/agent-one.jpg" alt="Agents">
                            <div class="img-info">
                                <h3>Bohdan Kononets</h3>
                                <span>sales executive</span>
                                <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
                                <table class="agent_contact table">
                                    <tbody>
                                    <tr class="bottom10">
                                        <td><strong>Phone:</strong></td>
                                        <td class="text-right">(+01) 34 56 7890</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email Adress:</strong></td>
                                        <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <a class="btn-more" href="agent_#">
                                    <i><img alt="arrow" src="{{asset('home')}}/images/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="{{asset('home')}}/images/arrow-yellow.png"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 margin40">
                    <div class="agent_wrap">
                        <div class="image">
                            <img src="{{asset('home')}}/images/agent-five.jpg" alt="Agents">
                            <div class="img-info">
                                <h3>Bohdan Kononets</h3>
                                <span>sales executive</span>
                                <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
                                <table class="agent_contact table">
                                    <tbody>
                                    <tr class="bottom10">
                                        <td><strong>Phone:</strong></td>
                                        <td class="text-right">(+01) 34 56 7890</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email Adress:</strong></td>
                                        <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <a class="btn-more" href="agent_#">
                                    <i><img alt="arrow" src="{{asset('home')}}/images/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="{{asset('home')}}/images/arrow-yellow.png"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 margin40">
                    <div class="agent_wrap">
                        <div class="image">
                            <img src="{{asset('home')}}/images/agent-six.jpg" alt="Agents">
                            <div class="img-info">
                                <h3>Bohdan Kononets</h3>
                                <span>sales executive</span>
                                <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
                                <table class="agent_contact table">
                                    <tbody>
                                    <tr class="bottom10">
                                        <td><strong>Phone:</strong></td>
                                        <td class="text-right">(+01) 34 56 7890</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email Adress:</strong></td>
                                        <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <a class="btn-more" href="agent_#">
                                    <i><img alt="arrow" src="{{asset('home')}}/images/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="{{asset('home')}}/images/arrow-yellow.png"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg_white padding">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2 class="uppercase">Happy Customers</h2>
                <p class="heading_space">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra erat Aenean elit tellus.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="testinomial-slider" class="owl-carousel display navigate">
                    <div class="item">
                        <div class="testinomial_content text-center">
                            <img src="{{asset('home')}}/images/author2.png" alt="happy client" class="bottom15">
                            <h4 class="uppercase"> SAM NICHOLSON</h4>
                            <span class="smmery bottom15">( NorthMarq Capital  )</span>
                            <img src="{{asset('home')}}/images/stars.png" alt="rating" class="bottom30">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testinomial_content text-center">
                            <img src="{{asset('home')}}/images/author.png" alt="happy client" class="bottom15">
                            <h4 class="uppercase"> SAM NICHOLSON</h4>
                            <span class="smmery bottom15">( NorthMarq Capital  )</span>
                            <img src="{{asset('home')}}/images/stars.png" alt="rating" class="bottom30">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testinomial_content text-center">
                            <img src="{{asset('home')}}/images/author2.png" alt="happy client" class="bottom15">
                            <h4 class="uppercase"> SAM NICHOLSON</h4>
                            <span class="smmery bottom15">( NorthMarq Capital  )</span>
                            <img src="{{asset('home')}}/images/stars.png" alt="rating" class="bottom30">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testinomials ends-->


<!--Partners-->
<section id="logos">
    <div class="container partner2 padding">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase">Our Partners</h2>
                <p class="heading_space">Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus.</p>
            </div>
        </div>
        <div class="row">
            <div id="partners" class="owl-carousel">
                <div class="item">
                    <img src="{{asset('home')}}/images/logo1.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="{{asset('home')}}/images/logo2.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="{{asset('home')}}/images/logo3.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="{{asset('home')}}/images/logo4.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="{{asset('home')}}/images/logo5.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="{{asset('home')}}/images/logo1.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="{{asset('home')}}/images/logo2.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="{{asset('home')}}/images/logo3.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="{{asset('home')}}/images/logo4.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="{{asset('home')}}/images/logo5.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="{{asset('home')}}/images/logo1.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="{{asset('home')}}/images/logo2.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="{{asset('home')}}/images/logo3.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="{{asset('home')}}/images/logo4.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="{{asset('home')}}/images/logo5.png" alt="Featured Partner">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Partners Ends-->



<!--Footer-->
<footer class="footer_third">
    <div class="container contacts">
        <div class="row">
            <div class="col-sm-4 text-center">
                <div class="info-box first">
                    <div class="icons"><i class="icon-telephone114"></i></div>
                    <ul class="text-center">
                        <li><strong>Phone Number</strong></li>
                        <li>+1 900 234 567 - 68</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="info-box">
                    <div class="icons"><i class="icon-icons74"></i></div>
                    <ul class="text-center">
                        <li><strong>Manhattan Hall,</strong></li>
                        <li>Castle Melbourne, australia</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="info-box">
                    <div class="icons"><i class="icon-icons142"></i></div>
                    <ul class="text-center">
                        <li><strong>Email Address</strong></li>
                        <li><a href="#.">info@castle.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container padding_top">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel bottom30">
                    <a href="#." class="logo bottom30"><img src="{{asset('home')}}/images/logo-white.png" alt="logo"></a>
                    <p class="bottom15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        tempor cum consectetuer
                        adipiscing.
                    </p>
                    <p class="bottom15">If you are interested in castle do not wait and <a href="#.">BUY IT NOW!</a></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel bottom30">
                    <h4 class="bottom30 heading">Search by Area</h4>
                    <table style="width:100%;">
                        <tbody>
                        <tr>
                            <td>
                                <ul class="links">
                                    <li><a href="#."><i></i>About</a></li>
                                    <li class="active"><a href="#."><i></i>News</a></li>
                                    <li><a href="#."> <i></i>Contacts</a></li>
                                    <li><a href="#."><i></i>Testimonials</a></li>
                                    <li><a href="#."><i></i>Typography</a></li>
                                </ul>
                            </td>
                            <td class="text-right">
                                <ul class="links text-left">
                                    <li><a href="#."><i></i>Services</a></li>
                                    <li class="active"><a href="#."><i></i>Careers</a></li>
                                    <li><a href="#."><i></i>Our team</a></li>
                                    <li><a href="#."><i></i>Shop</a></li>
                                    <li><a href="#."><i></i>Our approach</a></li>
                                </ul>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel bottom30">
                    <h4 class="bottom30 heading">Latest News</h4>
                    <div class="media bottom30">
                        <div class="media-body">
                            <a href="#.">Nearest mall in high tech Goes google map your villa</a>
                            <span><i class="icon-clock5"></i>Feb 22, 2017</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <a href="#.">Nearest mall in high tech Goes google map your villa</a>
                            <span><i class="icon-clock5"></i>Feb 22, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel bottom30">
                    <h4 class="bottom30 heading">Subscribe</h4>
                    <p>Sign up with your email to get latest updates and offers</p>
                    <form class="top30">
                        <input class="search" placeholder="Enter your Email" type="search">
                        <a class="button_s" href="#">
                            <i class="icon-mail-envelope-open"></i>
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <!--CopyRight-->
        <div class="copyright_simple">
            <div class="row">
                <div class="col-md-6 col-sm-5 top20 bottom20">
                    <p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://www.17sucai.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
                </div>
                <div class="col-md-6 col-sm-7 text-right top15 bottom10">
                    <ul class="social_share">
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
                        <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
                        <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('home')}}/js/jquery-2.1.4.js"></script>
<script src="{{asset('home')}}/js/bootstrap.min.js"></script>
<script src="{{asset('home')}}/js/jquery.appear.js"></script>
<script src="{{asset('home')}}/js/jquery-countTo.js"></script>
<script src="{{asset('home')}}/js/bootsnav.js"></script>
<script src="{{asset('home')}}/js/masonry.pkgd.min.js"></script>
<script src="{{asset('home')}}/js/jquery.parallax-1.1.3.js"></script>
<script src="{{asset('home')}}/js/jquery.cubeportfolio.min.js"></script>
<script src="{{asset('home')}}/js/range-Slider.min.js"></script>
<script src="{{asset('home')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('home')}}/js/selectbox-0.2.min.js"></script>
<script src="{{asset('home')}}/js/zelect.js"></script>
<script src="{{asset('home')}}/js/jquery.fancybox.js"></script>
<script src="{{asset('home')}}/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('home')}}/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{asset('home')}}/js/revolution.extension.actions.min.js"></script>
<script src="{{asset('home')}}/js/revolution.extension.layeranimation.min.js"></script>
<script src="{{asset('home')}}/js/revolution.extension.navigation.min.js"></script>
<script src="{{asset('home')}}/js/revolution.extension.parallax.min.js"></script>
<script src="{{asset('home')}}/js/revolution.extension.slideanims.min.js"></script>
<script src="{{asset('home')}}/js/revolution.extension.video.min.js"></script>
<script src="{{asset('home')}}/js/custom.js"></script>
<script src="{{asset('home')}}/js/functions.js"></script>

</body>
</html>


