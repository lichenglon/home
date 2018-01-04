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

		<h3>登录</h3>
	<ul type="none">
		<li>
            用户账户<span id="unameMsg" class=""></span><a href="{{url('user/register')}}">注册账户</a>
            <input type="text" name="uname" id="uname" placeholder="请输入您的登录账户">

		</li>
		<li>
            登录密码<span id="upwdMsg" class=""></span><!-- <a href="#">忘记密码？</a> -->
            <input type="password" name="upwd" id="upwd" placeholder="请输入您的登录密码">

		</li>
        <li style="display:inline-block;width:100%; height: 60px;">
            验证码
            <input type="text" name="code" id="yzm" placeholder="请输入您的验证码" style="width: 240px;">
            <span style="display:inline-block;float:right"><img style="display:inline-block" onclick="reloadcode();" src="{{url('KitController/captcha/1')}}" id="safecode"/></span>
        </li>

        <li>
            {{csrf_field()}}
            <input type="submit" value="登录" id="tjbtn">
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



