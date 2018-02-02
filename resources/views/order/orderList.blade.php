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
            height:950px;
            padding-top:10px;
        }

        #up-2{
            height:300px;
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
            height: 274px;
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
            top:1139px;
            left:750px;
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
                    <dd>@lang('order.my_orders')</dd>
                   {{-- <dd>@lang('order.my_like')</dd>
                    <dd>@lang('order.my_info')</dd>--}}
                    <dd><a href="{{ url('order/myHouse') }}">@lang('order.my_house')</a></dd>
                </dl>
               {{-- <dl>
                    <dt><i class="icon-icons215"></i>&nbsp;@lang('order.my_wealth')</dt>
                    <dd>@lang('order.my_balance')</dd>
                    <dd>@lang('order.my_coupon')</dd>
                    <dd>@lang('order.my_coins')</dd>
                </dl>--}}
                <dl>
                    <dt><i class="icon-icons179"></i>&nbsp;@lang('order.my_profile')</dt>
                    <dd><a href="{{url('setting/account')}}">@lang('order.my_profile2')</a></dd>
                    <dd><a href="{{ url('setting/secu') }}">@lang('order.settings')</a></dd>
                </dl>
            </div>

            {{--右边信息--}}
            <div id="up-4">
                <div id="oorder"><h4>@lang('order.my_orders')</h4></div>
                <div id="up-3">
                    @if(!empty($result))
                    @foreach($result as $key => $val)
                    <div class="order-info">
                        <div class="info1">
                            <span>
                                @if($val->order_status == '1')
                                <a href="{{ url('order/pay',['order_id'=>$val->id]) }}">@lang('order.order_payment')</a>
                                @elseif($val->order_status == '9' && $val->qx_reason == '')
                                    @lang('order.order_has')
                                @elseif($val->order_status == '9' && $val->qx_reason != '')
                                    @lang('order.order_cancelled')
                                @elseif($val->order_status == '5')
                                    @lang('order.order_was')：{{$val->reject_reason}}
                                @else
                                    @foreach($order_status as $value)
                                        @if($val->order_status == $value->id)
                                            @if(Session::get('lang') == 'en'){{$value->en_order_status}}@else{{$value->order_status}}@endif
                                        @endif
                                    @endforeach
                                @endif
                            </span>

                            @if($val->order_status == '1' || $val->order_status == '8' || $val->order_status == '9')
                            <span style="position:absolute; right:460px;"><a onclick="javascript:if(window.confirm('@lang('order.order_sure')')){isDel('{{$val->id}}')}"><i class="icon-trash"></i></a></span>
                            @endif

                        </div>
                        

                            <div id="house" style="padding: 15px 0px">
                                <table class="detail">
                                    <div style="float:left;margin-right:15px;">
                                        <img  width="200px" height="150px" src="{{HOUSE_SERVER_PATH}}uploads/{{$h_img->getImageOne($val->house_id)}}" alt="">
                                    </div>
                                    <div style="float:left;">
                                        <tr>
                                            <td class="td1">@lang('order.order_numbe')</td>
                                            <td><a href="{{ url('order/orderDetail',['order_id'=>$val->id,'ac'=>'look']) }}"> {{ $val->order_no }} </a></td>
                                        </tr>
                                        <tr>
                                            <td class="td1">@lang('order.order_name')</td>
                                            <td><a href="{{ url('order/orderDetail',['order_id'=>$val->id]) }}"> {{ $val->house_name }} </a></td>
                                        </tr>
                                        <tr>
                                            <td class="td1">@lang('order.order_prices')</td>
                                            <td>$ {{ $val->house_price }}</td>
                                        </tr>
                                        <tr>
                                            <td class="td1">@lang('order.order_lease')</td>
                                            <td>{{ $val->rent_time }} @lang('order.order_weeks')</td>
                                        </tr>
                                    </div>
                                </table>
                            </div>

                            <tr>
                                <td class="td1">
                                    <a href="{{ url('order/orderDetail',['order_id'=>$val->id,'ac'=>'look'])}}"><font color="#5f9ea0">@lang('order.order_view')</font></a>
                                </td>
                                <td>@if($val->order_status == '9')
                                    @elseif($val->order_status == '1')
                                        <a onclick="javascript:if(window.confirm('@lang('order.order_want')')){isCancel('{{$val->id}}','1')}"><font color="#5f9ea0">@lang('order.order_cancellation')</font></a>
                                    @else
                                        {{--<a href="javascript:void(0);" onclick="qxReason('{{$val->id}}')" ><font color="#5f9ea0">@lang('order.order_cancels')</font></a>--}}
                                        <a href="javascript:void(0);" onclick="isCancel('{{$val->id}}','2')" ><font color="#5f9ea0">@lang('order.order_cancels')</font></a>
                                    @endif
                                </td>
                            </tr>

                    </div>

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
    function isCancel(order_id,sta){

        if(sta != '1'){
            var order_id = order_id;
            window.open ("{{url('order/qxReason')}}"+'/'+order_id, 'newwindow', 'height=300, width=500, top=200,left=600, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no')

            $.ajax({
                url: "{{url('order/orderCancel')}}",
                data: 'order_id='+order_id,
                type: 'get',
                success: function(re){
                    if(re == '1'){
                        location.href="{{url('order/orderList')}}";
                        alert('@lang('order.order_success')');
                    }else{
                        alert('取消订单失败');
                    }
                }
            })

        }else{
            $.ajax({
                url: "{{url('order/orderCancel')}}",
                data: 'order_id='+order_id,
                type: 'get',
                success: function(re){
                    if(re == '1'){
                        location.href="{{url('order/orderList')}}";
                        alert('@lang('order.order_success')');
                    }else{
                        alert('取消订单失败');
                    }
                }
            })
        }
    }

    function qxReason(order_id){
        var order_id = order_id;
        window.open ("{{url('order/qxReason')}}"+'/'+order_id, 'newwindow', 'height=300, width=500, top=200,left=600, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no')
    }


    function isDel(order_id){
        $.ajax({
            url:"{{url('order/orderDelete')}}",
            data:'order_id='+order_id,
            type:'get',
            success: function(re){
                if(re == '1'){
                    location.href="{{url('order/orderList')}}";
                    alert('@lang('order.order_success')');
                }else{
                    alert('@lang('order.order_failed')');
                }
            }
        })
    }


</script>
</html>


