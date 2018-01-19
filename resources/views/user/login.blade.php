<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>登录页</title>
  <link rel="stylesheet" href="{{asset('home/user/css_style/enroll.css')}}">
 </head>
 <body>
 <style>

 </style>

 <div id="h">
   <div>

   <form action="{{url('user/loginFind')}}" method="post">

   <table></table>

		<h3>@lang('user.user_login')</h3>
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
</html>



