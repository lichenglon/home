<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

<div class="box" >
    <div class="box-body">
        <div class="Hui-article">
            <article class="cl pd-20">
                <div class="mt-20">
                    <table class="table table-border table-bordered table-bg table-hover table-sort" style="margin-top:-30px; margin-left:400px;width:50%;">
                            <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending" style="width: 100px;">
                                    @lang('order.order_numbe')
                                </th>
                                <td class="sorting_1">{{ $result->order_no }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">
                                    @lang('order.order_date')
                                </th>
                                <td>{{ date('Y-m-d H:i:s',$result->creat_time) }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 120px;">
                                    @lang('order.order_tenant')
                                </th>
                                <td>{{ $result->name }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">
                                    @lang('order.order_identity')
                                </th>
                                <td>
                                    @if($result->renter_idcard1 != '')
                                        <div class="fileinput-new thumbnail" style="width: 200px;height:auto;max-height:150px;margin-bottom:2px">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="{{asset('./uploads')}}/{{$result->renter_idcard1}}" alt="" />
                                        </div>
                                    @endif
                                    @if($result->renter_idcard2 != '')
                                        <div class="fileinput-new thumbnail" style="width: 200px;height:auto;max-height:150px;margin-bottom:2px;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="{{asset('./uploads')}}/{{$result->renter_idcard2}}" alt="" />
                                        </div>
                                    @endif
                                </td>

                            </tr>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending"
                                    style="width: 140px;">
                                    @lang('order.order_passports')
                                </th>
                                <td>
                                    @if($result->renter_passport != '')
                                        <div class="fileinput-new thumbnail" style="width: 200px;height:auto;max-height:150px;margin-bottom:2px">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="{{asset('./uploads')}}/{{$result->renter_passport}}" alt="" />
                                        </div>
                                    @endif
                                </td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending" style="width: 150px;">
                                    @lang('order.order_photo')
                                </th>
                                <td>
                                    @if($result->stu_idcard != '')
                                        <div class="fileinput-new thumbnail" style="width: 200px;height:auto;max-height:150px;margin-bottom:2px">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="{{asset('./uploads')}}/{{$result->stu_idcard}}" alt="" />
                                        </div>
                                    @endif
                                </td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending" style="width: 322px;">
                                    @lang('order.order_house')
                                </th>
                                <td>{{ $result->serial_number }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 120px;">
                                    @lang('order.order_name')
                                </th>
                                <td>{{ $result->house_name }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 120px;">
                                    @lang('order.order_location')
                                </th>
                                <td>{{ $result->house_location }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending"
                                    style="width: 80px;">
                                    @lang('order.order_prices')
                                </th>
                                <td>@lang('order.order_money') {{ $result->house_price }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending" style="width: 120px;">
                                    @lang('order.order_lease')
                                </th>
                                <td>{{ $result->rent_time }} @lang('order.order_weeks')</td>
                            </tr>
                            @if($result->order_status != '1')
                            @elseif($result->order_status == '9' && $result->qx_reason != '')
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending"
                                    style="width: 80px;">
                                    @lang('order.order_pattern')
                                </th>
                                <td>{{ $result->payment_type }}</td>
                            </tr><tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending"
                                    style="width: 80px;">
                                    @lang('order.order_payments')
                                </th>
                                <td>
                                    @if($result->payment_amount != '')$ {{ $result->payment_amount }}@endif
                                </td>
                            </tr>
                            </tr><tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending"
                                    style="width: 80px;">
                                    @lang('order.order_currency')
                                </th>
                                <td>
                                    @if($result->payment_currency_code != '')$ {{ $result->payment_currency_code }}@endif
                                </td>
                            </tr>
                            </tr><tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending"
                                    style="width: 80px;">
                                    @lang('order.order_goods')
                                </th>
                                <td>
                                    @if($result->payment_currency_rate != ''){{ $result->payment_currency_rate }} %@endif
                                </td>
                            </tr>


                            @elseif($result->order_status != '2')
                            @elseif($result->order_status != '5')
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending" style="width: 150px;">
                                    @lang('order.order_time')
                                </th>
                                <td>{{ date('Y-m-d',$result->sign_time) }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">
                                    @lang('order.order_site')
                                </th>
                                <td>@if($result->sign_position !== ''){{ $result->sign_position }}@else @lang('order.order_be')@endif</td>
                            </tr>
                            @if($result->order_status != '7')
                                @lang('order.order_contract')
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 111px;">

                                </th>
                                <td>{{ $result->contract }}</td>
                            </tr>

                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 111px;">
                                    @lang('order.order_evaluation')
                                </th>
                                <td>{{ $result->house_eva }}</td>
                            </tr>
                            @endif
                            @endif
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">
                                    @lang('order.order_status')
                                </th>
                                <td>{{ $orderStatus[$result->order_status] }}</td>
                            </tr>
                            @if($result->order_status == 5)
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">
                                        @lang('order.order_dismiss')
                                    </th>
                                    <td>{{ $result->reject_reason}}</td>
                                </tr>
                            @endif

                            <tr role="row">
                                <td class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 111px;">
                                    <a href="{{ url('order/orderList') }}">@lang('order.order_list')</a>
                                </td>
                                @if($result->order_status == '1')
                                    <td>
                                    <a href="{{ url('order/qrcode',['order_id'=>$result->order_id]) }}">@lang('order.order_pay')</a>
                                    </td>
                                @elseif($result->order_status == '9')
                                    <td><a onclick="javascript:if(window.confirm('@lang('order.order_sure')')){isDel('{{$result->order_id}}')}">@lang('order.order_delete')</a></td>
                                @endif
                            </tr>
                            </thead>
                    </table>
                </div>
            </article>
        </div>
    </div>
</div>


            </div>
        </div>
        <!-- /.box-body -->
    </div>

<!--CopyRight-->

{{--引入公共js文件--}}
@include('house.listingPublic.footer')

{{--引入公共js文件--}}
@include('public.publicHouseJs')
</body>
<script>
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




