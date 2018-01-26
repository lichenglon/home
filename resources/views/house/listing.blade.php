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
            <h2 class="uppercase">@lang('listing.listing_property')</h2>
            <p class="heading_space">@lang('listing.listing_have')</p>
          </div>
          <div class="col-md-3">
          <form class="callus">
            <div class="single-query">
              <div class="intro">
                <select>
                  <option class="active">@lang('listing.listing_default')</option>
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
                  <span class="tag pull-right">@lang('listing.listing_month'){{$houseVal->house_price}}</span>
                </div>
                <span class="tag_t">{{$houseVal->house_status}}</span>
                <?php
                $house_structure = explode(',', $houseVal->house_structure)
                ?>
                <span class="tag_l" style="background-color:#f0f1f2">
                   <a href="@if(Session::get('userId'))javascript:houseLikeAdd({{$houseVal->msgid}},{{Session::get('userId')}});@else javascript:if(window.confirm('亲！请先登录')){location.href='{{url('user/login')}}'} @endif" title="收藏到我喜欢">
                      <?php
                        if(!empty($userLike)){
                          $userLikeNum = explode(',',$userLike->house_id);
                        }else{
                         $userLikeNum = [];
                        }
                      ?>
                      @if(in_array($houseVal->msgid, $userLikeNum))
                          <i style="color:red;" class="icon-like"></i>
                        @else
                          <i style="color:#b0b0b0;" class="icon-like" id="like_{{$houseVal->msgid}}"></i>
                       @endif
                   </a>
                </span>
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h4 class="captlize"><a href="{{url('house/detail',['msgid'=>$houseVal->msgid])}}"><?php echo mb_substr($houseVal->house_name, 0, 28, 'utf-8') ?></a></h4>
                  <p><?php echo mb_substr($houseVal->house_location, 0, 33, 'utf-8') ?> <b></b></p>
                  <br>
                  <span><i class="icon-select-an-objecto-tool"></i>{{$houseVal->house_size}} @lang('listing.listing_square')</span>
                </div>
                <div class="property_meta transparent" style="padding-left:10px;">

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
                    @if($washing)
                      <span style="display:inline-block; margin-right:5%;">@lang('include.include_washing')</span>&nbsp;
                    @endif
                    @if($air)
                      <span style="display:inline-block; margin-right:5%;">@lang('include.include_air')</span>&nbsp;
                    @endif
                    @if($heating)
                      <span style="display:inline-block; margin-right:5%;">@lang('include.include_heating')</span>&nbsp;
                    @endif
                    @if($bed)
                      <span style="display:inline-block; margin-right:5%;">@lang('include.include_bed')</span>&nbsp;
                    @endif
                    @if($kitchen)
                      <span style="display:inline-block; margin-right:5%;">@lang('include.include_cookhouse')</span>&nbsp;
                    @endif
                    @if($closet)
                      <span style="display:inline-block; margin-right:5%;">@lang('include.include_wardrobe')</span>&nbsp;
                    @endif
                    @if($refrigerator)
                      <span style="display:inline-block; margin-right:5%;">@lang('include.include_refrigerator')</span>&nbsp;
                    @endif

                </div>
                <div class="property_meta transparent bottom30">
                  <span><i class="icon-old-television"></i>@lang('listing.listing_lounge')</span>
                  <span><i class="icon-garage"></i>1 @lang('listing.listing_garage')</span>
                  <span></span>
                </div>
                <div class="favroute clearfix">
                  <?php
                  $house_structure = explode(',', $houseVal->house_structure)
                  ?>
                  <p class="pull-md-left">
                    {{ $house_structure[0] }} @lang('listing.room')
                    {{ $house_structure[1] }} @lang('listing.hall')
                    {{ $house_structure[2] }} @lang('listing.kitchen')
                    {{ $house_structure[3] }} @lang('listing.toilet')
                  </p>
                  <ul class="pull-right">
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
            <h3 class="bottom40 margin40">@lang('listing.listing_featured')</h3>
          </div>
        </div>
        @foreach($recommend as $recommendVal)
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <a href="{{url('house/detail',['msgid'=>$recommendVal->msgid])}}"><img width="80" height="77.06" src="{{HOUSE_SERVER_PATH}}uploads/{{$recommendVal->getImageOne($recommendVal->msgid)}}" alt="image"></a>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4><?php echo mb_substr($recommendVal->house_name, 0, 16, 'utf-8') ?><b>....</b></h4>
              <p class="bottom15"><?php echo mb_substr($recommendVal->house_location, 0, 25, 'utf-8') ?><b>....</b></p>
              <a href="{{url('house/detail',['msgid'=>$recommendVal->msgid])}}">$ {{$recommendVal->house_price}} @if(Session::get('lang') == 'en') {{ $recommendVal->en_price_currency }} @else {{ $recommendVal->price_currency }} @endif</a>
            </div>
          </div>
        </div>
        @endforeach


        <div class="row">
          <div class="col-md-12">
            <h3 class="margin40 bottom20">@lang('listing.listing_featured')</h3>
          </div>
          <div class="col-md-12">
            <div id="agent-2-slider" class="owl-carousel">
              @foreach($objData as $Featured)
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="{{url('house/detail',['msgid'=>$Featured->msgid])}}"><img src="{{HOUSE_SERVER_PATH}}uploads/{{$Featured->getImageOne($Featured->msgid)}}" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">{{$Featured->house_status}}</span></div>
                    <div class="price clearfix">
                      <span class="tag pull-right">
                        @lang('listing.listing_month'){{$Featured->house_price}} -
                        <small>
                          <?php
                          $house_structure = explode(',', $houseVal->house_structure)
                          ?>
                            {{ $house_structure[0] }} @lang('listing.room')
                            {{ $house_structure[1] }} @lang('listing.hall')
                            {{ $house_structure[2] }} @lang('listing.kitchen')
                            {{ $house_structure[3] }} @lang('listing.toilet')
                        </small>
                      </span>
                    </div>
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
<script>
  function houseLikeAdd(houseMsgId,userId) {
    $.ajax({
      url:"{{url('house/houseLikeAdd')}}",
      data:'house_id='+houseMsgId+'&userId='+userId,
      type:'get',
      success:function (re) {
        if(re == '1'){
          alert('@lang('index.index_pro')');
        } else if (re == '0'){
          alert('@lang('index.index_sorry')');
        } else {
          $('#like_'+houseMsgId).css('color', 'red');
          alert('@lang('index.index_success')');
        }
      }
    })
  }
</script>
</body>
</html>


