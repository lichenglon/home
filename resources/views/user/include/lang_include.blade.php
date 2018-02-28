<div class="topbar clearfix">
    <ul class="breadcrumb_top">
        <li>

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="icon-switch2"></i>
                <span>@lang('index.index_Language')</span>
            </a>
            <ul class="dropdown-menu"style="margin-left:130px;">
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="javascript:setLocale('zh_cn');" class="btn btn-default btn-flat">中文</a>
                    </div>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <div class="pull-right">
                        <a href="javascript:setLocale('en');" class="btn btn-default btn-flat">English</a>
                    </div>
                </li>
            </ul>
        </li>
        <li><a href="{{url('house/like')}}"><i class="icon-icons43"></i>@lang('index.index_dearest')</a></li>
        <li>

            @if(Session::get('userId'))
                <a href=" {{url('setting/account')}}"><i class="icon-icons215"></i>@lang('index.index_setting')</a>&nbsp; &nbsp;
            @else
                <a href="{{url('user/login')}}"><i class="icon-icons179"></i>@lang('index.index_login')</a>
        </li>
        <li>
            @endif

            @if(Session::get('userId'))
                <a href="{{url('user/drop',['id'=>Session::get('userId')])}}" onclick="if(!confirm('@lang('index.index_Are')'))return false">@lang('index.index_drop')</a>
            @endif
            &nbsp; &nbsp;
            <a href="{{url('user/register')}}">@lang('index.index_register')</a>
        </li>
        <li class="last-icon"><i class="icon-icons215"></i></li>
    </ul>

</div>
