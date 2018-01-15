
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
        ul.display{float:left;width:100%;padding:0;list-style:none;border-top:0px solid #333;border-right:0px solid #333;background:#778899;}
        ul.display li{float:left;width:100%;padding:10px 0;border-top:0px solid #111;border-right:0px solid #111;border-bottom:1px solid #333;border-left:0px solid #333;}
        ul.display li a{color:#e7ff61;text-decoration:none;}
        ul.display li .content_block{padding:0 10px;}
        ul.display li .content_block h2{padding:5px;font-weight:normal;font-size:1.7em;}
        ul.display li .content_block p{padding:5px 5px 5px 245px;font-size:1.2em;color:#fff;}
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
    @if($arr)
        @foreach($arr as $value)
    <ul class="display" id="ul_{{$value->msgid}}">
        <li>
            <div class="content_block">
                <a href="{{url('house/detail',['msgid'=>$value->msgid])}}"><img width="229" height="134" src="{{HOUSE_SERVER_PATH}}/uploads/{{$value->getImageOne($value->msgid)}}" alt="Featured Partner"></a>
                <h2><a href="{{url('house/detail',['msgid'=>$value->msgid])}}">{{$value->house_name}}</a></h2>
                <h4>设备：</h4>
                <p>{{$value->house_facility}}</p><i class="icon-like"></i><a href="javascript:if(confirm('亲！您确定要取消收藏我吗？')){javascript:delCollectHouse({{$value->msgid}})}">取消收藏</a>
            </div>
        </li>
    </ul>
        @endforeach
    @else
    <ul class="display">
        <li>
            <div class="content_block">
                <a href="http://www.17sucai.com/"><img width="229" height="134" src="{{asset('home')}}/images/logo1.png" alt="Featured Partner"></a>
                <h2><a href="http://www.17sucai.com/">没有</a></h2>
                <p>阿斯金'，jehosephat来pudneer，SAM-地狱，在感叹。客舱税吏咒语，chitlins吐口水'看着'hootch我正确可接受。女人在唱歌'，去年揭掉狗，响尾蛇熙山楂炖mobilehome拖车车道乱射'工作。</p>
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