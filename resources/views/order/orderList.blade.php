<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta http-equiv="refresh" content="1">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('order/css/H-ui.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('order/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('order/css/bootstrap-fileinput.css')}}">

    @include('public.publicHouseCss')
</head>
<body>

<!--Header-->
{{--头部--}}
@include('house.listingPublic.header')
    <div class="box"  style="height:548px">
        <div class="box-body" style="width:1500px">
            <div class="Hui-article" style="height:450px">
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
                                <tr class="text-c">
                                    <td style="width:20%;"><a href="{{ url('order/orderDetail',['order_id'=>$val->order_id,'ac'=>'look']) }}"> {{ $val->order_no }} </a></td>
                                    <td style="width:10%;">{{ date('Y-m-d H:i:s',$val->creat_time) }}</td>
                                    <td style="width:20%;"><a href="{{ url('order/orderDetail',['order_id'=>$val->order_id]) }}"> {{ $val->house_name }} </a></td>
                                    <td style="width:5%;">{{ $val->house_price }}</td>
                                    <td style="width:5%;">{{ $val->rent_time }} 周</td>
                                    <td style="width:10%;">
                                        @if($val->order_status == '1')
                                            <a href="{{ url('order/qrcode',['order_id'=>$val->order_id]) }}">去付款</a>
                                        @elseif($val->order_status == '9' && $val->qx_reason == '')
                                            订单已自动取消
                                        @elseif($val->order_status == '9' && $val->qx_reason != '')
                                            订单已取消
                                        @elseif($val->order_status == '5')
                                            订单驳回，驳回原因：{{$val->reject_reason}}
                                        @else
                                            {{ $orderStatus[$val->order_status] }}
                                        @endif
                                    </td>
                                    <td style="width:10%;"><a href="{{ url('order/orderDetail',['order_id'=>$val->order_id,'ac'=>'look'])}}">查看订单</a></td>
                                    {{--<td style="width:10%;"><a href="{{url('order/orderModify',['order_id'=>$val->order_id])}}">修改订单</a></td>--}}
                                    <td style="width:10%;">
                                    @if($val->order_status == '9')
                                    @else
                                        {{--<a onclick="javascript:if(window.confirm('确定要取消订单吗？')){isCancel('{{$val->order_id}}')}">取消订单</a>--}}
                                            <a href="javascript:void(0);" onclick="qxReason('{{$val->order_id}}')" >取消订单</a>
                                    @endif
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </article>
            </div>
            @if (!empty($result))
                <div class="page_list" style="margin-left:20px;">
                    {{$result->appends(Request::input())->links()}}
                    <div style="display:inline-block; margin-bottom:25px;">
                        {{--<span class="r">@lang('house_translate.Common_data')：<strong>{{$total}}</strong> @lang('house_translate.strip')</span>--}}
                    </div>
                </div>
            @endif
        </div>
    </div>


<!--CopyRight-->
<div class="copyright index2">
    <div class="copyright_inner">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <p>Copyright &copy; LEMON TEA<a target="_blank" href="http://www.17sucai.com/"></a></p>

                </div>
            </article>
        </div>
        @if (!empty($result))
            <div class="page_list" style="margin-left:20px;">
                {{$result->appends(Request::input())->links()}}
                <div style="display:inline-block; margin-bottom:25px;">
                    {{--<span class="r">@lang('house_translate.Common_data')：<strong>{{$total}}</strong> @lang('house_translate.strip')</span>--}}
                </div>
            </div>
        @endif
    </div>
</div>



{{--引入公共js文件--}}
@include('house.listingPublic.footer')

{{--引入公共js文件--}}
@include('public.publicHouseJs')
</body>

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