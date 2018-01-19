<html>
<title></title>


<body>
<div class="box" style="padding:50px;">
{{--<div style="border: 1px solid black;padding:20px; height:400px;">--}}
<table style="position:relative">
    <form action="{{url('order/orderCancel')}}" type="post">
        <div><font style="font-size: 14px;">请选择取消原因：</font></div><br/>
        <input type="hidden" id="order_id" value="{{$order_id}}"/>
        <select name="qx_reason" id="qx_reason" style="width:150px">
            <option value="1">审核时间太长</option>
            <option value="2">不喜欢这套房子了</option>
            <option value="3">房子不合适</option>
            <option value="4">其他原因</option>
        </select>
        <br/><br/><br/><br/><br/>
        <input id="btnClose" type="button" value="提交" onClick="fun('{{$order_id}}')" />

    </form>
</table>
</div>
{{--</div>--}}
</body>
@include('public.publicHouseJs')
<script language="javascript">
    function fun(order_id){

        var qx = document.getElementById('qx_reason').value;

        $.ajax({
            url: "{{url('order/orderCancel')}}",
            data: 'order_id='+order_id+"&qx_reason="+qx,
            type: 'get',
            success:function(){
                window.close();
            }
        })
    }
</script>
</html>