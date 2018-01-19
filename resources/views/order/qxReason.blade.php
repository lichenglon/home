<html>
<title></title>


<body>
<div class="box" style="padding:50px;">
{{--<div style="border: 1px solid black;padding:20px; height:400px;">--}}
<table style="position:relative">
    <form action="{{url('order/orderCancel')}}" type="post">
        <div><font style="font-size: 14px;">@lang('order.order_choose')：</font></div><br/>
        <input type="hidden" id="order_id" value="{{$order_id}}"/>
        <select name="qx_reason" id="qx_reason" style="width:150px">
            <option value="1">@lang('order.order_too')</option>
            <option value="2">@lang('order.order_like')</option>
            <option value="3">@lang('order.order_not')</option>
            <option value="4">@lang('order.order_reasons')</option>
        </select>
        <br/><br/><br/><br/><br/>
        <input id="btnClose" type="button" value="@lang('order.order_submit')" onClick="fun('{{$order_id}}')" />

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