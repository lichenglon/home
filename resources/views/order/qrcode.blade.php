<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="refresh" content="5;url={{url('order/orderDetail',['order_id'=>$order_id,'ac'=>'payok'])}}" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title></title>
        <link rel="stylesheet" type="text/css" href="{{asset('order/css/H-ui.min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('order/css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('order/css/bootstrap-fileinput.css')}}">

        @include('public.publicHouseCss')
        <style type="text/css">

                .shade {
                        position: absolute;
                        display: none;
                        width: 100%;
                        height: 100%;
                        top: 0;
                        left: 0;
                        background: rgba(0, 0, 0, 0.55);
                }

                .shade div {
                        width: 300px;
                        height: 200px;
                        line-height: 200px;
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        margin-top: -100px;
                        margin-left: -150px;
                        background: white;
                        border-radius: 5px;
                        text-align: center;
                }

                .a-upload {
                        padding: 4px 10px;
                        height: 20px;
                        line-height: 20px;
                        position: relative;
                        cursor: pointer;
                        color: #888;
                        background: #fafafa;
                        border: 1px solid #ddd;
                        border-radius: 4px;
                        overflow: hidden;
                        display: inline-block;
                        *display: inline;
                        *zoom: 1
                }

                .a-upload input {
                        position: absolute;
                        font-size: 100px;
                        right: 0;
                        top: 0;
                        opacity: 0;
                        filter: alpha(opacity=0);
                        cursor: pointer
                }

                .a-upload:hover {
                        color: #444;
                        background: #eee;
                        border-color: #ccc;
                        text-decoration: none
                }
                .img_div{min-height: 100px; min-width: 100px;}
                .isImg{width: 120px; height: 120px; position: relative; float: left; margin-left: 10px;}
                .removeBtn{position: absolute; top: 0; right: 0; z-index: 11; border: 0px; border-radius: 50px; background: red; width: 22px; height: 22px; color: white;}
                .shadeImg{position: absolute;
                        display: none;
                        width: 100%;
                        height: 100%;
                        top: 0;
                        left: 0;
                        z-index: 15;
                        text-align: center;
                        background: rgba(0, 0, 0, 0.55);}
                .showImg{width: 400px; height: 500px; margin-top: 140px;}
        </style>
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


                <h3>如果付款成功,页面即将跳转</h3>

                <p>请扫描下方二维码进行支付</p>
                <p>
                        <!-- <input type="hidden" class="input" id="mytxt" value="">  -->
                        <!-- <input type="button" id="sub_btn" value="提交"> -->
                </p>
                <div id="code"></div>
                <p><a href="{{url('order/orderList')}}">放弃本次交易</a></p>
        </div>
</div>
</body>

<!--CopyRight-->
<div class="copyright index2"  style="margin-top:150px">
        <div class="copyright_inner">
                <div class="container">
                        <div class="row">
                                <div class="col-md-7">
                                        <p>Copyright &copy; LEMON TEA<a target="_blank" href="http://www.17sucai.com/"></a></p>
                                </div>
                                <div class="col-md-5 text-right">
                                        <p> by <a href="#."></a></p>
                                </div>
                        </div>
                </div>
        </div>
</div>

</html>