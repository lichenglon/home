<!DOCTYPE html>
<html lang="en">
<head>
    @include('house.listingPublic.header')
    @include('public.publicHouseCss')
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="{{asset('home')}}/css/reality-icon.css">
    <link type="text/css" rel="stylesheet" href="{{asset('order/css/orderPay.css')}}">
    <style>
        #up-4{
            height:658px;
            padding-top:10px;
        }

        #up-3{
            height:557px;
            padding:0px;
            border:0px;

        }

        #oorder{
            margin-bottom:10px;
        }

        .order-info{
            width:524px;
            height: 184px;
            padding:15px;
            margin-bottom: 10px;
            border:1px solid #E0E0E0;
        }

        .info1{
            height:40px;
            border-bottom:1px solid #E0E0E0;
        }

        .page_list{
            position:absolute;
            top:847px;
            left:710px;
        }

        .detail{
            line-height:24px;
            font-family:华文细黑;
            font-size:12px;
        }

        .td1{
            width:200px;
        }

        .td2{
            width:120px;
        }

        #house{
            height: 181px;
            border-bottom:1px solid #E0E0E0;
        }
    </style>
</head>
<body>
<div id="box">
    {{--{{ csrf_field() }}--}}
    <div id="b-up">

        <div id="up-1">
            {{--左边导航列表--}}
            <div id="up-2">
                <dl>
                    <dt><i class="icon-icons230"></i>&nbsp;@lang('order.my_account')</dt>
                    <dd><a href="{{url('order/orderList')}}">@lang('order.my_orders')</a></dd>
                    <dd>@lang('order.my_like')</dd>
                    <dd>@lang('order.my_info')</dd>
                    <dd>@lang('order.my_house')</dd>
                </dl>
                <dl>
                    <dt><i class="icon-icons215"></i>&nbsp;@lang('order.my_wealth')</dt>
                    <dd>@lang('order.my_balance')</dd>
                    <dd>@lang('order.my_coupon')</dd>
                    <dd>@lang('order.my_coins')</dd>
                </dl>
                <dl>
                    <dt><i class="icon-icons179"></i>&nbsp;@lang('order.my_profile')</dt>
                    <dd>@lang('order.my_profile2')</dd>
                    <dd>@lang('order.settings')</dd>
                </dl>
            </div>

            {{--右边信息--}}
            <div id="up-4">
                <div id="oorder"><h4>@lang('order.my_orders')</h4></div>
                <div id="up-3">
                    @if(!empty($result))
                    @foreach($result as $key => $val)


                            <div id="house" style="padding: 15px 0px">
                                <table class="detail">
                                    <div style="float:left;margin-right:15px;">
                                        <img  width="200px" height="150px" src="{{HOUSE_SERVER_PATH}}uploads/{{$result->house_img}}" alt="">
                                    </div>
                                    <div style="float:left;">
                                        <tr>
                                            <td class="td2">@lang('order.order_house')</td>
                                            <td>{{ $val->serial_number }}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">@lang('order.order_name')</td>
                                            <td>{{ $val->house_name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">@lang('order.order_location')</td>
                                            <td>{{ $val->house_location }}</td>
                                        </tr>
                                        <tr>
                                            <td class="td2">@lang('order.order_prices')</td>
                                            <td>$ {{ $val->house_price }}</td>
                                        </tr>
                                    </div>
                                </table>
                            </div>








                    {{--<div class="order-info">--}}
                        {{--<div class="info1">--}}
                            {{--<span>--}}
                                {{--@if($val->order_status == '1')--}}
                                {{--<a href="{{ url('order/pay',['order_id'=>$val->id]) }}">@lang('order.order_payment')</a>--}}
                                {{--@elseif($val->order_status == '9' && $val->qx_reason == '')--}}
                                    {{--@lang('order.order_has')--}}
                                {{--@elseif($val->order_status == '9' && $val->qx_reason != '')--}}
                                    {{--@lang('order.order_cancelled')--}}
                                {{--@elseif($val->order_status == '5')--}}
                                    {{--@lang('order.order_was')：{{$val->reject_reason}}--}}
                                {{--@else--}}
                                    {{--@foreach($order_status as $value)--}}
                                        {{--@if($val->order_status == $value->id)--}}
                                            {{--@if(Session::get('lang') == 'en'){{$value->en_order_status}}@else{{$value->order_status}}@endif--}}
                                        {{--@endif--}}
                                    {{--@endforeach--}}
                                {{--@endif--}}
                            {{--</span>--}}
                        {{--</div>--}}
                        {{--<table class="detail">--}}
                            {{--<tr>--}}
                                {{--<td class="td1">@lang('order.order_numbe')</td>--}}
                                {{--<td><a href="{{ url('order/orderDetail',['order_id'=>$val->id,'ac'=>'look']) }}"> {{ $val->order_no }} </a></td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td1">@lang('order.order_name')</td>--}}
                                {{--<td><a href="{{ url('order/orderDetail',['order_id'=>$val->id]) }}"> {{ $val->house_name }} </a></td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td1">@lang('order.order_prices')</td>--}}
                                {{--<td>$ {{ $val->house_price }}</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td1">@lang('order.order_lease')</td>--}}
                                {{--<td>{{ $val->rent_time }} @lang('order.order_weeks')</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td class="td1">--}}
                                    {{--<a href="{{ url('order/orderDetail',['order_id'=>$val->id,'ac'=>'look'])}}"><font color="#5f9ea0">@lang('order.order_view')</font></a>--}}
                                {{--</td>--}}
                                {{--<td>@if($val->order_status == '9')--}}
                                    {{--@elseif($val->order_status == '1')--}}
                                        {{--<a onclick="javascript:if(window.confirm('@lang('order.order_want')')){isCancel('{{$val->id}}')}"><font color="#5f9ea0">@lang('order.order_cancellation')</font></a>--}}
                                    {{--@else--}}
                                        {{--<a href="javascript:void(0);" onclick="qxReason('{{$val->id}}')" ><font color="#5f9ea0">@lang('order.order_cancels')</font></a>--}}
                                    {{--@endif--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--</table>--}}
                    {{--</div>--}}
                    @endforeach

                    @else
                    @endif
                    @if (!empty($result))
                        <div class="page_list">
                            {{$result->appends(Request::input())->links()}}
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>

</div>

</div>
</body>
@include('public.publicHouseJs')
@include('house.listingPublic.footer')

<script>
    function isCancel(order_id){
        $.ajax({
            url: "{{url('order/orderCancel')}}",
            data: 'order_id='+order_id,
            type: 'get',
            success: function(re){
                if(re == '1'){
                    location.reload();
                    //alert('取消订单成功');
                }else{
                    alert('取消订单失败');
                }
            }
        })
    }

    function qxReason(order_id){
        var order_id = order_id;
        window.open ("{{url('order/qxReason')}}"+'/'+order_id, 'newwindow', 'height=300, width=500, top=200,left=600, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no')
    }
</script>
</html>


