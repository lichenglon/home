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
    <style type="text/css">

        .shade {
            position: absolute;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.55);
        }

        .shade div {
            width: 300px;
            height: 200px;
            line-height: 200px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -100px;
            margin-left: -150px;
            background: white;
            border-radius: 5px;
            text-align: center;
        }

        .a-upload {
            padding: 4px 10px;
            height: 20px;
            line-height: 20px;
            position: relative;
            cursor: pointer;
            color: #888;
            background: #fafafa;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
            display: inline-block;
            *display: inline;
            *zoom: 1
        }

        .a-upload input {
            position: absolute;
            font-size: 100px;
            right: 0;
            top: 0;
            opacity: 0;
            filter: alpha(opacity=0);
            cursor: pointer
        }

        .a-upload:hover {
            color: #444;
            background: #eee;
            border-color: #ccc;
            text-decoration: none
        }
        .img_div{min-height: 100px; min-width: 100px;}
        .isImg{width: 120px; height: 120px; position: relative; float: left; margin-left: 10px;}
        .removeBtn{position: absolute; top: 0; right: 0; z-index: 11; border: 0px; border-radius: 50px; background: red; width: 22px; height: 22px; color: white;}
        .shadeImg{position: absolute;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 15;
            text-align: center;
            background: rgba(0, 0, 0, 0.55);}
        .showImg{width: 400px; height: 500px; margin-top: 140px;}
    </style>
</head>
<body>


<!--Loader-->
{{--程序载人动画效果--}}
@include('public.publicLoaderCartoon')
<!--Loader-->



<!--Header-->
{{--头部--}}
@include('house.listingPublic.header')
<!--Header Ends-->



<div class="box">
        <div class="box-body" style="padding-left: 400px; padding-bottom: 60px;">


            <div class="page-container">
                <form action="{{url('order/orderSave')}}" method="post" id="SUBMIT" class="form form-horizontal" id="form-article-add" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <input type="hidden" name="house_no" value="{{ $result->serial_number }}"/>
                    <input type="hidden" name="house_id" value="{{ $result->msgid }}"/>
                    {{--<input type="hidden" name="house_name" value="{{ $result->house_name }}" />
                    <input type="hidden" name="house_location" value="{{ $result->house_location }}"/>
                    <input type="hidden" name="house_price" value="{{ $result->house_price }}"/>--}}


                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">@lang('order.order_name')：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:45%;">
                            <input type="text" class="input-text" value="{{ $result->house_name }}" disabled style="border:none;  background:none"/>
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">@lang('order.order_location')：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:45%;">
                            <input type="text" class="input-text" value="{{ $result->house_location }}" disabled style="border:none; background:none" />
                        </div>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">@lang('order.order_price')：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:45%;">
                            $<input type="text" value="{{ $result->house_price }}" class="input-text"  disabled style="width:15%; border:none; background:none"/>
                        </div>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>@lang('order.order_tenant')：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:15%;">
                            <input type="text" class="input-text" value="" placeholder="@lang('order.order_tenant')" id="order_location" name="name"/>
                        </div>
                        <span id="order_locationMsg"></span>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>@lang('order.order_number')：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:15%;">
                            <input type="text" class="input-text" value="" placeholder="@lang('order.order_number')" maxlength="255" id="order_location" name="tel"/>
                        </div>
                        <span id="order_locationMsg"></span>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>@lang('order.order_card')：</label>
                        <div class="formControls col-xs-8 col-sm-9 form-group" id="uploadForm" enctype='multipart/form-data'>
                            <div class="">@lang('order.order_front')</div>
                            <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                <div class="fileinput-new thumbnail" style="width: 200px;height:auto;max-height:150px;">
                                    <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="{{asset('order/images/noimage.png')}}" alt="" />
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                <div>
                                    <span class="btn btn-primary btn-file">
                                        <span class="fileinput-new">@lang('order.order_photos')</span>
                                        <span class="fileinput-exists">@lang('order.order_one')</span>
                                        <input type="file" name="pic1" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                    </span>
                                    {{--<a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>--}}
                                </div>
                            </div>

                            <div class="">@lang('order.order_reverse')</div>
                            <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                <div class="fileinput-new thumbnail" style="width: 200px;height:auto;max-height:150px;">
                                    <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="{{asset('order/images/noimage.png')}}" alt="" />
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                <div>
                                    <span class="btn btn-primary btn-file">
                                        <span class="fileinput-new">@lang('order.order_photos')</span>
                                        <span class="fileinput-exists">@lang('order.order_one')</span>
                                        <input type="file" name="pic11" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                    </span>
                                    {{--<a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>@lang('order.order_passport')：</label>
                        <div class="formControls col-xs-8 col-sm-9 form-group" id="uploadForm" enctype='multipart/form-data'>
                            <div class="">@lang('order.order_picture')</div>
                            <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                <div class="fileinput-new thumbnail" style="width: 200px;height:auto;max-height:150px;">
                                    <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="{{asset('order/images/noimage.png')}}" alt="" />
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                <div>
                                    <span class="btn btn-primary btn-file">
                                        <span class="fileinput-new">@lang('order.order_photos')</span>
                                        <span class="fileinput-exists">@lang('order.order_one')</span>
                                        <input type="file" name="pic2" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                    </span>
                                        {{--<a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>@lang('order.order_id')：</label>
                        <div class="formControls col-xs-8 col-sm-9 form-group" id="uploadForm" enctype='multipart/form-data'>
                            <div class="">@lang('order.order_photo')</div>
                            <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                <div class="fileinput-new thumbnail" style="width: 200px;height:auto;max-height:150px;">
                                    <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="{{asset('order/images/noimage.png')}}" alt="" />
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                <div>
                                    <span class="btn btn-primary btn-file">
                                        <span class="fileinput-new">@lang('order.order_photos')</span>
                                        <span class="fileinput-exists">@lang('order.order_one')</span>
                                        <input type="file" name="pic3" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                    </span>
                                    {{--<a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>@lang('order.order_lease')：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:45%;">
                            <input type="text" name="rent_time" id="rent_time" placeholder="" value=""  min="1" class="input-text" style="width:10%;"> @lang('order.order_weeks')
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>@lang('order.order_time')：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:15%;">
                            <input type="text" name="sign_time" id="sign_time" class="input-text Wdate"/>
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>@lang('order.order_note')：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:45%;">
                            <textarea name="order_remark" class="input-text" style="width:30%; height:300%;"></textarea>
                        </div>
                    </div>
                    <div class="row cl">
                        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                            <button class="btn btn-primary radius" type="submit" id="verification">@lang('order.order_step')</button>
                            <a href="javascript:window.history.go(-1);"><button class="btn btn-default radius" type="button">&nbsp;&nbsp;@lang('order.order_cancel')&nbsp;&nbsp;</button></a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>




{{--引入公共js文件--}}
@include('house.listingPublic.footer')

{{--引入公共js文件--}}
@include('public.publicHouseJs')

</body>
<script src="{{asset('order/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('order/laydate/laydate.js')}}"></script>
<script type="text/javascript" src="{{asset('order/js/bootstrap-fileinput.js')}}"></script>

<script>
    //常规用法 日期
    laydate.render({
        elem: '#sign_time'
    });
</script>
<script type="text/javascript">
    $(function () {
        //租客护照
        $('#uploadSubmit').click(function () {
            var data = new FormData($('#uploadForm')[0]);
            $.ajax({
                url: 'xxx/xxx',
                type: 'POST',
                data: data,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    if(data.status){
                        console.log('upload success');
                    }else{
                        console.log(data.message);
                    }
                },
                error: function (data) {
                    console.log(data.status);
                }
            });
        });
    })
</script>


</html>

