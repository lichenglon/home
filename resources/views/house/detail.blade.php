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
        <h1 class="text-uppercase"></h1>
        <p></p>
        <ol class="breadcrumb text-center">
         {{-- <li><a href="#."></a></li>
          <li><a href="#."></a></li>
          <li class="active"></li>--}}
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
          <div class="item"><img height="523.34" src="http://www.admin.com/uploads/{{$value->house_imagename}}" alt="image"></div>
          @endforeach
        </div>
        <div id="property-d-1-2" class="owl-carousel">
          @foreach($imagesObj as $value)
          <div class="item" ><img width="140" height="97.69" src="http://www.admin.com/uploads/{{$value->house_imagename}}" alt="image"></div>
          @endforeach
        </div>
        <div class="property_meta bg-black bottom40">
          <span><i class="icon-select-an-objecto-tool"></i>@lang('detail.detail_4800')</span>
          <span><i class=" icon-microphone"></i>2 @lang('detail.detail_office')</span>
          <span><i class="icon-safety-shower"></i>1 @lang('detail.detail_bathroom')</span>
          <span><i class="icon-old-television"></i>@lang('detail.detail_lounge')</span>
          <span><i class="icon-garage"></i>1 @lang('detail.detail_garage')</span>
        </div>
        <h2 class="text-uppercase">@lang('detail.detail_introduction')</h2>
        <p class="bottom30"></p>
        <p class="bottom30"></p>
        <div class="text-it-p bottom40">
          <p>{{$houseMsg->house_brief}}</p>
        </div>
        <h2 class="text-uppercase bottom20">@lang('detail.detail_quick')</h2>
        <div class="row property-d-table bottom40">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <table class="table table-striped table-responsive">
              <tbody>
                <tr>
                  <td><b>@lang('detail.detail_id')</b></td>
                  <td class="text-right">{{$houseMsg->serial_number}}</td>
                </tr>
                <tr>
                  <td><b>@lang('detail.detail_price')</b></td>
                  <td class="text-right">${{$houseMsg->house_price}} / @lang('detail.detail_month')</td>
                </tr>
                <tr>
                  <td><b>@lang('detail.detail_size')</b></td>
                  <td class="text-right">{{$houseMsg->house_size}} @lang('detaildetail_feet')</td>
                </tr>
                <tr>
                  <td><b>@lang('detail.detail_bedroom')</b></td>
                  <td class="text-right">5</td>
                </tr>
                <tr>
                  <td><b>@lang('detail.detail_bathroom')</b></td>
                  <td class="text-right">3</td>
                </tr>
                <tr>
                  <td><b>@lang('detail.detail_time')</b></td>
                  <td class="text-right">{{$houseMsg->house_duration}}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <table class="table table-striped table-responsive">
              <tbody>
                <tr>
                  <td><b>@lang('detail.detail_home')</b></td>
                  <td class="text-right">{{$houseMsg->house_status}}</td>
                </tr>
                <tr>
                  <td><b>@lang('detail.detail_built')</b></td>
                  <td class="text-right">1991</td>
                </tr>
                <tr>
                  <td><b>@lang('detaildetail_garage')</b></td>
                  <td class="text-right">1</td>
                </tr>
                <tr>
                  <td><b>@lang('detail.detail_cross')</b></td>
                  <td class="text-right">@lang('detail.detail_nordoff')</td>
                </tr>
                <tr>
                  <td><b>@lang('detail.detail_floor')</b></td>
                  <td class="text-right">@lang('detail.detail_carpet')</td>
                </tr>
                <tr>
                  <td><b>@lang('detail.detail_plumbing')</b></td>
                  <td class="text-right">@lang('detail.detail_all')</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <h2 class="text-uppercase bottom20">@lang('detail.detail_feature')</h2>
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

        <div class="row bottom40">
          <div class="col-md-12 padding-b-20">
            <div class="pro-video">
              <figure class="wpf-demo-gallery">
                <video  class="video" controls>
                  <source src="{{url('mp4/IMG_0238.MOV')}}" type="video/mp4">
                  <source src="{{url('mp4/IMG_0238.MOV')}}" type="video/ogg">
                </video>
              </figure>
            </div>
          </div>
        </div>

        <h2 class="text-uppercase bottom20">@lang('detail.detail_property')</h2>
        <div class="row bottom40">
          <div class="col-md-12 bottom20">
            <div class="property-list-map">
              <div id="property-listing-map" class="multiple-location-map" style="width:100%;height:430px;">
                <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
                <script src="http://webapi.amap.com/maps?v=1.4.2&key=b31cb5cfe1e6ea003e00bd558327fb03"></script>
                <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
                <div id="container"></div>
                <div id="tip">@lang('detail.detail_can')<br><span id="info">@lang('detail.detail_and')</span></div>
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
              <span class="share-it">@lang('detail.detail_share')</span>
              <span><a href="#."><i class="fa fa-facebook" aria-hidden="true"></i> @lang('detail.detail_facebook')</a></span>
              <span><a href="#."><i class="fa fa-twitter" aria-hidden="true"></i> @lang('detail.detail_twitter')</a></span>
              <span><a href="#."><i class="fa fa-google-plus" aria-hidden="true"></i> @lang('detail.detail_google') +</a></span>
            </div>
          </div>
        </div>
      </div>
      <aside class="col-md-4 col-xs-12">

        {{----------------------高级搜索------------------------}}
        @include('public.publicAdvancedSearch')
        {{-----------------------结束-------------------------}}



        //////有待更改

        <div class="row">
          <div class="col-md-12">
            <h3 class="bottom40 margin40">@lang('detail.detail_featured')</h3>
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
            <h3 class="margin40 bottom20">@lang('detail.detail_featured')</h3>
          </div>
          <div class="col-md-12">
            <div id="agent-2-slider" class="owl-carousel">
              @foreach($objData as $Featured)
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="{{url('house/detail',['msgid'=>$Featured->msgid])}}"><img src="{{HOUSE_SERVER_PATH}}uploads/{{$Featured->getImageOne($Featured->msgid)}}" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">{{$Featured->house_status}}</span></div>
                    <div class="price clearfix"><span class="tag pull-right">每月 ${{$Featured->house_price}} - <small>{{$Featured->house_structure}}</small></span></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>
<!-- Property Detail End -->



<!--Footer-->
{{--页尾--}}
@include('house.listingPublic.footer')

{{--引入公共js文件--}}
@include('public.publicHouseJs')
</body>
</html>


