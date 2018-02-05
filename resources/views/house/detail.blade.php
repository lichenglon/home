<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Property Detail</title>
  @include('public.publicHouseCss')
  <link type="text/css" rel="stylesheet" href="{{asset('user_login')}}/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="{{asset('user_login')}}/css/index.css">
  <style>


    .comment-text-area {
      width: 700px;
    }

    .text-area {
      width: 680px;
      max-width: 680px;
      max-height: 150px;
      border: 5px #ebebeb solid;
      height: 150px;
      overflow: hidden;
      padding: 5px 5px 5px 5px;
      color: #999999;
    }

    .text-area-input-length {
      font-size: 12px;
      line-height: 30px;
    }

    .text-area-input-length span {
      margin: 0px 5px 0px 5px;
      color: red;
    }

    .text-area-bottom {
      text-align: right;
      margin: 5px 0px 0px 0px;
      padding: 0px 0px 0px 0px;
    }

    .text-area-bottom {
      border: #ebebeb 2px solid;
      padding: 10px 20px 10px 20px;
      text-decoration: none;
      background-color: #1AA094;
      font-size: 14px;
    }

    .text-area-star {
      overflow: hidden;
      text-align: center;
    }

    .text-area-star label {
      float: left;
      line-height: 35px;
      height: 35px;
      font-size: 12px;
      margin: 0px 10px 10px 0px;
      padding: 0px 5px 0px 5px;
      cursor: pointer;
      border: 1px solid #ebebeb;
    }

    .red {
      color: red;
      border: 1px solid red !important;
    }

    .text-area-star label input {
      filter: alpha(opacity=0);
      -moz-opacity: 0;
      opacity: 0;
      position: absolute;
    }

    .text-area-star label span {
      padding: 10px 10px 10px 10px;
      position: relative;
    }
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
          <div class="item"><img height="523.34" src="{{HOUSE_SERVER_PATH}}uploads/{{$value->house_imagename}}" alt="image"></div>
          @endforeach
        </div>
        <div id="property-d-1-2" class="owl-carousel">
          @foreach($imagesObj as $value)
          <div class="item" ><img width="140" height="97.69" src="{{HOUSE_SERVER_PATH}}uploads/{{$value->house_imagename}}" alt="image"></div>
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

              <h2 class="text-uppercase">@lang('detail.comment')</h2>
              <div class="comment-level"></div>
            <form action="{{url('comment/comment')}}" method="post" id="SUBMIT">

              {{ csrf_field() }}
              <div class="comment-text-area">
                <div class="text-area-star" style="width:780px;">
                  <label>
                    <img src="{{asset("./home/images/star.png")}}" alt="">
                    <input type="radio" name="star" value="1"/><span>@lang('detail.Is_very_poor')</span>
                  </label>
                  <label>
                    <img src="{{asset("./home/images/star.png")}}" alt="">
                    <img src="{{asset("./home/images/star.png")}}" alt="">
                    <input type="radio" name="star" value="2"/><span>@lang('detail.general')</span>
                  </label>
                  <label>
                    <img src="{{asset("./home/images/star.png")}}" alt="">
                    <img src="{{asset("./home/images/star.png")}}" alt="">
                    <img src="{{asset("./home/images/star.png")}}" alt="">
                    <input type="radio" name="star" value="3"/><span>@lang('detail.good')</span>
                  </label>
                  <label>
                    <img src="{{asset("./home/images/star.png")}}" alt="">
                    <img src="{{asset("./home/images/star.png")}}" alt="">
                    <img src="{{asset("./home/images/star.png")}}" alt="">
                    <img src="{{asset("./home/images/star.png")}}" alt="">
                    <input type="radio" name="star" value="4"/><span>@lang('detail.Very_good')</span>
                  </label>
                  <label class="red">
                    <img src="{{asset("./home/images/star.png")}}" alt="">
                    <img src="{{asset("./home/images/star.png")}}" alt="">
                    <img src="{{asset("./home/images/star.png")}}" alt="">
                    <img src="{{asset("./home/images/star.png")}}" alt="">
                    <img src="{{asset("./home/images/star.png")}}" alt="">
                    <input type="radio" checked name="star" value="5"/><span>@lang('detail.Very_Very_good')</span>
                  </label>
                  <input type="hidden" name="user_id" id="user_id" value="{{Session::get('userId')}}">
                  <input type="hidden" name="house_id" value="{{$houseMsg->msgid}}">
                </div>
                <div>
                  <textarea id="textarea" class="text-area text-area-input" name="content" required="required">{{Session::get('textarea')}}</textarea>
                  <div class="text-area-input-length">@lang('detail.You_can_also_type')<span>150</span>@lang('detail.A_word')</div>
                  <div>
                    @if(Session::get('userId'))
                      <button type="submit" class="text-area-bottom">@lang('detail.submit')</button>
                    @else
                      <butto class="globalLoginBtn" style="width:80px;">@lang('detail.submit')</butto>
                    @endif
                  </div>
                </div>


              </div>
            </form>

            <div class="row property-d-table bottom40">
              @foreach($comment as $com)
              <div>
                <table class="table table-striped table-responsive" style="width:680px;margin-left:15px;">
                  <tbody>
                  <tr>
                    <td><b>@lang('detail.user_name')：</b></td>
                    <td>{{$com->user}}</td>
                  </tr>
                  <tr>
                    <td><b>@lang('detail.score')：</b></td>
                    <td>
                      @for($i = 0 ; $i < $com->star; $i++)
                      <img src="{{asset("./home/images/star.png")}}" alt="">
                      @endfor
                    </td>
                  </tr>
                  <tr>
                    <td width="120"><b>@lang('detail.content')：</b></td>
                    <td>{{$com->content}}</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              @endforeach
            </div>


          </div>
        </div>
      </div>

      <aside class="col-md-4 col-xs-12">

        {{----------------------高级搜索------------------------}}
        @include('public.publicAdvancedSearch')
        {{-----------------------结束-------------------------}}

        <div class="feature-p-text" style="padding-top:8%;">
        <a style="display:inline-block; width:68%; height:50px; text-align:center;line-height:28px; font-weight:300; font-size:22px;" href="{{url('order/orderAdd',['house_no'=>$houseMsg->serial_number])}}">@lang('detail.detail_place')</a>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="bottom40 margin40">@lang('detail.detail_featured')</h3>
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
                    <div class="price clearfix"><span class="tag pull-right">@lang('detail.detail_the'){{$Featured->house_price}} - <small>{{$Featured->house_structure}}</small></span></div>
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

<div class="modal fade" id="loginModal" style="display:none;">
  <div class="modal-dialog modal-sm" style="width:540px;">
    <div class="modal-content" style="border:none;">
      <div class="col-left"></div>

      <div class="col-right">
        <div class="modal-header">
          <button type="button" id="login_close" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="loginModalLabel" style="font-size: 18px;">登录</h4>
        </div>
        <div class="modal-body">
          <form id="login_form" action="{{url('comment/login')}}" method="post" autocomplete="off" class="js-ajax-form">
          <section class="box-login v5-input-txt" id="box-login">

              <input type="hidden" name="_token"  value="{{csrf_token()}}"/>
              <ul>
                <li class="form-group"><input class="form-control" id="id_account_l" maxlength="50" name="account_l" placeholder="请输入账号" type="text">
                  <div class="tips_error"></div>
                </li>
                <li class="form-group"><input class="form-control" id="id_password_l" name="password_l" placeholder="请输入密码" type="password"></li>
              </ul>

            <p class="good-tips marginB10"><a id="btnForgetpsw" class="fr">忘记密码？</a>还没有账号？<a href="{{url('user/register')}}" target="_blank" id="btnRegister">立即注册</a></p>
            <div class="login-box marginB10">
              <button id="login_btn" type="submit" class="btn btn-micv5 btn-block globalLogin js-ajax-form">登录</button>
              <div id="login-form-tips" class="tips-error bg-danger" style="display: none;">错误提示</div>
            </div>
            <div class="threeLogin"><span>其他方式登录</span><a class="nqq" href="javascript:;"></a><a class="nwx" href="javascript:;"></a><!--<a class="nwb"></a>--></div>
          </section>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Property Detail End -->



<!--Footer-->
{{--页尾--}}

@include('house.listingPublic.footer')

{{--引入公共js文件--}}
@include('public.publicHouseJs')
{{--<script type="text/javascript" src="{{asset('user_login')}}/js/jquery2.2.2.min.js"></script>--}}
<script type="text/javascript" src="{{asset('user_login')}}/js/modal.js"></script>
<script type="text/javascript" src="{{asset('user_login')}}/js/script.js"></script>

<script type="text/javascript">
  $(function(){
    $('.js-ajax-form').submit(function () {
      var data  ={
        _token : $('input[name=_token]').val(),
        account_l : $('input[name=account_l]').val(),
        password_l : $('input[name=password_l]').val(),
        xinxin : $("#SUBMIT input[name=star]:checked").val(),
        textarea : document.getElementById('textarea').value
      };
      if(!data.password_l){
        $('.tips_error').html('The user name cannot be empty.');
        return false;
      }
      if(!data.password_l){
        $('.tips_error').html('The password cannot be empty.');
        return false;
      }
      $.post("{{asset('comment/login')}}",data,function(msg){

        if(msg == 1){
          location.reload();
        }else if(msg == 0){
          $('.tips_error').html("用户名不存在！");
        }else{
          $('.tips_error').html("密码错误！");
        }

      },'json');
      return false;

    });

  });

  $(function () {
    //离开的时候
    $('.text-area-input').blur(function () {
      var iNum = $(this).val().length;
      var fixedLength = 150;//固定长度
      if (iNum < fixedLength) {
        $('.text-area-input-length span').html(fixedLength - iNum);
      } else {
        $(this).val($(this).val().substr(0, fixedLength - 1));//截取长度
        $('.text-area-input-length span').html(iNum - fixedLength);
      }
    });

    //按下的时候
    $('.text-area-input').keydown(function () {
      var iNum = $(this).val().length;
      var fixedLength = 150;//固定长度
      if (iNum < fixedLength) {
        $('.text-area-input-length span').html(fixedLength - iNum);
      } else {
        $(this).val($(this).val().substr(0, fixedLength - 1));//截取长度
        $('.text-area-input-length span').html(iNum - fixedLength);
      }
    });


    $('.text-area-star label').click(function () {
      var labelLength = $('.text-area-star label').length;
      for (var i = 0; i < labelLength; i++) {
        if (this == $('.text-area-star label').get(i)) {
          $('.text-area-star label').eq(i).addClass('red');
        } else {
          $('.text-area-star label').eq(i).removeClass('red');
        }
      }
    });


  });
</script>
</body>
</html>


