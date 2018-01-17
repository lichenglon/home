<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Contact</title>
<link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/reality-icon.css">
<link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/cubeportfolio.min.css">
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
 <!--Loader--> 
 
 

<!--Header-->
{{--公共头部--}}
@include('house.listingPublic.header')
<!--Header Ends-->


<!--Contact-->
<section id="contact-us">
  <div class="contact">
    <div id="map"></div>
    <div class="container">
      <div class="row">
        
           <div class="col-md-4 hidden-xs">
           </div> 
           
           <div class="col-md-4 hidden-xs">
           </div> 
           
           <div class="col-md-4 col-sm-4 col-xs-12  contact-text">
           
            	<div class="agent-p-contact">
                	<div class="our-agent-box bottom30">
                        <h2>get in touch</h2>
                    </div>
                    <div class="agetn-contact-2 bottom30">
                      	 <p><i class="icon-telephone114"></i>0755-26929029</p>
                         <p><i class=" icon-icons142"></i>yuheng.zhang@foxmail.com</p>
                         
                         <p><i class="icon-browser2"></i>www.ulzz.com</p>
                         <p><i class="icon-icons74"></i>@lang('include.contact_2308')</p>
                      </div>
                    <ul class="social_share bottom20">
            <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i></a></li>
            <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i></a></li>
            <li><a href="javascript:void(0)" class="google"><i class="icon-google4"></i></a></li>
            <li><a href="javascript:void(0)" class="linkden"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i></a></li>
          </ul>
                </div>
            
            	<div class="agent-p-form">
                	<div class="our-agent-box bottom30">
                        <h2>@lang('include.contact_send')</h2>
                    </div>
                    
                    <div class="row">
                      <form action="#" class="callus">
                        <div class="col-md-12">
                          <div class="single-query form-group">
                            <input type="text" placeholder="@lang('include.contact_name')" class="keyword-input">
                            </div>
                            <div class="single-query form-group">
                            <input type="text" placeholder="@lang('include.contact_number')" class="keyword-input">
                          </div>
                          <div class="single-query form-group">
                            <input type="text" placeholder="@lang('include.contact_Email')" class="keyword-input">
                          </div>
                          <div class="single-query form-group">
                            <textarea placeholder="@lang('include.contact_massege')" class="form-control"></textarea>
                          </div>
                          <input type="submit" value="@lang('include.contact_now')" class="btn-blue">
                          </div>
                      </form>
                      
                    </div>
                	
                </div>
                
            </div>
            
        </div>
    </div>
  </div>
</section>
<!-- Contact End -->

@include('house.listingPublic.footer')


<script src="{{asset('home')}}/js/jquery-2.1.4.js"></script>
<script src="{{asset('home')}}/js/bootstrap.min.js"></script>
<script src="{{asset('home')}}/js/bootsnav.js"></script>
<script src="{{asset('home')}}/js/jquery.parallax-1.1.3.js"></script>
<script src="{{asset('home')}}/js/jquery.appear.js"></script>
<script src="{{asset('home')}}/js/jquery-countTo.js"></script>
<script src="{{asset('home')}}/js/masonry.pkgd.min.js"></script>
<script src="{{asset('home')}}/js/range-Slider.min.js"></script>
<script src="{{asset('home')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('home')}}/js/jquery.cubeportfolio.min.js"></script>
<script src="{{asset('home')}}/js/selectbox-0.2.min.js"></script>
<script src="{{asset('home')}}/js/zelect.js"></script>
<!--Revolution Slider-->
<script src="{{asset('home')}}/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('home')}}/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{asset('home')}}/js/revolution.extension.layeranimation.min.js"></script>
<script src="{{asset('home')}}/js/revolution.extension.navigation.min.js"></script>
<script src="{{asset('home')}}/js/revolution.extension.parallax.min.js"></script>
<script src="{{asset('home')}}/js/revolution.extension.slideanims.min.js"></script>
<script src="{{asset('home')}}/js/revolution.extension.video.min.js"></script>

<script src="{{asset('home')}}/js/neary-by-place.js"></script>
<!---<script src="http://ditu.google.cn/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U&libraries=places"></script>
<script src="js/google-map.js"></script>--->
<script src="{{asset('home')}}/js/contact.js"></script>
<script src="{{asset('home')}}/js/google-map.js"></script>
<script src="{{asset('home')}}/js/custom.js"></script>
<script src="{{asset('home')}}/js/functions.js"></script>

@include('user.include.ajax_include')

</body>
</html>

