
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>jQuery实现的图片列表显示切换效果</title>
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
        ul.display{float:left;width:100%;padding:0;list-style:none;border-top:0px solid #333;border-right:0px solid #333;background:#00d6b2;}
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
        a.switch_thumb{width:122px;height:26px;line-height:26px;padding:0;margin:10px 0;display:block;background:url(images/switch.gif) no-repeat;outline:none;text-indent:-9999px;}
        a:hover.switch_thumb{filter:alpha(opacity=75);opacity:.75;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=75)";}
        a.swap{background-position:left bottom; }
    </style>
</head>

<body>
@include('house.listingPublic.header')
<div class="container">

    <ul class="display">

        <li>
            <div class="content_block">
                <a href="http://www.17sucai.com/"><img width="229" height="134" src="{{asset('home')}}/images/logo1.png" alt="Featured Partner"></a>
                <h2><a href="http://www.17sucai.com/">标题</a></h2>
                <p>阿斯金'，jehosephat来pudneer，SAM-地狱，在感叹。客舱税吏咒语，chitlins吐口水'看着'hootch我正确可接受。女人在唱歌'，去年揭掉狗，响尾蛇熙山楂炖mobilehome拖车车道乱射'工作。</p>
            </div>
        </li>

    </ul>
</div>
@include('house.listingPublic.footer')
</body>
</html>