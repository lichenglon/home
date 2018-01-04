<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Listing</title>
  @include('public.publicHouseCss')
  <style>
    .content-width {MARGIN: auto;WIDTH: 358px;}
    .content-width {HEIGHT: auto;HEIGHT: 249.81px;}
    .content-width {MAX-WIDTH: 100%!important;!important;width:expression(this.width > 358 ? "358px" : this.width)!important;}
    .content-width {MAX-HEIGHT: 100%!important;!important;height:expression(this.height > 249.81 ? "10px" : this.height)!important;}
  </style>
</head>
<body>


<!--Loader-->
{{--程序载人动画效果--}}
@include('public.publicLoaderCartoon')
 <!--Loader--> 
 
 

<!--Header-->
{{--头部--}}
@include('house.listingPublic.header')
<!--Header Ends-->



<!-- Page Banner Start-->
<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Listing Style 1</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li><a href="#">Pages</a></li>
          <li><a href="#">Listing</a></li>
          <li class="active">Listing - 1</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->



<!-- Listing Start -->
<section id="listing1" class="listing1 padding_top">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-md-9">
            <h2 class="uppercase">PROPERTY LISTINGS</h2>
            <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
          </div>
          <div class="col-md-3">
          <form class="callus">
            <div class="single-query">
              <div class="intro">
                <select>
                  <option class="active">Default Order</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                </select>
              </div>
            </div>
            </form>
          </div>
        </div>

        <div class="row">
          @foreach($objData as $houseVal)
          <div class="col-sm-6">
            <div class="property_item heading_space">
              <div class="image" >

                <a href="{{url('house/detail',['msgid'=>$houseVal->msgid])}}"><img class="content-width" src="{{HOUSE_SERVER_PATH}}uploads/{{$houseVal->getImageOne($houseVal->msgid)}}" alt="latest property" class="img-responsive"></a>

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
                  <br>
                  <span><i class="icon-select-an-objecto-tool"></i>{{$houseVal->house_size}} 平方英尺</span>
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
                    <li><a href="#" title="去下单"><i class="icon-document-play"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>

        <div class="padding_bottom text-center">
          <ul class="pager">
            @if (!empty($objData))
              <div class="page_list">
                {{ $objData->links() }}
              </div>
            @endif
          </ul>
        </div>
      </div>
      <aside class="col-md-4 col-xs-12">
        <div class="property-query-area clearfix">
          <div class="col-md-12">
            <h3 class="text-uppercase bottom20 top15">Advanced Search</h3>
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
          <div class="col-sm-12">
            <div class="group-button-search">
              <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter bottom15">
                <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
                <div class="text-1">Show more search options</div>
                <div class="text-2 hide">less more search options</div>
              </a>
            </div>
          </div>
          <div class="search-propertie-filters collapse">
            <div class="container-2">
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="search-form-group white">
                    <input type="checkbox" name="check-box" />
                    <span>Rap music</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="bottom40 margin40">Featured Properties</h3>
          </div>
        </div>
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="{{asset('home')}}/images/f-p-1.png" alt="image">
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>Historic Town House</h4>
              <p class="bottom15">45 Regent Street, London, UK</p>
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="{{asset('home')}}/images/f-p-1.png" alt="image">
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>Historic Town House</h4>
              <p class="bottom15">45 Regent Street, London, UK</p>
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="{{asset('home')}}/images/f-p-1.png" alt="image">
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4>Historic Town House</h4>
              <p class="bottom15">45 Regent Street, London, UK</p>
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="margin40 bottom20">Featured Properties</h3>
          </div>
          <div class="col-md-12">
            <div id="agent-2-slider" class="owl-carousel">
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#"><img src="{{asset('home')}}/images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                    <div class="price clearfix"><span class="tag pull-right">$8,600 Per Month - <small>Family Home</small></span></div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#"><img src="{{asset('home')}}/images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
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
<!-- Listing end -->


<!--Footer-->
<footer class="padding_top footer2">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <a href="#." class="logo bottom30"><img src="{{asset('home')}}/images/logo-white.png" alt="logo"></a>
          <p class="bottom15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
            tempor cum consectetuer 
            adipiscing.
          </p>
          <p class="bottom15">If you are interested in castle do not wait and <a href="#.">BUY IT NOW!</a></p>
          <ul class="social_share">
            <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
            <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
            <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
            <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#." class="vimo"><i class="icon-vimeo3"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Search by Area</h4>
          <ul class="area_search">
            <li><a href="#."><i class="icon-icons74"></i>Bayonne, New Jersey</a></li>
            <li class="active"><a href="#."><i class="icon-icons74"></i>Greenville, New Jersey</a></li>
            <li><a href="#."> <i class="icon-icons74"></i>The Heights, New Jersey</a></li>
            <li><a href="#."><i class="icon-icons74"></i>West Side, New York</a></li>
            <li><a href="#."><i class="icon-icons74"></i>Upper East Side, New York</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Latest News</h4>
          <div class="media">
            <a class="media-object"><img src="{{asset('home')}}/images/footer-news1.png" alt="news"></a>
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes your villa</a>
              <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="media">
            <a class="media-object"><img src="{{asset('home')}}/images/footer-news1.png" alt="news"></a>
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes your villa</a>
              <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
          <div class="media">
            <a class="media-object"><img src="{{asset('home')}}/images/footer-news1.png" alt="news"></a>
            <div class="media-body">
              <a href="#.">Nearest mall in high tech Goes your villa</a>
              <span><i class="icon-clock4"></i>Feb 22, 2017</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Get in Touch</h4>
          <ul class="getin_touch">
            <li><i class="icon-telephone114"></i>01 900 234 567 - 68</li>
            <li><a href="#."><i class="icon-icons142"></i>info@castle.com</a></li>
            <li><a href="#."><i class="icon-browser2"></i>www.castle.com</a></li>
            <li><i class="icon-icons74"></i>Castle Melbourne, Merrick Way,FL 12345 australia</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--CopyRight-->
<div class="copyright index2">
  <div class="copyright_inner">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://www.17sucai.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
        </div>
        <div class="col-md-5 text-right">
          <p>Designed by <a href="#.">Brighthemes</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
{{--引入公共js文件--}}
@include('public.publicHouseJs')

</body>
</html>


