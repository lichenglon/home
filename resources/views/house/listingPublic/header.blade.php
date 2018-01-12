<header class="layout_default">
    <div class="topbar grey">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p>我们拥有40年的经验，是最好的城市。</p>
                </div>
                <div class="col-md-7 text-right">
                    @include('.user.include.lang_include')
                </div>
            </div>
        </div>
    </div>
    <div class="header-upper">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="logo"><a href="#"><img alt="" src="{{asset('home')}}/images/logo.png"></a></div>
                </div>
                <!--Info Box-->
                <div class="col-md-9 col-sm-12 right">
                    <div class="info-box first">
                        <div class="icons"><i class="icon-telephone114"></i></div>
                        <ul>
                            <li><strong>Phone Number</strong></li>
                            <li>+1 900 234 567 - 68</li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <div class="icons"><i class="icon-icons74"></i></div>
                        <ul>
                            <li><strong>Manhattan Hall,</strong></li>
                            <li>Castle Melbourne, australia</li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <div class="icons"><i class="icon-icons142"></i></div>
                        <ul>
                            <li><strong>Email Address</strong></li>
                            <li><a href="javascript:void(0)">info@castle.com</a></li>
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