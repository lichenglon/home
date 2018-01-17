<ul class="breadcrumb_top">
    <li><a href="#"><i class="icon-icons43"></i>@lang('index.index_dearest')</a></li>
    <li>

        @if(Session::get('userId'))
            <a href="{{url('user/data',['id'=>Session::get('userId')])}}"><i class="icon-icons215"></i>@lang('index.index_setting')</a>
        @else
            <a href="{{url('user/login')}}"><i class="icon-icons179"></i>@lang('index.index_login')</a>
    </li>
    <li>
        @endif
        @if(Session::get('userId'))
            <a href="{{url('user/drop',['id'=>Session::get('userId')])}}" onclick="if(!confirm('确定要退出吗？'))return false">@lang('index.index_drop')</a>
        @endif

        <a href="{{url('user/register')}}">@lang('index.index_register')</a>
    </li>
    <li>

        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span>@lang('index.index_Language')</span>
        </a>
        <ul class="dropdown-menu" style="margin-left:490px; margin-top:-1px;">
            <li class="user-footer">
                <div class="pull-left">
                    <a href="javascript:setLocale('zh_cn');" class="btn btn-default btn-flat">中文</a>
                </div>
                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div class="pull-right">
                    <a href="javascript:setLocale('en');" class="btn btn-default btn-flat">English</a>
                </div>
            </li>
        </ul>


    </li>
</ul>
