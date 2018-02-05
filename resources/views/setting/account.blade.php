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
        #up-4{
            height:750px;
            padding-top:10px;
        }
        #oorder{
            margin-bottom:10px;
        }

        #profile{
            height: 600px;
            margin: 20px 0px;
            padding: 40px;
            border:1px solid #E0E0E0;
            color:#6C6C6C;
            font-size:12px;
        }

        .td1{
            width: 150px;
            line-height: 40px;
        }
        .tdd2{
            width: 252px;
            line-height: 40px;
        }
        .yesp{
            background-color: #fff;
            width: 250px;
            font-size:12px;
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
                    <dd>@lang('order.my_profile2')</dd>
                    <dd><a href="{{ url('setting/secu') }}">@lang('order.settings')</a></dd>
                </dl>
            </div>

            {{--右边信息--}}
            <div id="up-4">
                <div id="oorder"><h3>@lang('order.my_profile2')</h3></div>
                    <div id="profile">
                        <form action="" name="my_profile" method="post">
                            {{ csrf_field() }}
                            <table>
                                {{--<tr>
                                    <td class="td1">@lang('user.user_name')</td>
                                    <td class="td2"><input type="text" name="u_name" class="form-control" style="background-color: #fff;border: 0px" value="{{$result->user}}" disabled/></td>
                                </tr>--}}
                                <tr>
                                    <td class="td1">@lang('user.user_compellation')</td>
                                    <td class="td2"><input type="text" name="u_nname" class="form-control yesp" value="{{$result->uname}}"/></td>
                                </tr>
                                <tr>
                                    <td class="td1">@lang('order.sex')</td>
                                    <td class="td2">
                                        <label for="male" style="font-weight:normal">@lang('order.male')</label>
                                        <input type="radio" name="sex" value="1" id="male" @if($result->sex == '1') checked @endif />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="female" style="font-weight:normal">@lang('order.female')</label>
                                        <input type="radio" name="sex" value="2" id="female" @if($result->sex == '2') checked @endif />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">@lang('user.user_mailbox')</td>
                                    <td class="td2"><input type="text" name="u_mail" class="form-control yesp" value="{{$result->email}}"/></td>
                                </tr>
                                <tr>
                                    <td class="td1">@lang('user.user_cell')</td>
                                    <td class="td2"><input type="text" name="u_tel" class="form-control yesp" value="{{$result->phone}}"/></td>
                                </tr>
                                <tr>
                                    <td class="td1">@lang('order.university')</td>
                                    <td class="td2"><input type="text" name="u_school" class="form-control yesp" value="{{$result->school}}"/></td>
                                </tr>
                                <tr>
                                    <td class="td1">@lang('order.add')</td>
                                    <td class="td2"><input type="text" name="u_add" class="form-control yesp" value="{{$result->addr}}"/></td>
                                </tr>
                                <tr>
                                    <td class="td1">@lang('user.hobby')</td>
                                    <td class="td2"><input type="text" name="u_hobby" class="form-control yesp" value="{{$result->hobby}}"/></td>
                                </tr>
                                <tr><td class="td1">@lang('user.introduction')</td></tr>
                                <tr>
                                    <td colspan="2">
                                        <textarea name="intro" class="form-control yesp" rows="6" style="width:400px;">{{$result->intro}}</textarea>
                                    </td>
                                </tr>
                                <tr style="margin-top:10px">
                                    <td colspan="2">
                                        <button type="submit" id="btn-submit" class="btn btn-block btn-back btn-default radius"  style="margin-top:10px">@lang('user.user_update')</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
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


