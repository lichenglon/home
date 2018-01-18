
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
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/app.css">

    <style>
        .content-width {MARGIN: auto;WIDTH: 358px;}
        .content-width {HEIGHT: auto;HEIGHT: 249.81px;}

        .content-width img{MAX-WIDTH: 100%!important;!important;width:expression(this.width > 358 ? "358px" : this.width)!important;}
        .content-width img{MAX-HEIGHT: 100%!important;!important;height:expression(this.height > 249.81 ? "10px" : this.height)!important;}

        .content-width {MAX-WIDTH: 100%!important;!important;width:expression(this.width > 358 ? "358px" : this.width)!important;}
        .content-width {MAX-HEIGHT: 100%!important;!important;height:expression(this.height > 249.81 ? "10px" : this.height)!important;}
        .form-group{
            margin-top:7%;
        }

    </style>
</head>
<body>


<div class="loader">
    <div class="span">
        <div class="location_indicator"></div>
    </div>
</div>

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
                    <h1><span class="t_white">@lang('index.index_Wanted')</span></h1>
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
                    <p class="t_white">@lang('index.index_we')</p>
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
                     style="z-index: 5;"><a href="listing.html" class="btn-white border_radius uppercase">@lang('index.index_view')</a>
                </div>
            </div>
        </ul>
    </div>
</div>

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
                                <li><strong>@lang('index.index_phone')</strong></li>
                                <li>0755-26929029</li>
                            </ul>
                        </div>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#"><img src="{{asset('home')}}/images/logo.jpg" class="logo" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                        @include('user.include.navigation_include')
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
            <li><a href="#"><i class="icon-icons43"></i>@lang('index.index_dearest')</a></li>
            <li>

                @if(Session::get('userId'))
                    <a href="{{url('user/data',['id'=>Session::get('userId')])}}"><i class="icon-icons215"></i>@lang('index.index_setting')</a>
                @else
                    <a href="{{url('user/login')}}"><i class="icon-icons179"></i>@lang('index.index_login')</a>
            </li>
            <li>
                @endif
                @if(Session::get('userId'))
                    <a href="{{url('user/drop',['id'=>Session::get('userId')])}}" onclick="if(!confirm('确定要退出吗？'))return false">@lang('index.index_drop')</a>
                @endif

                <a href="{{url('user/register')}}">@lang('index.index_register')</a>
            </li>
            <li>

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span>@lang('index.index_Language')</span>
                </a>
                <ul class="dropdown-menu" style="margin-left:270px; margin-top:-1px;">
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="javascript:setLocale('zh_cn');" class="btn btn-default btn-flat">中文</a>
                        </div>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <div class="pull-right">
                            <a href="javascript:setLocale('en');" class="btn btn-default btn-flat">English</a>
                        </div>
                    </li>
                </ul>


            </li>
            <li class="last-icon"><i class="icon-icons215"></i></li>
        </ul>

    </div>

    {{--高级搜索--}}
    <form class="callus" action="{{url('house/listing')}}" method="get" id="SUBMIT">
        {{csrf_field()}}
        <h2 class="text-uppercase t_white bottom20 text-center">@lang('include.include_advanced')</h2>
        <div class="single-query form-group col-sm-12">
            <input type="text" class="keyword-input" name="house_keyword" placeholder="@lang('include.include_key')">
        </div>
        <div class="single-query form-group col-sm-12">
            <div class="intro">
                <select name="state">
                    <option selected="" value="%">@lang('include.include_nation')</option>
                    @foreach($nationObject as $nationVal)
                        <option selected="" value="{{$nationVal->chinese_n_name}}">{{$nationVal->chinese_n_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="single-query form-group col-sm-12">
            <input type="text" class="keyword-input" value="" name="house_location" placeholder="@lang('include.include_address')">
        </div>
        <div class="single-query form-group col-sm-12">
            <div class="intro">
                <select name="house_type">
                    <option class="active" value="%">@lang('include.include_house')</option>
                    @foreach($houseTypeObject as $houseTypeVal)
                        <option value="{{$houseTypeVal->name}}">{{$houseTypeVal->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="col-sm-12 bottom10">
            <div class="single-query-slider">
                <label><strong>@lang('include.include_price')</strong></label>
                <div class="price text-right">
                    <span>@lang('include.include_$')</span>
                    <div class="leftLabel" id="minPriceNum"></div>
                    <input type="hidden" value="" name="hiddenPriceMin" id="hiddenPriceMin">
                    <span>@lang('include.include_to')</span>
                    <div class="rightLabel" id="maxPriceNum"></div>
                    <input type="hidden" value="" name="hiddenPriceMax" id="hiddenPriceMax">
                </div>
                <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
                    <div class="bar"></div>
                    <div class="leftGrip"></div>
                    <div class="rightGrip"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="group-button-search">
                    <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
                        <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
                        <div class="text-1">@lang('include.include_options')</div>
                        <div class="text-2 hide">@lang('include.include_less')</div>
                    </a>
                </div>
                <div class="search-propertie-filters collapse">
                    <div class="container-2">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10" style="width:200px;">
                                    <input type="checkbox" value="洗衣机" name="check_box[]" />
                                    <span style="width:200px;">@lang('include.include_washing')</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" value="空调" name="check_box[]" />
                                    <span>@lang('include.include_air')</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" value="暖气" name="check_box[]" />
                                    <span>@lang('include.include_heating')</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" value="床" name="check_box[]" />
                                    <span>@lang('include.include_bed')</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" value="厨房" name="check_box[]" />
                                    <span>@lang('include.include_cookhouse')</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" value="衣柜" name="check_box[]" />
                                    <span>@lang('include.include_wardrobe')</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" value="冰箱" name="check_box[]" />
                                    <span>@lang('include.include_refrigerator')</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 form-group">
            <button type="button" onclick="javascript:priceNumber();" class="btn-blue border_radius">@lang('include.include_seek')</button>
        </div>
    </form>

</div>
{{--获取价格提交后台搜索--}}
<script>
    function priceNumber(){
        var minPriceNum = document.getElementById('minPriceNum').innerHTML;
        var maxPriceNum = document.getElementById('maxPriceNum').innerHTML;
        var hiddenPriceMin = document.getElementById('hiddenPriceMin').value = minPriceNum;
        var hiddenPriceMax = document.getElementById('hiddenPriceMax').value = maxPriceNum;
        document.getElementById('SUBMIT').submit();
    }
</script>



<!-- Gallery -->
<section id="property" class="padding bg_gallery">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase">@lang('index.index_real')</h2>
                <p class="heading_space">@lang('index.index_have')</p>
            </div>
        </div>

        <div id="property-gallery" class="cbp listing1">
            @foreach($houseObjData as $houseVal)
                <div class="cbp-item latest sale">
                    <div class="property_item">
                        <div class="image">
                            <div class="content-width">
                                <a href="{{url('house/detail',['msgid'=>$houseVal->msgid])}}"><img src="{{HOUSE_SERVER_PATH}}uploads/{{$houseVal->getImageOne($houseVal->msgid)}}" alt="latest property" class="img-responsive"></a>
                            </div>
                            <div class="price clearfix">
                                <span class="tag pull-right">@lang('index.index_monthly'){{$houseVal->house_price}}</span>
                            </div>
                            <span class="tag_t">{{$houseVal->house_status}}</span>
                            <span class="tag_l">{{$houseVal->house_structure}}</span>
                        </div>
                        <div class="proerty_content">
                            <div class="proerty_text">
                                <h4 class="captlize"><a href="{{url('house/detail',['msgid'=>$houseVal->msgid])}}"><?php echo mb_substr($houseVal->house_name,0,26,'utf-8');?></a></h4>
                                <p><?php echo mb_substr($houseVal->house_location,0,33,'utf-8');?>.....</p>
                            </div>
                            <div class="property_meta transparent">

                                <?php
                                if(empty($houseVal->house_facility)){
                                    $equipment = array();
                                    $washing = in_array('洗衣机',$equipment);//洗衣机
                                    $air = in_array('空调',$equipment);//空调
                                    $heating = in_array('暖气',$equipment);//暖气
                                    $bed = in_array('床',$equipment);//床
                                    $kitchen = in_array('厨房',$equipment);//厨房
                                    $closet = in_array('衣柜',$equipment);//衣柜
                                    $refrigerator = in_array('冰箱',$equipment);//冰箱
                                }else{
                                    $equipment = explode(',',$houseVal->house_facility);
                                    $washing = in_array('洗衣机',$equipment);//洗衣机
                                    $air = in_array('空调',$equipment);//空调
                                    $heating = in_array('暖气',$equipment);//暖气
                                    $bed = in_array('床',$equipment);//床
                                    $kitchen = in_array('厨房',$equipment);//厨房
                                    $closet = in_array('衣柜',$equipment);//衣柜
                                    $refrigerator = in_array('冰箱',$equipment);//冰箱
                                }
                                ?>
                                @if($washing) <span>洗衣机</span> @endif
                                @if($air) <span>空调</span> @endif
                                @if($heating) <span>暖气</span> @endif
                                @if($bed) <span>床</span> @endif
                                @if($kitchen) <span>厨房</span> @endif
                                @if($closet) <span>衣柜</span> @endif
                                @if($refrigerator) <span>冰箱</span> @endif

                            </div>
                            <div class="property_meta transparent bottom30">
                                <span><i class="icon-old-television"></i>@lang('index.index_tv')</span>
                                <span><i class="icon-garage"></i>1 @lang('index.index_garage')</span>
                                <span></span>
                            </div>
                            <div class="favroute clearfix">
                                <p class="pull-md-left">@lang('index.index_in') &nbsp; <i class="icon-calendar2"></i>&nbsp; {{$houseVal->house_rise}}</p>
                                <ul class="pull-right">
                                    <li><a href="@if(Session::get('userId'))javascript:houseLikeAdd({{$houseVal->msgid}},{{Session::get('userId')}});@else javascript:if(window.confirm('亲！请先登录')){location.href='{{url('user/login')}}'} @endif" title="收藏到我喜欢"><i class="icon-like"></i></a></li>
                                    <li><a href="{{url('order/orderAdd',['house_no'=>$houseVal->serial_number])}}" title="去下单"><i class="icon-document-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-sm-12 text-center top20">
            <a href="{{url('house/listing')}}" class="btn-dark border_radius uppercase margin40">@lang('index.index_more')</a>
        </div>
    </div>
</section>
<!-- Gallery End -->


<!--Deals-->
<section id="deal" class="padding_bottom_half padding_top">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h2 class="uppercase">@lang('index.index_best')</h2>
                <p class="heading_space">@lang('index.index_list')</p>
            </div>
        </div>
        <div class="row">
            <div id="two-col-slider" class="owl-carousel">
                @foreach($houseObjData as $recommend)
                    <div class="item">
                        <div class="listing_full">
                            <div class="image">
                                <img width="555" height="387.27" alt="image" src="{{HOUSE_SERVER_PATH}}uploads/{{$recommend->getImageOne($recommend->msgid)}}">
                                <span class="tag_t">{{$recommend->house_status}}</span>
                            </div>
                            <div class="listing_full_bg">
                                <div class="listing_inner_full">
                                    <span><a href="#"><i class="icon-like"></i></a></span>
                                    <a href="property_detail.html">
                                        <h4><?php echo mb_substr($recommend->house_name,0,17,'utf-8');?>.....</h4>
                                        <p>{{$recommend->house_location}}</p>
                                    </a>
                                    <div class="favroute clearfix">
                                        <div class="property_meta">
                                            <span><i class="icon-select-an-objecto-tool"></i>{{$recommend->house_size}} @lang('index.index_feet')</span>
                                            <span><i class="icon-bed"></i>{{$recommend->house_structure}}</span>
                                            <span><i class="icon-briefcase2"></i>{{$recommend->payment_proportion}}</span>
                                            <span class="border-l">@lang('index.index_monthly'){{$recommend->house_price}}</span></div>
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
                <h2 class="uppercase">@lang('index.index_cooperation')</h2>
            </div>
            <div class="col-sm-8 col-md-10">
                <div class="row">
                    <div class="col-sm-6 margin40">
                        <i class="icon-presentation"></i>
                        <h4 class="bottom10">@lang('index.index_guarantee')</h4>
                        <p>@lang('index.index_many')</p>
                    </div>
                    <div class="col-sm-6 margin40">
                        <i class="icon-icons215"></i>
                        <h4 class="bottom10">@lang('index.index_Choose')</h4>
                        <p>@lang('index.index_selected')</p>
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
</section>
<!--Testinomials ends-->


<!--Partners-->
<section id="logos">
    <div class="container partner2 padding">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase">@lang('index.index_our')</h2>
                <p class="heading_space">@lang('index.index_nec')</p>
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
                        <li><strong>@lang('index.index_phone')</strong></li>
                        <li>0755-26929029</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="info-box">
                    <div class="icons"><i class="icon-icons74"></i></div>
                    <ul class="text-center">
                        <li><strong>@lang('index.index_hall')</strong></li>
                        <li>@lang('index.index_Castle')</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="info-box">
                    <div class="icons"><i class="icon-icons142"></i></div>
                    <ul class="text-center">
                        <li><strong>@lang('index.index_email')</strong></li>
                        <li><a href="#.">yuheng.zhang@foxmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('user.include.bottom_include')
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
    <script>
    function houseLikeAdd(houseMsgId,userId) {
        $.ajax({
                url:"{{url('house/houseLikeAdd')}}",
                data:'house_id='+houseMsgId+'&userId='+userId,
                type:'get',
                success:function (re) {
            if(re == '1'){
                alert('亲！您已收藏过此房源');
                } else if (re == '0'){
                alert('抱歉！收藏失败');
                } else {
                alert('收藏成功');
                }
            }
        })
    }
    </script>

@include('user.include.ajax_include')
</body>
</html>


