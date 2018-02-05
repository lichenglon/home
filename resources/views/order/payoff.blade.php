@if(!empty($order_id))

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
        #up-2{
            height:300px;
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
                    <dt><i class="icon-icons230"></i>&nbsp;@lang('order.my_account')</dt>
                    <dd><a href="{{url('order/orderList')}}">@lang('order.my_orders')</a></dd>
                    {{--<dd>@lang('order.my_like')</dd>
                    <dd>@lang('order.my_info')</dd>--}}
                    <dd><a href="{{ url('order/myHouse') }}">@lang('order.my_house')</a></dd>
                </dl>
                {{--<dl>--}}
                    {{--<dt><i class="icon-icons215"></i>&nbsp;@lang('order.my_wealth')</dt>--}}
                    {{--<dd>@lang('order.my_balance')</dd>--}}
                    {{--<dd>@lang('order.my_coupon')</dd>--}}
                    {{--<dd>@lang('order.my_coins')</dd>--}}
                {{--</dl>--}}
                <dl>
                    <dt><i class="icon-icons179"></i>&nbsp;@lang('order.my_profile')</dt>
                    <dd><a href="{{url('setting/account')}}">@lang('order.my_profile2')</a></dd>
                    <dd><a href="{{ url('setting/secu') }}">@lang('order.settings')</a></dd>
                </dl>
            </div>
            <div id="up-4">
                <div id="up-3">
                    <img src="{{asset('order/images/process-3.jpg')}}">
                    <h5>@lang('order.pok')</h5><br/>
                    <h5>@lang('order.review')</h5><br/>
                    <h5>@lang('order.attention')</h5><br/>
                    <h5><a href="{{url('order/orderList')}}">@lang('order.return')</a></h5>
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

@else
@endif
