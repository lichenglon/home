<header class="layout_default">
    <div class="topbar grey">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p>@lang('include.include_are')</p>
                </div>
                <div class="col-md-7 text-right">
                    @include('user.include.lang_include')


                    @include('.user.include.lang_include')

                    <ul class="breadcrumb_top text-right">
                        <li><a href="@if(Session::get('userId')) {{url('house/like')}} @else javascript:if(window.confirm('亲！请先登录')){location.href='{{url('user/login')}}'} @endif"><i class="icon-icons43"></i>最爱</a></li>
                        {{--<li><a href="#"><i class="icon-icons215"></i>提交属性</a></li>--}}
                        <li><a href="{{url('error_page')}}"><i class="icon-icons215"></i>我的财产</a></li>
                        <li>
                            @if(!Session::get('userId'))
                                <a href="{{url('user/login')}}"><i class="icon-icons179"></i>登陆 /</a>
                            @else
                                <a href="{{url('drop/drop',['id'=>Session::get('userId')])}}" onclick="if(!confirm('确定要退出吗？'))return false">退出 /</a>
                            @endif
                            <a href="{{url('user/register')}}">注册</a>

                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="header-upper">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="logo"><a href="javascript:void (0);"><img alt="" src="{{asset('home')}}/images/logo.jpg"></a></div>
                </div>
                <!--Info Box-->
                <div class="col-md-9 col-sm-12 right">
                    <div class="info-box first">
                        <div class="icons"><i class="icon-telephone114"></i></div>
                        <ul>
                            <li><strong>@lang('include.include_phone')</strong></li>
                            <li>0755-26929029</li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <div class="icons"><i class="icon-icons74"></i></div>
                        <ul>
                            <li><strong>@lang('include.include_shenzhen')</strong></li>
                            <li>@lang('include.include_taibang')</li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <div class="icons"><i class="icon-icons142"></i></div>
                        <ul>
                            <li><strong>@lang('include.include_mail')</strong></li>
                            <li><a href="#">yuheng.zhang@foxmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="attr-nav">
                        <ul class="social_share clearfix">
                            <li><a href="javascript:void(0)" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0)" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="google" href="javascript:void(0)"><i class="icon-google4"></i></a></li>
                        </ul>
                    </div>
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand sticky_logo" href="#"><img src="{{asset('home')}}/images/logo-white.png" class="logo" alt=""></a>
                    </div> <!-- End Header Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
                            @include('user.include.navigation_include')
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>