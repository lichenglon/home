
<!DOCTYPE html>
<html>

@include('house.listingPublic.header')
@include('public.publicHouseCss')

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link type="text/css" rel="stylesheet" href="{{asset('order/css/order2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('order/css/H-ui.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('order/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('order/css/bootstrap-fileinput.css')}}">
    <script type="text/javascript" src="{{asset('order/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('order/laydate/laydate.js')}}"></script>
    <script type="text/javascript" src="{{asset('order/js/bootstrap-fileinput.js')}}"></script>
</head>
<body>
<div class="container" id="main-container"  style="margin-top:10px">
    <div class="row">
        <!--Left-->
        <div class="col-xs-9">
            <form id="form" name="myForm" method="post" action="" enctype="multipart/form-data" onsubmit="javascript:return isCheck()" >
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-file-text"></i> 预订表单</div>
                    <div class="panel-body" style="background:#f5f5f5">
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>姓名 * （中文）</label>{{--@lang('order.order_tenant')--}}
                                <input type="text" name="name" class="form-control" placeholder="例：王小明" required>
                            </div>

                            <div class="form-group col-xs-6">
                                <label>性别</label><br/>
                                <label class="checkbox-inline i-checks" style="padding-left:0">
                                    <input type="radio" value="1" name="gender" required> 男 </label>

                                <label class="checkbox-inline i-checks">
                                    <input type="radio" value="2" name="gender" required checked> 女 </label>
                            </div>

                            <div class="clearfix"></div>

                            <div class="form-group col-xs-6">
                                <label>First Name * （英文/拼音）</label>
                                <input type="text" name="fname" class="form-control" placeholder="例：XIAOMING" required>
                            </div>

                            <div class="form-group col-xs-6">
                                <label>Last Name * （英文/拼音）</label>
                                <input type="text" name="lname" class="form-control" placeholder="例：WANG" required>
                            </div>

                            <div class="form-group col-xs-6">
                                <label>开始时间 *</label>
                                <input type="text" name="stime" id="stime" class="form-control date" placeholder="" value="" required>
                            </div>

                            <div class="form-group col-xs-6">
                                <label>租期</label>
                                <input type="text" name="rent_time" id="rent_time" class="form-control" placeholder="" value="" required style="width:100px;"/><span style="position: absolute; top:35px; left:120px;">周</span>
                            </div>

                            <div class="form-group col-xs-6">
                                <label>电子邮箱 *</label>
                                <input type="email" placeholder="" name="email" class="form-control" required>
                            </div>

                            <div class="form-group col-xs-6">
                                <label>电话 *</label>
                                <input type="tel" name="tel" class="form-control" required>
                            </div>

                            <div class="form-group col-xs-6">
                                <label>微信</label>
                                <input type="text" name="wechat" class="form-control">
                            </div>

                            <div class="form-group col-xs-6">
                                <label>QQ</label>
                                <input type="text" name="qq" class="form-control">
                            </div>

                            <!--学生公寓相关-->
                            <div class="form-group col-xs-6">
                                <label>学校 *</label>
                                <input type="text" name="university" class="form-control">
                            </div>

                            <div class="form-group col-xs-6">
                                <label>专业 *</label>
                                <input type="text" name="course" class="form-control">
                            </div>

                            <div class="form-group col-xs-6">
                                <label>生日 *</label>
                                <input type="text" name="dob" id="dob" class="form-control date" placeholder="" required>
                            </div>

                            <div class="form-group col-xs-6">
                                <label>国籍 *</label>
                                <input type="text" name="nationality" class="form-control" required >
                            </div>

                            <div class="form-group col-xs-6">
                                <label>地址 *</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>

                            <div class="form-group col-xs-6">
                                <label>邮编 *</label>
                                <input type="text" name="postcode" class="form-control" required>
                            </div>

                            <div class="form-group col-xs-6">
                                <label>紧急联系人姓名 *</label>
                                <input type="text" name="r_name" class="form-control" required>
                            </div>

                            <div class="form-group col-xs-6">
                                <label>与紧急联系的人关系 *</label>
                                <input type="text" name="relationship" placeholder="亲人/朋友/师生/恋人" class="form-control" required>
                            </div>

                            <div class="form-group col-xs-6">
                                <label>紧急联系人电话  *</label>
                                <input type="text" name="r_tel" class="form-control" required>
                            </div>

                            <div class="form-group col-xs-6">
                                <label>签约时间 *</label>
                                <input type="text" name="sign_time" id="sign_time" class="form-control date" placeholder="" required>
                            </div>

                            <!--学生公寓相关 结束-->

                            <div class="form-group col-xs-6">
                                <label>身份证 *</label>
                                <div class="" id="uploadForm" enctype='multipart/form-data'>
                                    <div class="">正面照</div>
                                    <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 200px;height:auto;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="{{asset('order/images/noimage.png')}}" alt="" />
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">点击上传</span>
                                                <span class="fileinput-exists">换一张</span>
                                                <input type="file" name="pic1" id="picID" accept="image/gif,image/jpeg,image/x-png" required="required"/>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group col-xs-6">
                                <label>&nbsp;&nbsp;&nbsp;</label>
                                <div class="" id="uploadForm" enctype='multipart/form-data'>
                                    <div class="">反面照</div>
                                    <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 200px;height:auto;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="{{asset('order/images/noimage.png')}}" alt="" />
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">点击上传</span>
                                                <span class="fileinput-exists">换一张</span>
                                                <input type="file" name="pic11" id="picID" accept="image/gif,image/jpeg,image/x-png" required="required"/>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-xs-6">
                                <label>护照 *</label>
                                <div class="" id="uploadForm" enctype='multipart/form-data'>
                                    <div class=""></div>
                                    <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 200px;height:auto;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="{{asset('order/images/noimage.png')}}" alt="" />
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">点击上传</span>
                                                <span class="fileinput-exists">换一张</span>
                                                <input type="file" name="pic2" id="picID" accept="image/gif,image/jpeg,image/x-png" required="required"/>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-xs-6">
                                <label>学生证 *</label>
                                <div class="" id="uploadForm" enctype='multipart/form-data'>
                                    <div class=""></div>
                                    <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 200px;height:auto;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="{{asset('order/images/noimage.png')}}" alt="" />
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">点击上传</span>
                                                <span class="fileinput-exists">换一张</span>
                                                <input type="file" name="pic3" id="picID" accept="image/gif,image/jpeg,image/x-png" required="required"/>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-xs-12">
                                <label>要求备注（如入住时间提前，楼层要求等）和个人情况备注（如特殊健康状况等）</label>
                                <textarea name="order_remark" class="form-control" rows="4"></textarea>
                            </div>


                            <div class="form-group col-xs-12">
                                <label>
                                    <input type="checkbox" required aria-required="true" name="agreement" checked> 已阅读并接受荔枝租房网 的<a href="javascript:(0)" target="_blank" style="text-decoration:underline">服务条款</a>
                                </label>
                            </div>


                            <div class="form-group col-xs-12">
                                <button type="submit" id="btn-submit" class="btn btn-block btn-back btn-default radius">提交预订</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{--订金和房源编号--}}
                <input type="hidden" name="payment_amount" value="{{$payment_amount}}" />
                <input type="hidden" name="house_no" value="{{$result->serial_number}}" />
                <input type="hidden" name="house_id" value="{{$result->msgid}}" />
            </form>
        </div>

        <!--Right-->
        <div class="col-xs-3">
            <div class="panel panel-default">
                <div class="panel-heading panel-yellow"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 房源信息</div>
                <div class="panel-body">
                    <p>城市： {{$result->state}} {{$result->province}} {{$result->city}}</p>
                    <p>房源： {{$result->house_name}}</p>
                    <p>地址： {{$result->house_location}}
                    <p>房型： {{$house_structure}}</p>
                    <p>价格： £ {{$result->house_price}} /周</p>
                    <p>订金： @if(!empty($payment_amount)) ¥ {{$payment_amount}} @else @endif</p>

                </div>
            </div>
        </div><!--Right End-->
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">


        </div>
    </div>
</div>
</body>
{{--引入js文件--}}
@include('public.publicHouseJs')
<script>
    //常规用法 日期
    laydate.render({elem: '#stime'});
    laydate.render({elem: '#dob'});
    laydate.render({elem: '#sign_time'});

    function isCheck(){
        if(myForm.submit){
            //([\u4e00-\u9fa5]{2,7})中文

           /* if(!(/^[A-Za-z][A-Za-z\s]*[A-Za-z]$/.test(myForm.name.value))){
                alert('@lang('order.order_enter')');
                //if(!(/^[A-Za-z][A-Za-z\s]*[A-Za-z]$/.test(myForm.name.value))){
                if(!(/^[\u4E00-\u9FA5]{2,4}$/.test(myForm.name.value))){
                    alert('Please enter the correct name');
                    return false;
                }else if(!(/^1[3|4|5|7|8][0-9]\d{4,8}$/.test(myForm.tel.value))){
                    //alert("请输入正确的手机号码");
                    alert("@lang('order.order_phone')");
                    return false;
                }else if(!(/^\+?[1-9][0-9]*$/.test(myForm.rent_time.value))){
                    //alert("请输入正确的租期");
                    alert("@lang('order.order_correct')");
                    return false;
                }else{*/
                    myForm.action = "{{url('order/orderSave')}}";
                /*}*/
            /*}*/
        }
    }

</script>
{{--引入底部--}}
@include('house.listingPublic.footer')
</html>
