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

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">房源名称：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:45%;">
                            <input type="text" class="input-text" value="{{ $result->house_name }}" name="house_name" style="border:none"/>
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">房源位置：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:45%;">
                            <input type="text" class="input-text" value="{{ $result->house_location }}" name="house_location" style="border:none" />
                        </div>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">价格：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:45%;">
                            $<input type="text" value="{{ $result->house_price }}" name="house_price" class="input-text" style="width:5%; border:none">
                        </div>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>租客姓名：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:15%;">
                            <input type="text" class="input-text" value="" placeholder="请填写租客姓名" id="order_location" name="name"/>
                        </div>
                        <span id="order_locationMsg"></span>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>租客手机号码：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:15%;">
                            <input type="text" class="input-text" value="" placeholder="请填写租客手机号码" maxlength="255" id="order_location" name="tel"/>
                        </div>
                        <span id="order_locationMsg"></span>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>租客身份证正反照：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <a href="javascript:;" class="a-upload" style="width:15%;height:30px;">
                                <input type="file" name="renter_idcard[]" id="renter_idcard" multiple="multiple"/>
                                <span>点击这里上传照片</span>
                            </a>
                            <div class="img_div"></div>

                            <div class="shade" onclick="javascript:closeShade()">
                                <div class="">
                                    <span class="text_span"></span>
                                </div>
                            </div>

                            <div class="shadeImg" onclick="javascript:closeShadeImg()">
                                <div class="">
                                    <img class="showImg" src=""/>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>租客护照：</label>
                        <div class="formControls col-xs-8 col-sm-9 form-group" id="uploadForm" enctype='multipart/form-data'>
                            <div class="">图片预览</div>
                            <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                <div class="fileinput-new thumbnail" style="width: 200px;height:auto;max-height:150px;">
                                    <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="{{asset('order/images/noimage.png')}}" alt="" />
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                <div>
                                    <span class="btn btn-primary btn-file">
                                        <span class="fileinput-new">选择文件</span>
                                        <span class="fileinput-exists">换一张</span>
                                        <input type="file" name="pic1" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                    </span>
                                        <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>租客学生证：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <a href="javascript:;" class="a-upload" style="width:15%;height:30px;">
                                <input type="file" name="stu_idcard[]" class="myFile" multiple="multiple"/>
                                <span>点击这里上传照片</span>
                            </a>
                            <div class="img_div"></div>

                            <div class="shade" onclick="javascript:closeShade()">
                                <div class="">
                                    <span class="text_span"></span>
                                </div>
                            </div>

                            <div class="shadeImg" onclick="javascript:closeShadeImg()">
                                <div class="">
                                    <img class="showImg" src=""/>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>租期：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:45%;">
                            <input type="text" name="rent_time" id="rent_time" placeholder="" value=""  min="1" class="input-text" style="width:10%;"> 周
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>签约时间：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:15%;">
                            <input type="text" name="sign_time" id="sign_time" class="input-text Wdate"/>
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>备注：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="width:45%;">
                            <textarea name="order_remark" class="input-text" style="width:30%; height:300%;"></textarea>
                        </div>
                    </div>
                    <div class="row cl">
                        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                            <button class="btn btn-primary radius" type="submit" id="verification">下一步</button>
                            <a href="javascript:window.history.go(-1);"><button class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button></a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>






<footer class="padding_top footer2">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel bottom30">
                    <a href="#." class="logo bottom30"><img src="{{asset('home')}}/images/logo-white.png" alt="logo"></a>
                    <p class="bottom15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                        tempor cum consectetuer
                        adipiscing.
                    </p>
                    <p class="bottom15">If you are interested in castle do not wait and <a href="#.">BUY IT NOW!</a></p>
                    <ul class="social_share">
                        <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
                        <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
                        <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
                        <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#." class="vimo"><i class="icon-vimeo3"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel bottom30">
                    <h4 class="bottom30">Search by Area</h4>
                    <ul class="area_search">
                        <li><a href="#."><i class="icon-icons74"></i>Bayonne, New Jersey</a></li>
                        <li class="active"><a href="#."><i class="icon-icons74"></i>Greenville, New Jersey</a></li>
                        <li><a href="#."> <i class="icon-icons74"></i>The Heights, New Jersey</a></li>
                        <li><a href="#."><i class="icon-icons74"></i>West Side, New York</a></li>
                        <li><a href="#."><i class="icon-icons74"></i>Upper East Side, New York</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel bottom30">
                    <h4 class="bottom30">Latest News</h4>
                    <div class="media">
                        <a class="media-object"><img src="{{asset('home')}}/images/footer-news1.png" alt="news"></a>
                        <div class="media-body">
                            <a href="#.">Nearest mall in high tech Goes your villa</a>
                            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
                        </div>
                    </div>
                    <div class="media">
                        <a class="media-object"><img src="{{asset('home')}}/images/footer-news1.png" alt="news"></a>
                        <div class="media-body">
                            <a href="#.">Nearest mall in high tech Goes your villa</a>
                            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
                        </div>
                    </div>
                    <div class="media">
                        <a class="media-object"><img src="{{asset('home')}}/images/footer-news1.png" alt="news"></a>
                        <div class="media-body">
                            <a href="#.">Nearest mall in high tech Goes your villa</a>
                            <span><i class="icon-clock4"></i>Feb 22, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="footer_panel bottom30">
                    <h4 class="bottom30">Get in Touch</h4>
                    <ul class="getin_touch">
                        <li><i class="icon-telephone114"></i>01 900 234 567 - 68</li>
                        <li><a href="#."><i class="icon-icons142"></i>info@castle.com</a></li>
                        <li><a href="#."><i class="icon-browser2"></i>www.castle.com</a></li>
                        <li><i class="icon-icons74"></i>Castle Melbourne, Merrick Way,FL 12345 australia</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
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

