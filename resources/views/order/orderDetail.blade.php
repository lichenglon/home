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
            height:630px;
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
            height: 547px;
            padding:15px;
            margin-bottom: 10px;
            border:1px solid #E0E0E0;
        }

        .info1{
            height:40px;
            border-bottom:1px solid #E0E0E0;
        }

        .detail{
            line-height:24px;
            font-family:华文细黑;
            font-size:12px;
        }

        .td1{
            width:150px;
        }

        .td2{
            width:120px;
        }

        #ord{
            height: 95px;
            border-bottom:1px solid #E0E0E0;
        }

        #house{
            height: 181px;
            border-bottom:1px solid #E0E0E0;
        }

        #renter{
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
                <div id="oorder"></div>
                <div id="up-3">
                    <div class="order-info">
                        <div class="info1">
                            <span>
                                <h4>@lang('order.order_detail')</h4>
                            </span>
                        </div>
                        {{--订单信息--}}
                        <div id="ord">
                            <table class="detail">
                                <tr>
                                    <td class="td1">@lang('order.order_numbe')</td>
                                    <td><a href="{{ url('order/orderDetail',['order_id'=>$result->id,'ac'=>'look']) }}"> {{ $result->order_no }} </a></td>
                                </tr>
                                <tr>
                                    <td>@lang('order.order_payments')</td>
                                    <td>$ {{ $result->payment_amount }}</td>
                                </tr>
                                <tr>
                                    <td class="td1">@lang('order.order_lease')</td>
                                    <td>{{ $result->rent_time }} @lang('order.order_weeks')</td>
                                </tr>
                                <tr>
                                    <td>@lang('order.order_status')</td>
                                    <td>{{ $orderStatus[$result->order_status] }}</td>
                                </tr>
                            </table>
                        </div>
                        {{--房源信息--}}
                        <div id="house" style="padding: 15px 0px">
                            <table class="detail">
                                    <div style="float:left;margin-right:15px;">
                                        <img  width="200px" height="150px" src="{{HOUSE_SERVER_PATH}}uploads/{{$house_img}}" alt="">
                                    </div>
                                <div style="float:left;">
                                    <tr>
                                        <td class="td2">@lang('order.order_house')</td>
                                        <td>{{ $result->serial_number }}</td>
                                    </tr>
                                    <tr>
                                        <td class="td2">@lang('order.order_name')</td>
                                        <td>{{ $result->house_name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="td2">@lang('order.order_location')</td>
                                        <td>{{ $result->house_location }}</td>
                                    </tr>
                                    <tr>
                                        <td class="td2">@lang('order.order_prices')</td>
                                        <td>$ {{ $result->house_price }}</td>
                                    </tr>
                                </div>
                            </table>
                        </div>
                        {{--租客信息--}}
                        <div id="renter" style="padding: 15px 0px">
                            <table class="detail">
                                <div style="float:left;margin-right:15px;">
                                    <img  width="200px" height="150px" src="{{asset('./uploads')}}/{{$renter->stu_idcard}}">
                                </div>
                                <div style="float:left;">
                                    <tr>
                                        <td class="td2">@lang('order.order_tenant')</td>
                                        <td>{{ $renter->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="td2">First Name</td>
                                        <td>{{ $renter->fname }}</td>
                                    </tr>
                                    <tr>
                                        <td class="td2">Last Name</td>
                                        <td>{{ $renter->lname }}</td>
                                    </tr>
                                    <tr>
                                        <td class="td2">@lang('order.order_tel')</td>
                                        <td>{{ $renter->tel }}</td>
                                    </tr>

                                    <tr>
                                        <td class="td2">@lang('order.university')</td>
                                        <td>{{ $renter->university }}</td>
                                    </tr>
                                    <tr>
                                        <td class="td2">@lang('order.course')</td>
                                        <td>{{ $renter->course }}</td>
                                    </tr>
                                </div>
                            </table>
                        </div>
                        <a href="{{ url('order/orderList') }}"><font  class="detail">@lang('order.order_list')</font></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

</div>
</body>
@include('public.publicHouseJs')
@include('house.listingPublic.footer')

</html>


