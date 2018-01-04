<!DOCTYPE HTML>
<html>
<head>
        <meta charset="utf-8">
        <title>二维码</title>
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
</head>

<body>

<div id="main">
        <div class="demo">
                <p><a href="{{url('index/shoppingcart/contact')}}">放弃本次交易</a></p>
                <p>请扫描下方二维码</p>
                <p>本网站只是个人项目 不含有企业信息和资金内容 请放心扫描</p>
                <p>
                        <!-- <input type="hidden" class="input" id="mytxt" value="">  -->
                        <!-- <input type="button" id="sub_btn" value="提交"> -->
                </p>
                <div id="code"></div>
        </div>
</div>

</body>
</html>