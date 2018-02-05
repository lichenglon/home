<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
	<link rel="stylesheet" href="{{asset('home/user/css_style/enter.css')}}">
</head>
<body>
<style>
	body{
		margin:0;
	}
	video{
		position:fixed;
		right:0;
		bottom:0;
		min-width:100%;
		min-height:100%;
		width:auto;
		height:auto;
		z-index:-9999;
		/*-webkit-filter:grayscale(100%)*/
	}
</style>
<header>
	<a href="#" class="logo"></a>
	<div class="desc" style="color:red">@lang('user.user_register')</div>
</header>
<video autoplay muted loop style="width:100%;" id="v1">
	<source src="{{ url('mp4/v1.mp4') }}">
</video>

	<form action="{{url('user/save')}}" method="post">
		<div class="register-box">
			<label for="username" class="username_label ">@lang('user.user_user')</label>
			<input maxlength="20" type="text" name="uname" id="uname"  placeholder="@lang('user.user_your')"/>
			<div id="unameMsg" style="width:200px ;height: 15px;" >

			</div>
		</div>
		<div class="register-box">
			<label for="username" class="other_label">@lang('user.user_set')</label>
			<input maxlength="20" type="password" name="upwd" id="upwd" placeholder="@lang('user.user_Please')"/>
			<div id="upwdMsg"  style="width:200px ;height: 15px;">

			</div>
		</div>
		<div class="register-box">
			<label for="username" class="other_label">@lang('user.user_confirm')</label>
			<input maxlength="20" type="password" id="upwds" placeholder="@lang('user.user_again')"/>
			<div id="upwdsMsg" style="width:300px ;height: 15px;" >

			</div>
		</div>
		<div class="register-box">
			<label for="username" class="other_label">@lang('user.user_phone')</label>
			<input class="phone" maxlength="20" type="text" id="phone" name="phone" style="margin-right:112px" placeholder="@lang('user.user_recommended')"/>
			<div id="phoneMsg" style="width:300px ;height: 15px;" >

			</div>
		</div>

		<div class="register-box">
			<label for="username" class="other_label">@lang('user.user_e-mail')</label>
			<input maxlength="20" type="text" id="email" name="email" placeholder="@lang('user.user_address')"/>
			<div id="emailMsg" style="width:300px ;height: 15px;" >

			</div>
		</div>

		<div class="register-box">
			<label for="username" class="other_label">@lang('user.user_Real')</label>
			<input maxlength="20" type="text" id="userName" name="user" placeholder="@lang('user.user_reals')"/>
			<div id="userNameMsg" style="width:200px ;height: 15px;" >

			</div>
		</div>

		<div class="submit_btn">
			<input type="hidden" id="_token" name="_token"  value="{{csrf_token()}}"/>
			<input type="submit" id="submit_btn" class="refer" value="@lang('user.user_immediately')">
		</div>
	</form>

</body>



<script>
	var video= document.getElementById('v1');
	video.playbackRate = 0.5;
</script>
<script src="{{asset('home/user/js/jquery-1.11.3.js')}}"></script>
<script type="text/javascript">
	$("input[name=uname]").blur(function(){
		var username = document.getElementById('uname').value;
		var token = document.getElementById('_token').value;
		$.post("{{url('user/save')}}",{"username":username,"_token" : token},function(zhi){
			if(zhi == 1){      //已经被注册
				$("#unameMsg").html("@lang('user.user_been')");
				$(".refer").attr("type","button");
			}else{
				$("#unameMsg").html("@lang('user.user_can')");
				$(".refer").attr("type","submit");
			}
		});
	});

</script>
<script>
	var video= document.getElementById('v1');
	video.playbackRate = 0.5;

</script>
<script>
	var	$uname=$("#uname"),
			$unameMsg=$("#unameMsg"),
			$upwds=$("#upwds"),
			$upwdsMsg=$("#upwdsMsg"),
			$upwd=$("#upwd"),
			$upwdMsg=$("#upwdMsg"),
			$email=$("#email"),
			$emailMsg=$("#emailMsg"),
			$phone=$("#phone"),
			$phoneMsg=$("#phoneMsg"),
			$userName=$("#userName"),
			$userNameMsg=$("#userNameMsg");
	/*获取焦点事件和按住事件*/
	function onfocus(inputId,divId,divMsg){
		inputId.focus(function(){
			divId.html(divMsg).removeClass().addClass("asd").css("color","red");
		});
		inputId.keyup(function(){
			divId.html(divMsg);
		});
	}
	/*鼠标失去焦点验证格式*/
	function onblurr(inputId,spanId,zhengZe){
		inputId.blur(function(){
			var val=inputId.val().search(zhengZe);
			if (inputId.val()!=""){
				if (val!= -1){
					spanId.html("").removeClass().addClass("ok").css("color","red");
				}else{
					spanId.html("@lang('user.user_format')")
							.removeClass().addClass("err").css("color","red");
					$(".refer").attr("type","button");

				}
			}else{
				spanId.html("@lang('user.user_mandatory')").removeClass().addClass("err").css("color","red");
				$(".refer").attr("type","button");
			}
		})
	}
	/**/
	onblurr($uname,$unameMsg,/^[\u4e00-\u9fa5\w]{2,16}$/);
	onfocus($uname,$unameMsg,"@lang('user.user_username')");
	onblurr($upwd,$upwdMsg,/^[a-zA-Z0-9_-]{4,16}$/);
	onfocus($upwd,$upwdMsg,"@lang('user.user_Please')");
	onfocus($upwds,$upwdsMsg);
	onblurr($email,$emailMsg,
			/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/);
	onfocus($email,$emailMsg,"@lang('user.user_correct')");
	onblurr($phone,$phoneMsg,
			/^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0,5-9]))\d{8}$/);
	onfocus($phone,$phoneMsg,"@lang('user.user_mobiles')");
	onblurr($userName,$userNameMsg,/^[\u4e00-\u9fa5]{1,16}$/);
	onfocus($userName,$userNameMsg,"@lang('user.user_real')",
			/^[\u4e00-\u9fa5]{1,16}$/);
	/*验证两次密码是否一致*/
	$upwds.blur(function(){
		if ($upwds.val()==""){
			$upwdsMsg.html("@lang('user.user_cannot')")
					.removeClass().addClass("err").css("color","red");
		}else if ($upwds.val()==$("#upwd").val()){
			$upwdsMsg.html("@lang('user.user_pass')")
					.removeClass().addClass("ok").css("color","red");
		}else{
			$upwdsMsg.html("@lang('user.user_are')")
					.removeClass().addClass("err");
			$(".refer").attr("type","button");
		}
	});



</script>

</html>