<!DOCTYPE html>
<html>
	<head>
		<title>注册页</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="{{asset('home/user/css_style/enter.css')}}">

	</head>

	<body>
		<div>
		<div>
			<form action="{{url('user/save')}}" method="post">

			<table>
			<th>新用户注册</th>
			<th id="entera"><a href="{{url('user/login')}}">直接登录</a></th>
				<tr>
					<td>用户名：</td>
					<td><input type="text" name="uname" id="uname" placeholder="请输入您的用户名"></td>
					<td><span id="unameMsg" class="ok"></span></td>
				</tr>
				<tr>
					<td>登录密码：</td>
					<td><input type="password" name="upwd" id="upwd" placeholder="请输入您的密码"></td>
					<td><span id="upwdMsg" class="ok"></span></td>
				</tr>
				<tr>
					<td>确认密码：</td>
					<td><input type="password" placeholder="请输入您的密码" id="upwds"></td>
					<td><span id="upwdsMsg"></span></td>
				</tr>
				<tr>
					<td>邮箱：</td>
					<td><input type="text" name="email" id="email" placeholder=" 请输入您的邮箱地址"></td>
					<td><span id="emailMsg"></span></td>
				</tr>
				<tr>
					<td>手机号码：</td>
					<td><input type="text" name="phone" id="phone" placeholder="请输入您的手机号码"></td>
					<td><span id="phoneMsg"></span></td>
				</tr>
				<tr>
					<td>姓名：</td>
					<td><input type="text" name="user" id="userName" placeholder="请输入您的真实姓名"></td>
					<td><span  id="userNameMsg"></span></td>
				</tr>
				<tr>
				<td></td>
					<td colspan="2">
						{{csrf_field()}}
						<input type="submit" value="注册" id="tjbtn">
					</td>
				</tr>
			</table>
			</form>
		</div>
		</div>
	</body>
	<script src="{{asset('home/user/js/jquery-1.11.3.js')}}"></script>
	<script src="{{asset('home/user/js/enters.js')}}"></script>
	<script type="text/javascript">
		/*鼠标失去焦点验证用户名是否重复*/
	$('#uname').blur(function(){
		var username = $('#uname').val();
	 $.ajax({
	   type: "POST",
	   url: "{{url('user/registerData')}}",
	   data: "username="+ username,
	   success: function(msg){
		alert('1');
		 if (msg != "1"){
			$unameMsg.html("用户名可用")
				.removeClass().addClass("ok");
				}else
					$unameMsg.html("用户名重复").removeClass()
			.addClass("err");

	   }
	});
	});
	//console.log($("#unameMsg").hasClass("ok"));
	{{--	<script>
		$("[name=uname]").blur(function(){
			houhou = this.value;
			$.post("shunshi.php",{"uname":houhou},function(zhi){
				if(zhi == 1){      //已经被注册
					$("#jiance").html("居然是JQ的毛病");
					$("#jiance").css({"display":"","color":"red"});
				}else if(zhi == 2){   //可以注册
					$("#jiance").html("你大爷的JQ");
					$("#jiance").css({"display":"","color":"blue"});
				}else if(zhi == 3){  //不能为空
					$("#jiance").html("因为JQ居然花了那么久");
					$("#jiance").css({"display":"","color":"red"});
				}else if(zhi == 4){
					$("#jiance").html("用户名不能使用");
					$("#jiance").css({"display":"","color":"red"});
				}
			});
		});
	</script>--}}

		/*点击按钮提交注册信息*/
$("#tjbtn").click(function(){
	var user={
		"username":$("#uname").val(),
		"password":$("#upwd").val(),
		"email":$("#email").val(),
		"phone":$("#phone").val(),
		"name":$("#userName").val()
			};
	if ($(".ok").length==6){
		$.ajax({
	   type: "POST",
	   url: "{{url('index/user/save')}}",
	   data: user,
	   success: function(msg){
	   if (msg=="1"){
	   		alert('注册成功');
		  	location.href = "{{url('index/user/login')}}";
	     }else console.error(msg); 
        }
	   });
	}else alert("亲!输入有问题");
});
	</script>
</html>