<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Sweety House</title>
    <link rel="stylesheet" type="text/css" href="{{asset('order/css/H-ui.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('order/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('order/css/bootstrap-fileinput.css')}}">

    @include('public.publicHouseCss')
</head>
<body>

<!--Header-->
{{--头部--}}
@include('house.listingPublic.header')

    <div class="box" style="height:700px">
        <div class="box-body">
            <div class="Hui-article">
                <article class="cl pd-20">
                    <div class="mt-20">
                        <table class="table table-border table-bordered table-bg table-hover table-sort" style="margin:0px">
                            <thead>
                            <tr class="text-c" id="theader">
                                <th width="20%">订单号</th>
                                <th width="10%">时间</th>
                                <th width="20%">房子名称</th>
                                <th width="5%">房子价格</th>
                                <th width="5%">租期</th>
                                <th width="10%">订单状态</th>
                                <th width="30%" colspan="3">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($result as $key => $val)
                                <tr>
                                    <td style="width:20%;"><a href="{{ url('order/orderDetail',['order_id'=>$val->order_id]) }}"> {{ $val->order_no }} </a></td>
                                    <td style="width:10%;">{{ date('Y-m-d H:i:s',$val->creat_time) }}</td>
                                    <td style="width:20%;"><a href="{{ url('order/orderDetail',['order_id'=>$val->order_id]) }}"> {{ $val->house_name }} </a></td>
                                    <td style="width:5%;">{{ $val->house_price }}</td>
                                    <td style="width:5%;">{{ $val->rent_time }} 周</td>
                                    <td style="width:10%;">
                                        @if($val->order_status == '7')
                                            <a href="{{ url('order/qrcode',['order_id'=>$val->order_id]) }}">去付款</a>
                                        @else
                                            <a href="{{ url('order/orderDetail',['order_id'=>$val->order_id]) }}">{{ $orderStatus[$val->order_status] }}</a>
                                        @endif
                                    </td>
                                    <td style="width:10%;"><a href="{{ url('order/orderDetail',['order_id'=>$val->order_id]) }}">查看订单</a></td>
                                    <td style="width:10%;"><a href="{{url('order/orderModify',['order_id'=>$val->order_id])}}">修改订单</a></td>
                                    <td style="width:10%;"><a href="{{ url('order/orderDelete',['order_id'=>$val->order_id]) }}">取消订单</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </article>
            </div>
        </div>
    </div>


<!--CopyRight-->
<div class="copyright index2">
    <div class="copyright_inner">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://www.17sucai.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
                </div>
                <div class="col-md-5 text-right">
                    <p>Designed by <a href="#.">Brighthemes</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

{{--引入公共js文件--}}
@include('public.publicHouseJs')
</body>


</html>