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

        #secu{
            height: 600px;
            margin: 20px 0px;
            padding:40px;
            border:1px solid #E0E0E0;
            color:#6C6C6C;
            font-size:12px;
        }

        #pwd{
            height:259px;
            margin-bottom:50px;
            padding:10px 40px;
            border:1px solid #E0E0E0;
        }


        #log_t{
            font-family:华文细黑;
            font-size:12px;
            line-height:20px;
        }

        .ip{
            width:121px;
            border:1px solid #E0E0E0;
        }

        .addr{
            width:192px;
            border:1px solid #E0E0E0;
        }

        .time{
            width:130px;
            border:1px solid #E0E0E0;
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
                    <dd><a href="{{url('setting/account')}}">@lang('order.my_profile2')</a></dd>
                    <dd>@lang('order.settings')</dd>
                </dl>
            </div>

            {{--右边信息--}}
            <div id="up-4">
                <div id="oorder"><h3>@lang('order.my_profile2')</h3></div>
                <div id="secu">
                    <div id="pwd">
                        <form action="" name="my_profile" method="post" onsubmit=" return isSub()">
                            {{ csrf_field() }}
                            <div style="height:45px; margin-bottom:20px;font-family:华文细黑;font-size:12px;">
                                <b>@lang('passwords.reset_pwd')</b><br/>
                                @lang('passwords.p_tips')
                            </div>
                            <table id="pwd_t">
                                <tbody>
                                <tr>
                                    <td>@lang('passwords.new_p')</td>
                                    <td style="width:15px;"></td>
                                    <td>
                                        <input type="password" name="pwd1" id="pwd1" onblur="javascript:void(0);isPwd(this.value);" class="form-control yesp" value="" required/>
                                    </td>
                                </tr>
                                <tr style="height:25px;">
                                    <td id="p1_tip" style="font-family:华文细黑; color:#66afe9;" colspan="2"></td>
                                </tr>
                                <tr>
                                    <td>@lang('passwords.new_pc')</td>
                                    <td style="width:15px;"></td>
                                    <td>
                                        <input type="password"  id="pwd2" onblur="javascript:void(0);iscPwd(this.value);" class="form-control yesp" value="" required colspan="2">
                                    </td>
                                </tr>
                                <tr style="height:25px">
                                    <td id="p2_tip" style="font-family:华文细黑; color:#66afe9;"></td>
                                </tr>
                                <tr><td></td><td></td>
                                    <td align="center"><button type="submit" id="btn-submit" class="btn btn-block btn-back btn-default radius" style="width:100px; position:relative; top:21px;">@lang('passwords.save')</button></td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div id="log">

                        <table id="log_t">
                            <thead>
                                <tr><td>登录历史</td></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ng-binding ip" style="border-right:0px;" align="center">IP</td>
                                    <td class="ng-binding addr" style="border-left:0px; border-right:0px;" align="center">位置</td>
                                    <td class="ng-binding time" style="border-left:0px;" align="center">时间</td>
                                </tr>
                                @foreach($log as $v)
                                    <tr>
                                        <td class="ng-binding ip"  align="center">{{$v->login_ip}}</td>
                                        <td class="ng-binding addr"  align="center">{{$v->login_add}}</td>
                                        <td class="ng-binding time"  align="center">{{date('Y-m-d H:i:s',$v->login_time)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
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
<script>
    function isPwd(str){
        var str = str;
        var len = str.length;
        if(len < 6){
            document.getElementById("p1_tip").innerHTML = "@lang('passwords.tip1')";
        }else{
            document.getElementById("p1_tip").innerHTML = "";
        }
    }

    function iscPwd(str){
        var str = str;
        var str1 = document.getElementById("pwd1").value;
        if(str != str1){
            document.getElementById("p2_tip").innerHTML = "@lang('passwords.tip3')";
        }else{
            document.getElementById("p2_tip").innerHTML = "";
        }
    }

    function isSub(){
        var str1 = document.getElementById("pwd1").value;
        var str2 = document.getElementById("pwd2").value;
        var len1 = str1.length;
        if(my_profile.submit){
            if((len1 > 5) && (str2 == str1)){
                return true;
            }else{
                alert("@lang('passwords.tip4')");
                return false;
            }
        }
    }
</script>

</html>


