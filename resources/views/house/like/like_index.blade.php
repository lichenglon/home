
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>用户收藏</title>
    @include('public.publicHouseCss')
    <script type="text/javascript" src="js/jquery-latest.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $("a.switch_thumb").toggle(function(){
                $(this).addClass("swap");
                $("ul.display").fadeOut("fast", function() {
                    $(this).fadeIn("fast").addClass("thumb_view");
                });
            }, function () {
                $(this).removeClass("swap");
                $("ul.display").fadeOut("fast", function() {
                    $(this).fadeIn("fast").removeClass("thumb_view");
                });
            });

        });
    </script>
    <style type="text/css">
        *{margin:0;padding:0;list-style-type:none;}
        a,img{border:0;}

        /* display */
        ul.display{float:left;width:100%;padding:0;list-style:none;border-top:0px solid #333;border-right:0px solid #333;background:#f8f8ff;}
        ul.display li{float:left;width:100%;padding:10px 0;border-top:0px solid #111;border-right:0px solid #111;border-bottom:1px solid #333;border-left:0px solid #333;}
        ul.display li a{color:black;text-decoration:none;}
        ul.display li .content_block{padding:0 10px;}
        ul.display li .content_block h2{padding:5px;font-weight:normal;font-size:1.7em;}
        ul.display li .content_block p{padding:5px 5px 5px 245px;font-size:1.2em;color:black;}
        ul.display li .content_block a img{padding:5px;border:2px solid #ccc;background:#fff;margin:0 15px 0 0;float:left;}
        ul.thumb_view li{width:250px;}
        ul.thumb_view li h2{display:inline;}
        ul.thumb_view li p{display:none;}
        ul.thumb_view li .content_block a img{margin:0 0 10px;}

    </style>
</head>

<body>
@include('house.listingPublic.header')
<div class="container" style="margin-top:1%; margin-bottom:1%;">
    @if($arr[0])
        @foreach($arr as $value)
    <ul class="display" id="ul_{{$value->msgid}}">
        <li>
            <div class="content_block">
                <a href="{{url('house/detail',['msgid'=>$value->msgid])}}"><img width="229" height="134" src="{{HOUSE_SERVER_PATH}}/uploads/{{$value->getImageOne($value->msgid)}}" alt="Featured Partner"></a>
                <h2><a href="{{url('house/detail',['msgid'=>$value->msgid])}}">{{$value->house_name}}</a></h2>
                <h4>@lang('user_like.Building_equipment')：</h4>
                <p>
                    <?php
                    if(empty($value->house_facility)){
                        $equipment = array();
                        $washing = in_array('洗衣机',$equipment);//洗衣机
                        $air = in_array('空调',$equipment);//空调
                        $heating = in_array('暖气',$equipment);//暖气
                        $bed = in_array('床',$equipment);//床
                        $kitchen = in_array('厨房',$equipment);//厨房
                        $closet = in_array('衣柜',$equipment);//衣柜
                        $refrigerator = in_array('冰箱',$equipment);//冰箱
                    }else{
                        $equipment = explode(',',$value->house_facility);
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
                            <span style="display:inline-block; margin-right:5%;">@lang('user_like.machine')</span>&nbsp;
                        @endif
                        @if($air)
                            <span style="display:inline-block; margin-right:5%;">@lang('user_like.conditioning')</span>&nbsp;
                        @endif
                        @if($heating)
                            <span style="display:inline-block; margin-right:5%;">@lang('user_like.heating')</span>&nbsp;
                        @endif
                        @if($bed)
                            <span style="display:inline-block; margin-right:5%;">@lang('user_like.bed')</span>&nbsp;
                        @endif
                        @if($kitchen)
                            <span style="display:inline-block; margin-right:5%;">@lang('user_like.kitchen')</span>&nbsp;
                        @endif
                        @if($closet)
                            <span style="display:inline-block; margin-right:5%;">@lang('user_like.wardrobe')</span>&nbsp;
                        @endif
                        @if($refrigerator)
                            <span style="display:inline-block; margin-right:5%;">@lang('user_like.refrigerator')</span>&nbsp;
                        @endif
                </p>

                <i class="icon-like"></i><a href="javascript:if(confirm('@lang('user_like.Cancel_sure')')){javascript:delCollectHouse({{$value->msgid}})}">@lang('user_like.Cancel_the_collection')</a>

            </div>
        </li>
    </ul>
        @endforeach
    @else

    <ul class="display">
        <li>
            <div class="content_block">
                <a href="http://www.17sucai.com/"><img width="229" height="134" src="{{asset('home')}}/images/logo1.png" alt="Featured Partner"></a>
                <h2><a href="http://www.17sucai.com/">Pro! </a></h2>
                <p>You haven't collected any listings yet.</p>
            </div>
        </li>
    </ul>

     @endif
</div>
@include('house.listingPublic.footer')
{{--引入公共js文件--}}
@include('public.publicHouseJs')
<script type="text/javascript">
    function delCollectHouse(msgid) {
        $.ajax({
            url:"{{url('house/like_del')}}",
            data:'msgid='+msgid,
            type:'get',
            success:function (re) {
                if (re != '0') {
                    $("#ul_"+msgid).remove();
                }
            }
        })
    }

</script>
</body>
</html>