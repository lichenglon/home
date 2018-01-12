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
    .content-width img{MAX-WIDTH: 100%!important;!important;width:expression(this.width > 358 ? "358px" : this.width)!important;}
    .content-width img{MAX-HEIGHT: 100%!important;!important;height:expression(this.height > 249.81 ? "10px" : this.height)!important;}
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
        <h1 class="text-uppercase"></h1>
        <p></p>
        <ol class="breadcrumb text-center">
         {{-- <li></li>
          <li></li>
          <li></li>--}}
          <li class="active"></li>
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
                <div class="content-width">
                <a href="{{url('house/detail',['msgid'=>$houseVal->msgid])}}"><img class="content-width" src="{{HOUSE_SERVER_PATH}}uploads/{{$houseVal->getImageOne($houseVal->msgid)}}" alt="latest property" class="img-responsive"></a>
                </div>
                  <div class="price clearfix">
                  <span class="tag pull-right">每月 ${{$houseVal->house_price}}</span>
                </div>
                <span class="tag_t">{{$houseVal->house_status}}</span>
                <span class="tag_l">{{$houseVal->house_structure}}</span>
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h4 class="captlize"><a href="{{url('house/detail',['msgid'=>$houseVal->msgid])}}"><?php echo mb_substr($houseVal->house_name, 0, 15, 'utf-8') ?></a>......</h4>
                  <p>{{$houseVal->house_structure}}</p>
                  <br>
                  <span><i class="icon-select-an-objecto-tool"></i>{{$houseVal->house_size}} 平方英尺</span>
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
                  <span><i class="icon-old-television"></i>TV Lounge</span>
                  <span><i class="icon-garage"></i>1 Garage</span>
                  <span></span>
                </div>
                <div class="favroute clearfix">
                  <p class="pull-md-left">发布于 &nbsp; <i class="icon-calendar2"></i>&nbsp; {{$houseVal->house_rise}}</p>
                  <ul class="pull-right">
                    <li><a href="#" title="收藏到我喜欢"><i class="icon-like"></i></a></li>
                    <li><a href="{{url('order/orderAdd',['house_no'=>$houseVal->serial_number])}}" title="去下单"><i class="icon-document-play"></i></a></li>
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
                {{$objData->appends(Request::input())->links()}}
              </div>
            @endif
          </ul>
        </div>
      </div>
      <aside class="col-md-4 col-xs-12">

        {{----------------------高级搜索------------------------}}
        @include('public.publicAdvancedSearch')
        {{-----------------------结束-------------------------}}

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
              <a href="javascript:void (0);">$128,600</a>
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
              <a href="javascript:void (0);">$128,600</a>
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
<!-- Listing end -->


<!--Footer-->
{{--页尾--}}
@include('house.listingPublic.footer')
{{--引入公共js文件--}}
@include('public.publicHouseJs')

</body>
</html>


