@if(!empty($result))


<!DOCTYPE html>
<html lang="en">
<head>
	@include('house.listingPublic.header')
	@include('public.publicHouseCss')
	<meta charset="UTF-8">
	<title>Title</title>

	<style type="text/css">
		body{
			background-color:#F0F0F0;
		}

		#box{
			width:1180px;
			height:1155px;
			margin:10px auto;
		}

		#b-up{
			width:1180px;
			height:310px;
			margin:10px auto;
			padding:50px;
			background-color:#FFF
		}

		#up-1{
			width:1080px;
			height:128px;
			border-bottom:1px dashed #F0F0F0;
			padding-bottom:30px
		}

		#up-3{
			width:128px;
		}

		#up-4{
			position:absolute;
			left:350px;
			top:280px;
			font-family:华文细黑;
			font-size:14px;
		}

		#up-2{
			width:1080px;
			height:82px;
		}

		#up-5{
			position:absolute;
			left:350px;
			top:400px;
			font-family:华文细黑;
			font-size:14px;
		}

		#b-down{
			width:1180px;
			height:735px;
			margin:20px auto;
			padding:50px;
			background-color:#FFF;
		}

		#down-1{
			width:1080px;
			height:635px;
		}

		#down-2{
			width:1080px;
			height:564px;
			padding:0 0 30px 110px;
		}

		#down-4{
			width:970px;
			height:534px;
			padding:0 0 30px 33px;
			border-bottom:1px solid #F0F0F0
		}

		#down-3{
			width:1080px;
			height:100px;
			padding:30px 0 0px 110px;
		}

		#down-5{
			width:970px;
			height:70px;
			padding:30px 0 0px 110px;
		}

		.radio-demo{
			font-size: 50px;
			background-color:#fff;
		}

		#paybutton{
			width:200px;
			position:absolute;
			top:1150px;
			left:250px;
			background-color:#fff;
			border:1px solid #000;
		}


	</style>
</head>
<body>
<div id="box">
	{{ csrf_field() }}
	<div id="b-up">
		<div id="up-1">
			<div id="up-3">
				<img src="{{asset('order/images/01.png')}}" alt="">
			</div>
			<div id="up-4">
				<h3>订单提交成功, 请尽快支付噢~</h3><br/>
				订单号：{{$result->order_no}}<br/>
				{{$result->house_name}} / {{date('Y-m-d',$result->stime)}} / {{$result->rent_time}}
			</div>
		</div>
		<div id="up-2">
			<div id="up-5">
				房租：<font color="#FF5151"><b>￥ {{$result->house_price}}</b></font><br/>
				订金：<font color="#FF5151"><b>￥ {{$result->payment_amount}}</b></font>
			</div>
		</div>
	</div>

	<div id="b-down" style="">
		<div id="down-1">
			<div id="down-2">
				<div id="down-4">
					<h4>人民币支付</h4>
					<ul class="radio-demo">
						<li><input type="radio" class="radio-demo"><img src="{{asset('order/images/masta.jpg')}}" alt="" style="position:absolute;top:620px;"></li>
						<li><input type="radio" class="radio-demo"><img src="{{asset('order/images/zfb.png')}}" alt="" style="position:absolute;top:690px;"></li>
						<li><input type="radio" class="radio-demo"><img src="{{asset('order/images/wp.png')}}" alt="" style="position:absolute;top:760px;"></li>
						<li><input type="radio" class="radio-demo"><img src="{{asset('order/images/op.png')}}" alt="" style="position:absolute;top:830px;"></li>
						<li><input type="radio" class="radio-demo"><img src="{{asset('order/images/ye.png')}}" alt="" style="position:absolute;top:900px;"></li>
					</ul>
					<br/>
					<h4>外币支付</h4><br/>
					<ul>
						<li>
							<input type="radio" class="radio-demo"><img src="{{asset('order/images/pp.png')}}" alt="" style="position:absolute;top:1000px;">
						</li>
					</ul>
				</div>
			</div>
			<div id="down-3">
				<div  id="down-5">
					<a href="{{url('order/payoff',['order_id'=>$result->id])}}"><input type="button" id="paybutton" value="立即支付"/></a>
				</div>
			</div>
		</div>
	</div>

</div>
</body>
@include('public.publicHouseJs')
@include('house.listingPublic.footer')

</html>
@else
@endif