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
                    <table class="table table-border table-bordered table-bg table-hover table-sort" style="margin-top:-30px; margin-left:400px;width:50%;">
                            <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending" style="width: 100px;">
                                    订单号
                                </th>
                                <td class="sorting_1">{{ $result->order_no }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">
                                    日期
                                </th>
                                <td>{{ date('Y-m-d H:i:s',$result->creat_time) }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 120px;">
                                    租客姓名
                                </th>
                                <td>{{ $result->name }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">
                                    身份证照片
                                </th>
                                <td>{{ $result->renter_idcard }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending"
                                    style="width: 140px;">
                                    护照照片
                                </th>
                                <td>{{ $result->renter_passport }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending" style="width: 150px;">
                                    学生证照片
                                </th>
                                <td>{{ $result->stu_idcard }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending" style="width: 322px;">
                                    房子编号
                                </th>
                                <td>{{ $result->house_no }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 120px;">
                                    房子名称
                                </th>
                                <td>{{ $result->house_name }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 120px;">
                                    房子位置
                                </th>
                                <td>{{ $result->house_location }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending"
                                    style="width: 80px;">
                                    房子价格
                                </th>
                                <td>$ {{ $result->house_price }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending" style="width: 120px;">
                                    租期
                                </th>
                                <td>{{ $result->rent_time }} 周</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending" style="width: 150px;">
                                    签约时间
                                </th>
                                <td>{{ date('Y-m-d',$result->sign_time) }}</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">
                                    签约地点
                                </th>
                                <td>@if($result->sign_position !== ''){{ $result->sign_position }}@else 等待中介确定中@endif</td>
                            </tr>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">
                                    订单状态
                                </th>
                                <td>{{ $orderStatus[$result->order_status] }}</td>
                            </tr>

                            @if($result->order_status != '7')

                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 111px;">
                                    合同
                                </th>
                                <td>{{ $result->contract }}</td>
                            </tr>

                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 111px;">
                                    评价
                                </th>
                                <td>{{ $result->house_eva }}</td>
                            </tr>

                            @endif
                            <tr role="row">
                                <td class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending" style="width: 111px;">
                                    <a href="{{ url('order/orderList') }}">返回订单列表</a>
                                </td>
                                @if($result->order_status == '7')
                                    <td>
                                    <a href="{{ url('order/qrcode',['order_id'=>$result->order_id]) }}">点击去付款</a>
                                    </td>
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




