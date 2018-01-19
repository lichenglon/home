<!DOCTYPE html>
<html>
<head>
    <title>个人中心</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="{{asset('home/user/css_style/enter.css')}}">
</head>

<body>

<div>
    <div>
        <form action="{{url('user/renewal')}}" method="post">

            <table>
                <th>@lang('user.user_personal')</th>
                <tr>
                    <td>@lang('user.user_name')：</td>
                    <td><input type="text" name="uname"  id="uname" placeholder="{{$arr->uname}}"></td>
                    <td><span id="unameMsg" class="ok"></span></td>
                </tr>
                <tr>
                    <td>@lang('user.user_mailbox')：</td>
                    <td><input type="text" name="email" id="email" placeholder=" {{$arr->email}}"></td>
                    <td><span id="emailMsg"></span></td>
                </tr>
                <tr>
                    <td>@lang('user.user_cell')：</td>
                    <td><input type="text" name="phone" id="phone" placeholder="{{$arr->phone}}"></td>
                    <td><span id="phoneMsg"></span></td>
                </tr>
                <tr>
                    <td>@lang('user.user_compellation')：</td>
                    <td><input type="text" name="user" id="userName" placeholder="{{$arr->user}}"></td>
                    <td><span  id="userNameMsg"></span></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2">
                        {{csrf_field()}}
                        <input type="hidden"  name="id" value="{{$arr->id}}">
                        <input type="submit" value="@lang('user.user_update')" id="tjbtn">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
<script src="{{asset('home/user/js/jquery-1.11.3.js')}}"></script>
<script src="{{asset('home/user/js/enters.js')}}"></script>

<script type="text/javascript">
    /*鼠标失去焦点验证用户名是否重复*/
    $('#uname').blur(function(){
        var username = $('#uname').val();
        $.ajax({
            type: "POST",
            url: "{{url('index/user/check')}}",
            data: "username="+ username,
            success: function(msg){
                if (msg != "1"){
                    $unameMsg.html("用户名可用")
                            .removeClass().addClass("ok");
                }else
                    $unameMsg.html("用户名重复").removeClass()
                            .addClass("err");

            }
        });
    });
    //console.log($("#unameMsg").hasClass("ok"));

    /*点击按钮提交注册信息*/
    $("#tjbtn").click(function(){
        var user={
            "username":$("#uname").val(),
            "password":$("#upwd").val(),
            "email":$("#email").val(),
            "phone":$("#phone").val(),
            "name":$("#userName").val()
        };
        if ($(".ok").length==6){
            $.ajax({
                type: "POST",
                url: "{{url('index/user/save')}}",
                data: user,
                success: function(msg){
                    if (msg=="1"){
                        alert('注册成功');
                        location.href = "{{url('index/user/login')}}";
                    }else console.error(msg);
                }
            });
        }
    });
</script>
@include('user.include.ajax_include')
</html>