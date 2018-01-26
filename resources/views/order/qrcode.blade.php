<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        {{--<meta http-equiv="refresh" content="5;url={{url('order/orderDetail',['order_id'=>$order_id,'ac'=>'payok'])}}" />--}}
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title></title>
        <link rel="stylesheet" type="text/css" href="{{asset('order/css/H-ui.min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('order/css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('order/css/bootstrap-fileinput.css')}}">

        @include('public.publicHouseCss')
</head>
@include('house.listingPublic.header')
        <!--Header Ends-->
        <style type="text/css">
                .demo{width:400px; margin:40px auto 0 auto; min-height:250px;}
                .demo p{line-height:30px}
                #code{margin-top:10px}
        </style>
        <script type="text/javascript" src="{{asset('qrCode')}}/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="{{asset('qrCode')}}/jquery.qrcode.min.js"></script>
        <script type="text/javascript">
                $(function(){
                        var str = "http://www.baidu.com";
                        $('#code').qrcode(str);

                        $("#sub_btn").click(function(){
                                $("#code").empty();
                                var str = toUtf8($("#mytxt").val());
//		encodeURI("http://中文中文");
                                $("#code").qrcode({
                                        render: "canvas",//table,canvas
                                        width: 100,
                                        height:100,
                                        text: str,
                                        foreground: "#C00",
                                        background: "#FFF",
                                });
                        });
                })
                function toUtf8(str) {
                        var out, i, len, c;
                        out = "";
                        len = str.length;
                        for(i = 0; i < len; i++) {
                                c = str.charCodeAt(i);
                                if ((c >= 0x0001) && (c <= 0x007F)) {
                                        out += str.charAt(i);
                                } else if (c > 0x07FF) {
                                        out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));
                                        out += String.fromCharCode(0x80 | ((c >>  6) & 0x3F));
                                        out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));
                                } else {
                                        out += String.fromCharCode(0xC0 | ((c >>  6) & 0x1F));
                                        out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));
                                }
                        }
                        return out;
                }
        </script>


<body onload="leftTimer()">
<div id="main">
        <div class="demo">


                <h3>@lang('order.order_successful')</h3>

                <p>@lang('order.order_scan')</p>
                <p>
                        <!-- <input type="hidden" class="input" id="mytxt" value="">  -->
                        <!-- <input type="button" id="sub_btn" value="提交"> -->
                </p>
                <div id="code"></div>
                <p><a href="{{url('order/orderList')}}">@lang('order.order_transaction')</a></p>
        </div>
</div>
</body>

<!--CopyRight-->



<script>
        function setLocale(lang){

                $.ajax({
                        url:"{{url('/')}}",
                        data:'lang='+lang,
                        type:'get',
                        success:function () {
                                location.reload();
                        }
                })
        }
</script>
{{--<script src="{{asset('home')}}/js/jquery-2.1.4.js"></script>--}}
@include('house.listingPublic.footer')
</html>


{{--引入公共js文件--}}
