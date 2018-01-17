<div class="property-query-area clearfix">
    <div class="col-md-12">
        <h3 class="text-uppercase bottom20 top15"></h3>
    </div>
    <form class="callus" action="{{url('house/listing')}}" method="get" id="SUBMIT">
        {{csrf_field()}}
        <h2 class="text-uppercase t_white bottom20 text-center">@lang('include.include_advanced')</h2>
        <div class="single-query form-group col-sm-12">
            <input type="text" class="keyword-input" name="house_keyword" placeholder="@lang('include.include_key')">
        </div>
        <div class="single-query form-group col-sm-12">
            <div class="intro">
                <select name="state">
                    <option selected="" value="%">@lang('include.include_nation')</option>
                    @foreach($nationObject as $nationVal)
                        <option selected="" value="{{$nationVal->chinese_n_name}}">{{$nationVal->chinese_n_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="single-query form-group col-sm-12">
            <input type="text" class="keyword-input" value="" name="house_location" placeholder="@lang('include.include_address')">
        </div>
        <div class="single-query form-group col-sm-12">
            <div class="intro">
                <select name="house_type">
                    <option class="active" value="%">@lang('include.include_house')</option>
                    @foreach($houseTypeObject as $houseTypeVal)
                        <option value="{{$houseTypeVal->name}}">{{$houseTypeVal->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="col-sm-12 bottom10">
            <div class="single-query-slider">
                <label><strong>@lang('include.include_price')</strong></label>
                <div class="price text-right">
                    <span>@lang('include.include_$')</span>
                    <div class="leftLabel" id="minPriceNum"></div>
                    <input type="hidden" value="" name="hiddenPriceMin" id="hiddenPriceMin">
                    <span>@lang('include.include_to')</span>
                    <div class="rightLabel" id="maxPriceNum"></div>
                    <input type="hidden" value="" name="hiddenPriceMax" id="hiddenPriceMax">
                </div>
                <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
                    <div class="bar"></div>
                    <div class="leftGrip"></div>
                    <div class="rightGrip"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="group-button-search">
                    <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
                        <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
                        <div class="text-1">@lang('include.include_options')</div>
                        <div class="text-2 hide">@lang('include.include_less')</div>
                    </a>
                </div>
                <div class="search-propertie-filters collapse">
                    <div class="container-2">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" value="洗衣机" name="check_box[]" />
                                    <span>@lang('include.include_washing')</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" value="空调" name="check_box[]" />
                                    <span>@lang('include.include_air')</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" value="暖气" name="check_box[]" />
                                    <span>@lang('include.include_heating')</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" value="床" name="check_box[]" /><br>
                                    <span>@lang('include.include_bed')</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" value="厨房" name="check_box[]" />
                                    <span>@lang('include.include_cookhouse')</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" value="衣柜" name="check_box[]" />
                                    <span>@lang('include.include_wardrobe')</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" value="冰箱" name="check_box[]" />
                                    <span>@lang('include.include_refrigerator')</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 form-group">
            <button type="button" onclick="javascript:priceNumber();" class="btn-blue border_radius">@lang('include.include_seek')</button>
        </div>
    </form>
    {{--获取价格提交后台搜索--}}
    <script>
        function priceNumber(){
            var minPriceNum = document.getElementById('minPriceNum').innerHTML;
            var maxPriceNum = document.getElementById('maxPriceNum').innerHTML;
            var hiddenPriceMin = document.getElementById('hiddenPriceMin').value = minPriceNum;
            var hiddenPriceMax = document.getElementById('hiddenPriceMax').value = maxPriceNum;
            document.getElementById('SUBMIT').submit();
        }
    </script>
</div>