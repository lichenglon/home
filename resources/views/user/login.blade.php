<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>登录页</title>
    <link rel="stylesheet" href="{{asset('home/user/css_style/enroll.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/user')}}/css_style/banner.css">

</head>
<body onload="refresh()">

<div id="h" style="margin-top:100px;">
    <div>

        <form action="{{url('user/loginFind')}}" method="post" >

            <table></table>

            <h3>ULzz.com | @lang('user.user_login')</h3>
            <ul type="none">
                <li>
                    @lang('user.user_the')<span id="unameMsg" class=""></span><a href="{{url('user/register')}}">@lang('user.user_registered')</a>
                    <input type="text" name="uname" id="uname" placeholder="@lang('user.user_please')">

                </li>
                <li>
                    @lang('user.user_password')<span id="upwdMsg" class=""></span><!-- <a href="#">忘记密码？</a> -->
                    <input type="password" name="upwd" id="upwd" placeholder="@lang('user.user_enter')">

                </li>
                <li style="display:inline-block;width:100%; height: 60px;">
                    @lang('user.user_verification')
                    <input type="text" name="code" id="yzm" placeholder="@lang('user.user_authentication')" style="width: 240px;">
                    <span style="display:inline-block;float:right"><img id="safecode" src="{{url('KitController/captcha/1')}}" onclick="this.src='{{url('KitController/captcha/1')}}=' + Math.random();" /></span>
                </li>


                <li>
                    {{csrf_field()}}
                    <input type="submit" value="@lang('user.user_login')" id="tjbtn" class="aaa1">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </li>
            </ul>
        </form>
    </div>
</div>


</body>

<script src="{{asset('home/user/js/jquery-1.11.3.js')}}"></script>
<script src="{{asset('home/user/js/enroll.js')}}"></script>

<script type="text/javascript">

    var imgs = [
        '{{url('home/user/img/a1.jpg')}}',
        '{{url('home/user/img/a2.jpg')}}',
        '{{url('home/user/img/a3.jpg')}}',
        '{{url('home/user/img/a4.jpg')}}',
        '{{url('home/user/img/a5.png')}}',
        '{{url('home/user/img/a6.jpg')}}',
        '{{url('home/user/img/a7.jpg')}}',
        '{{url('home/user/img/a8.jpg')}}',
        '{{url('home/user/img/a9.jpg')}}',
        '{{url('home/user/img/a10.jpg')}}'

    ];
    var caution = false
    function setCookie(name, value, expires, path, domain, secure)
    {
        var curCookie = name + "=" + escape(value) +
                ((expires) ? "; expires=" + expires.toGMTString() : "") +
                ((path) ? "; path=" + path : "") +
                ((domain) ? "; domain=" + domain : "") +
                ((secure) ? "; secure" : "")
        if (!caution || (name + "=" + escape(value)).length <= 4000)
            document.cookie = curCookie
        else if (confirm("Cookie exceeds 4KB and will be cut!"))
            document.cookie = curCookie
    }
    function getCookie(name)
    {
        var prefix = name + "="
        var cookieStartIndex = document.cookie.indexOf(prefix)
        if (cookieStartIndex == -1)
            return null
        var cookieEndIndex = document.cookie.indexOf(";", cookieStartIndex + prefix.length);
        if (cookieEndIndex == -1)
            cookieEndIndex = document.cookie.length
        return unescape(document.cookie.substring(cookieStartIndex + prefix.length, cookieEndIndex));
    }
    var now = new Date();
    now.setTime(now.getTime() + 365 * 24 * 60 * 60 * 1000);
    var imagsNum = getCookie('imageNumber');
    if(Number(imagsNum) > 8)
    {
        setCookie('imageNumber',0,now);
    }
    else if(getCookie('imageNumber'))
    {
        var i = getCookie('imageNumber');
        var ii = Number(i)+1;
        setCookie('imageNumber',ii,now);
    }
    else
    {
        setCookie('imageNumber',0,now);
    }
    function refresh()
    {
        var index = getCookie('imageNumber');
        //console.log(index);
        var img = imgs[index];
        document.body.style.backgroundImage="url("+img+")";
    }
</script>


</html>



