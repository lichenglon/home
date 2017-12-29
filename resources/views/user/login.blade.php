<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>登录页</title>
  <link rel="stylesheet" href="{{asset('home/user/css_style/enroll.css')}}">
 </head>
 <body>
 <div id="h">
   <div>
   <form>
   <table></table>	
		<h3>登录</h3>
	<ul type="none">
		<li>
		用户账户<span id="unameMsg" class=""></span><a href="{{url('user/register')}}">注册账户</a>
		<input type="text" name="uname" id="uname" placeholder="请输入您的登录账户">
		<div class="inputImg txt"></div>
		</li>
		<li>
		登录密码<span id="upwdMsg" class=""></span><!-- <a href="#">忘记密码？</a> -->
		<input type="password" name="upwd" id="upwd" placeholder="请输入您的登录密码">
		<div class="inputImg mm"></div>
		</li>
		<li>
		<input type="button" value="登录" id="tjbtn">
		</li>
	</ul>
   </form>	
  </div>
 </div>	
 </body>
 <script src="{{asset('home/user/js/jquery-1.11.3.js')}}"></script>
 <script src="{{asset('home/user/js/enroll.js')}}"></script>
</html>