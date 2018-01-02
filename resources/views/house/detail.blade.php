<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Property Detail</title>
  @include('public.publicHouseCss')
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
        <h1 class="text-uppercase">Property Details - 1</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="#.">Home</a></li>
          <li><a href="#.">Properties</a></li>
          <li class="active">Property Details - 1</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->



<!-- Property Detail Start -->
<section id="property" class="padding_top padding_bottom_half">
  <div class="container">
    <div class="row">
      <div class="col-md-8 listing1 property-details">
        <h2 class="text-uppercase">{{$houseMsg->house_name}}</h2>
        <p class="bottom30">{{$houseMsg->house_location}}</p>
        <div id="property-d-1" class="owl-carousel">
          @foreach($imagesObj as $value)
          <div class="item"><img src="http://www.admin.com/uploads/{{$value->house_imagename}}" alt="image"></div>
          @endforeach
        </div>
        <div id="property-d-1-2" class="owl-carousel">
          @foreach($imagesObj as $value)
          <div class="item" ><img src="http://www.admin.com/uploads/{{$value->house_imagename}}" alt="image"></div>
          @endforeach
        </div>
        <div class="property_meta bg-black bottom40">
          <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
          <span><i class=" icon-microphone"></i>2 Office Rooms</span>
          <span><i class="icon-safety-shower"></i>1 Bathroom</span>
          <span><i class="icon-old-television"></i>TV Lounge</span>
          <span><i class="icon-garage"></i>1 Garage</span>
        </div>
        <h2 class="text-uppercase">房源简介</h2>
        <p class="bottom30"></p>
        <p class="bottom30"></p>
        <div class="text-it-p bottom40">
          <p>{{$houseMsg->house_brief}}</p>
        </div>
        <h2 class="text-uppercase bottom20">快速总结</h2>
        <div class="row property-d-table bottom40">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <table class="table table-striped table-responsive">
              <tbody>
                <tr>
                  <td><b>属性 ID</b></td>
                  <td class="text-right">{{$houseMsg->serial_number}}</td>
                </tr>
                <tr>
                  <td><b>价钱</b></td>
                  <td class="text-right">${{$houseMsg->house_price}} / 月</td>
                </tr>
                <tr>
                  <td><b>物业大小</b></td>
                  <td class="text-right">{{$houseMsg->house_size}} 平方英尺</td>
                </tr>
                <tr>
                  <td><b>卧室</b></td>
                  <td class="text-right">5</td>
                </tr>
                <tr>
                  <td><b>浴室</b></td>
                  <td class="text-right">3</td>
                </tr>
                <tr>
                  <td><b>可租时长</b></td>
                  <td class="text-right">{{$houseMsg->house_duration}}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <table class="table table-striped table-responsive">
              <tbody>
                <tr>
                  <td><b>房屋状态</b></td>
                  <td class="text-right">{{$houseMsg->house_status}}</td>
                </tr>
                <tr>
                  <td><b>建造年份</b></td>
                  <td class="text-right">1991</td>
                </tr>
                <tr>
                  <td><b>车库</b></td>
                  <td class="text-right">1</td>
                </tr>
                <tr>
                  <td><b>交叉街道</b></td>
                  <td class="text-right">Nordoff</td>
                </tr>
                <tr>
                  <td><b>地板</b></td>
                  <td class="text-right">地毯 - 瓷砖</td>
                </tr>
                <tr>
                  <td><b>水暖</b></td>
                  <td class="text-right">全铜水暖</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <h2 class="text-uppercase bottom20">特征</h2>
        <div class="row bottom40">
          <?php
          if(empty($houseMsg->house_facility)){
            $equipment = array();
          }else{
            $equipment = explode(',',$houseMsg->house_facility);
          }
          ?>
          @foreach($equipment as $facility)
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="pro-list">
              <li>{{$facility}}</li>
            </ul>
          </div>
          @endforeach
        </div>
        <h2 class="text-uppercase">户型图</h2>
        <p class="bottom20">我们这里有详细的户型图 能够让你感受到真实的房源信息
        </p>

        <div class="row bottom40">
          @foreach($imagesObj as $value)
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pro-img">
              <figure class="wpf-demo-gallery">
                <img src="http://www.admin.com/uploads/{{$value->house_imagename}}" alt="image">
                <figcaption class="view-caption">    
                  <a data-fancybox-group="gallery" class="fancybox" href="http://www.admin.com/uploads/{{$value->house_imagename}}"><i class="icon-focus"></i></a>
                </figcaption>
              </figure>
            </div>
          </div>
          @endforeach
        </div>

        <div class="row bottom40">
          <div class="col-md-12 padding-b-20">
            <div class="pro-video">
              <figure class="wpf-demo-gallery">
                <video  class="video" controls>
                  <source src="{{url('mp4/IMG_0116.MOV')}}" type="video/mp4">
                  <source src="{{url('mp4/IMG_0116.MOV')}}" type="video/ogg">
                </video>
              </figure>
            </div>
          </div>
        </div>
        <h2 class="text-uppercase bottom20">物业地图</h2>
        <div class="row bottom40">
          <div class="col-md-12 bottom20">
            <div class="property-list-map">
              <div id="property-listing-map" class="multiple-location-map" style="width:100%;height:430px;">
                <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
                <script src="http://webapi.amap.com/maps?v=1.4.2&key=b31cb5cfe1e6ea003e00bd558327fb03"></script>
                <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
                <div id="container"></div>
                <div id="tip">可以移动地图，得到城市的信息哦！<br><span id="info">泰邦科技大厦</span></div>
                <script>
                  var map = new AMap.Map('container', {
                    resizeEnable: true
                  });

                  map.on('moveend', getCity);
                  function getCity() {
                    map.getCity(function(data) {
                      if (data['province'] && typeof data['province'] === 'string') {
                        document.getElementById('info').innerHTML = '城市' + (data['city'] || data['province']);
                      }
                    });
                  }
                </script>
              </div>
            </div>
          </div>
          <div class="social-networks">
            <div class="social-icons-2">
              <span class="share-it">Share this Property</span>
              <span><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></span>
              <span><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></span>
              <span><a href="#."><i class="fa fa-google-plus" aria-hidden="true"></i> Google +</a></span>
            </div>
          </div>
        </div>
        <h2 class="text-uppercase bottom20">联系代理</h2>
        <div class="row">
          <div class="col-sm-6 bottom40">
            <div class="agent_wrap">
              <div class="image">
                <img src="{{asset('home')}}/images/agent-one.jpg" alt="Agents">
              </div>
            </div>
          </div>
          <div class="col-sm-6 bottom40">
            <div class="agent_wrap">
              <h3>Bohdan Kononets</h3>
              <p class="bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing eleifend option congue nihil imperdiet doming…</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right">(+01) 34 56 7890</td>
                  </tr>
                  <tr class="bottom10">
                    <td><strong>Mobile:</strong></td>
                    <td class="text-right">(+033) 34 56 7890</td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                  </tr>
                  <tr>
                    <td><strong>Skype:</strong></td>
                    <td class="text-right"><a href="#.">bohdan.kononets</a></td>
                  </tr>
                </tbody>
              </table>
              <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
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
        <div class="col-sm-12 bottom40">
            <form class="callus">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" placeholder="Phone Number">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="col-sm-12 row">
                  <div class="row">
                    <div class="col-sm-3">
                      <input type="submit" class="btn-blue uppercase border_radius" value="submit now">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          
          <div class="row">
            <div class="col-sm-10">
            <h2 class="text-uppercase top20">Similar Properties</h2>
            <p class="bottom30">We have Properties in these Areas View a list of Featured Properties.</p>
            </div>
            <div class="col-sm-12"><div id="two-col-slider" class="owl-carousel">
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="{{asset('home')}}/images/listing1.jpg" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix"> 
                      <span class="tag pull-right">$8,600 Per Month</span>
                    </div>
                    <span class="tag_t">For Sale</span> 
                    <span class="tag_l">Featured</span>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
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
                      <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                      <ul class="pull-right">
                        <li><a href="#."><i class="icon-like"></i></a></li>
                        <li><a href="#five" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="five">
                      <ul>
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="{{asset('home')}}/images/listing1.jpg" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix"> 
                      <span class="tag pull-right">$8,600 Per Month</span>
                    </div>
                    <span class="tag_t">For Sale</span> 
                    <span class="tag_l">Featured</span>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
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
                      <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                      <ul class="pull-right">
                        <li><a href="#."><i class="icon-like"></i></a></li>
                        <li><a href="#four" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="four">
                      <ul>
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="{{asset('home')}}/images/listing1.jpg" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix"> 
                      <span class="tag pull-right">$8,600 Per Month</span>
                    </div>
                    <span class="tag_t">For Sale</span> 
                    <span class="tag_l">Featured</span>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
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
                      <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                      <ul class="pull-right">
                        <li><a href="#."><i class="icon-like"></i></a></li>
                        <li><a href="#six" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="six">
                      <ul>
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="{{asset('home')}}/images/listing1.jpg" alt="latest property" class="img-responsive"></a>
                    <div class="price clearfix"> 
                      <span class="tag pull-right">$8,600 Per Month</span>
                    </div>
                    <span class="tag_t">For Sale</span> 
                    <span class="tag_l">Featured</span>
                  </div>
                  <div class="proerty_content">
                    <div class="proerty_text">
                      <h3 class="captlize"><a href="#.">Historic Town House</a></h3>
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
                      <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                      <ul class="pull-right">
                        <li><a href="#."><i class="icon-like"></i></a></li>
                        <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                      </ul>
                    </div>
                    <div class="toggle_share collapse" id="three">
                      <ul>
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div></div>
          </div>
          
          <div class="col-sm-12 text-center heading_space">
            <ul class="pager">
              <li><a href="#.">1</a></li>
              <li class="active"><a href="#.">2</a></li>
              <li><a href="#.">3</a></li>
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
                    <a href="#."><img src="{{asset('home')}}/images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For Rent</span></div>
                    <div class="price clearfix"><span class="tag pull-right">$8,600 Per Month - <small>Family Home</small></span></div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="#."><img src="{{asset('home')}}/images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
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
<!-- Property Detail End -->



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


