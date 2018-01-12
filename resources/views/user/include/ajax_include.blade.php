<script>
    function setLocale(lang){

        $.ajax({
            url:"{{url('/')}}",
            data:'lang='+lang,
            type:'get',
            success:function () {
                location.reload();
            }
        })
    }
</script>