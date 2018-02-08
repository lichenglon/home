<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>登录页</title>
    <link rel="stylesheet" href="{{asset('home/user/css_style/enroll.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/user')}}/css_style/banner.css">

</head>
<body>

<div class="banner" id="banner1">
    <div class="banner-view">

        <div id="h" style="position:absolute; z-index:1; margin-top:100px;">
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
                            <span style="display:inline-block;float:right"><img style="display:inline-block" onclick="reloadcode();" src="{{url('KitController/captcha/1')}}" id="safecode"/></span>
                        </li>

                        <li>
                            {{csrf_field()}}
                            <input type="submit" value="@lang('user.user_login')" id="tjbtn">
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

    </div>
    <div class="banner-btn"></div>
    <div class="banner-number"></div>
    <div class="banner-progres"></div>
</div>


</body>
<script>
    function reloadcode(){
        var verify=document.getElementById('safecode');
        verify.setAttribute('src',"{{url('KitController/captcha/1')}}?"+Math.random());
//这里必须加入随机数不然地址相同我发重新加载
    }
</script>
<script src="{{asset('home/user/js/jquery-1.11.3.js')}}"></script>
<script src="{{asset('home/user/js/enroll.js')}}"></script>
<script type="text/javascript" src="{{asset('home/user')}}/js/banner.js"></script>

<script type="text/javascript">

    var banner = new FragmentBanner({
        container : "#banner1",//选择容器 必选
        imgs : [
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
        ],//图片集合 必选
        size : {
            width : window.innerWidth,
            height : window.innerHeight
        },//容器的大小 可选
        //行数与列数 可选
        grid : {
            line : 3,
            list : 5
        },
        index: 0,//图片集合的索引位置 可选
        type : 1,//切换类型 1 ， 2 可选
        boxTime : 5000,//小方块来回运动的时长 可选
        fnTime : 6000//banner切换的时长 可选
    });


</script>


</html>



