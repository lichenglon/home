@if(!empty($order_id))

<!DOCTYPE html>
<html lang="en">
<head>
    @include('house.listingPublic.header')
    @include('public.publicHouseCss')
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/reality-icon.css">
    <style type="text/css">
        body{
            background-color:#F0F0F0;
        }

        #box{
            width:1180px;
            height:1155px;
            margin:5px auto;
            background-color:#F0F0F0;
        }

        #b-up{
            width:1180px;
            height:500px;
            margin:5px auto;
            padding:0px 100px;
            background-color:#F0F0F0;
        }

        #up-1{
            width:1080px;
            height:128px;
            padding-bottom:30px
        }

        #up-2{
            width:170px;
            height:395px;
            padding: 50px 34px;
            margin:50px 34px;
            float:left;
            border:1px solid #FFF;
            background-color:#FFF;
            font-family:华文细黑;
            font-size:14px;
            color:#666666;
        }

        dd{
            font-family:华文细黑;
            font-size:11px;
            color:#666666;
        }

        #up-4{
            width:628px;
            height:595px;
            padding: 0px 0px;
            margin:50px 50px 50px 0px;
            float:left;
            border: 1px solid #FFF;
            background-color:#FFF;
            color:#666666;
        }

    </style>
</head>
<body>
<div id="box">
    {{--{{ csrf_field() }}--}}
    <div id="b-up">

        <div id="up-1">
            <div id="up-2">
                <dl>
                    <dt><i class="iconfont"></i>个人中心</dt>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;我的订单</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;我的收藏</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;消息中心</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;我的房源</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;我的公寓申请</dd>
                </dl>
                <dl>
                    <dt><i class="icon-IcoMoon"></i>我的财富</dt>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;我的余额</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;我的卡券</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;我的金币</dd>
                </dl>
                <dl>
                    <dt><i class="icon-IcoMoon"></i>账户管理</dt>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;个人资料</dd>
                    <dd>&nbsp;&nbsp;&nbsp;&nbsp;安全设置</dd>
                </dl>
            </div>
            <div id="up-4">
                <h5>支付成功~</h5><br/>
                <h5>我们将在72小时内对您的订单进行审核，并回复。请您留意~</h5><br/>
                <h5><a href="{{url('order/orderList')}}">返回订单列表</a></h5>
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
