<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

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
    <style>
        .content-width {MARGIN: auto;WIDTH: 358px;}
        .content-width {HEIGHT: auto;HEIGHT: 249.81px;}
        .content-width img{MAX-WIDTH: 100%!important;!important;width:expression(this.width > 358 ? "358px" : this.width)!important;}
        .content-width img{MAX-HEIGHT: 100%!important;!important;height:expression(this.height > 249.81 ? "10px" : this.height)!important;}
    </style>
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

{{--var_dump(\Illuminate\Support\Facades\Session::get('userId'));
--}}
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
<div class="tp_overlay" style="width:30%;">
    <div class="topbar clearfix">
        <ul class="breadcrumb_top">
            <li><a href="#"><i class="icon-icons43"></i>最爱</a></li>
            <li>

                @if(Session::get('userId'))
                    <a href="{{url('home/data',['id'=>Session::get('userId')])}}"><i class="icon-icons215"></i>个人设置</a>
                @else
                    <a href="{{url('user/login')}}"><i class="icon-icons179"></i>登陆</a>
            </li>
            <li>
                @endif
                    <a href="{{url('home/drop')}}" value="{{Session::get('userId')}}">退出</a>

                <a href="{{url('user/register')}}">注册</a>
            </li>
            <li class="last-icon"><i class="icon-icons215"></i></li>
        </ul>
    </div>
    <form class="callus">
        <div class="single-query form-group col-sm-12">
            <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
        </div>
        <div class="single-query form-group col-sm-12">
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
        <div class="single-query form-group col-sm-12">
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
        <div class="single-query form-group col-sm-12">
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
        <div class="search-2 col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-query form-group">
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
                <div class="col-sm-6">
                    <div class="single-query form-group">
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
        </div>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-query form-group">
                        <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="single-query form-group">
                        <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 bottom10">
            <div class="single-query-slider">
                <label><strong>Price Range:</strong></label>
                <div class="price text-right">
                    <span>$</span>
                    <div class="leftLabel"></div>
                    <span>to $</span>
                    <div class="rightLabel"></div>
                </div>
                <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
                    <div class="bar"></div>
                    <div class="leftGrip"></div>
                    <div class="rightGrip"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 form-group">
            <button type="submit" class="btn-blue border_radius">Search</button>
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

        <div id="property-gallery" class="cbp listing1">
            @foreach($houseObjData as $houseVal)
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <div class="content-width" >
                        <a href="{{url('house/detail',['msgid'=>$houseVal->msgid])}}"><img src="{{HOUSE_SERVER_PATH}}uploads/{{$houseVal->getImageOne($houseVal->msgid)}}" alt="latest property" class="img-responsive"></a>
                        </div>
                            <div class="price clearfix">
                            <span class="tag pull-right">每月 ${{$houseVal->house_price}}</span>
                        </div>
                        <span class="tag_t">{{$houseVal->house_status}}</span>
                        <span class="tag_l">{{$houseVal->house_structure}}</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="{{url('house/detail',['msgid'=>$houseVal->msgid])}}">{{$houseVal->house_name}}</a></h3>
                            <p>{{$houseVal->house_location}}</p>
                        </div>
                        <div class="property_meta transparent">

                            <?php
                            if(empty($houseVal->house_facility)){
                                $equipment = array();
                            }else{
                                $equipment = explode(',',$houseVal->house_facility);
                            }
                            ?>
                            @if(isset($equipment[0])) <span>洗衣机</span> @endif
                            @if(isset($equipment[1])) <span>空调</span> @endif
                            @if(isset($equipment[2])) <span>暖气</span> @endif
                            @if(isset($equipment[3])) <span>床</span> @endif
                            @if(isset($equipment[4])) <span>厨房</span> @endif
                            @if(isset($equipment[5])) <span>衣柜</span> @endif
                            @if(isset($equipment[6])) <span>冰箱</span> @endif

                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p class="pull-md-left">发布于 &nbsp; <i class="icon-calendar2"></i>&nbsp; {{$houseVal->house_rise}}</p>
                            <ul class="pull-right">
                                <li><a href="#" title="收藏到我喜欢"><i class="icon-like"></i></a></li>
                                <li><a href="{{url('order/renterInfo',['house_no'=>$houseVal->serial_number])}}" title="去下单"><i class="icon-document-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-sm-12 text-center top20">
            <a href="{{url('house/listing')}}" class="btn-dark border_radius uppercase margin40">more listings</a>
        </div>
    </div>
</section>
<!-- Gallery End -->


<!--Deals-->
<section id="deal" class="padding_bottom_half padding_top">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h2 class="uppercase">最好的交易属性</h2>
                <p class="heading_space">我们在这些区域有属性查看特色属性列表</p>
            </div>
        </div>
        <div class="row">
            <div id="two-col-slider" class="owl-carousel">
                @foreach($houseObjData as $recommend)
                <div class="item">
                    <div class="listing_full">
                        <div class="image">
                            <img alt="image" src="{{HOUSE_SERVER_PATH}}uploads/{{$recommend->getImageOne($recommend->msgid)}}">
                            <span class="tag_t">{{$recommend->house_status}}</span>
                        </div>
                        <div class="listing_full_bg">
                            <div class="listing_inner_full">
                                <span><a href="#"><i class="icon-like"></i></a></span>
                                <a href="property_detail.html">
                                    <h3>{{$recommend->house_name}}</h3>
                                    <p>{{$recommend->house_location}}</p>
                                </a>
                                <div class="favroute clearfix">
                                    <div class="property_meta">
                                        <span><i class="icon-select-an-objecto-tool"></i>{{$recommend->house_size}} 平方 英尺</span>
                                        <span><i class="icon-bed"></i>{{$recommend->house_structure}}</span>
                                        <span><i class="icon-briefcase2"></i>{{$recommend->payment_proportion}}</span>
                                        <span class="border-l">每月 ${{$recommend->house_price}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

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


