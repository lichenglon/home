
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>京东支付-请选择支付方式</title>
    <link rel="icon" href="//sp.jd.com/payment/2.0.0/css/i/ico.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//sp.jd.com/payment/2.0.0/css/main.css">
    <link rel="stylesheet" type="text/css" href="//sp.jd.com/payment/1.2.0/css/bankList.css">

    <script type="text/javascript" src="//sp.jd.com/payment/2.0.0/js/lib/jquery-1.6.4-min.js"></script>
    <script type="text/javascript" src="//sp.jd.com/payment/2.0.0/js/lib/base.js"></script>
    <script type="text/javascript" src="//sp.jd.com/payment/2.0.0/js/lib/avalon.min.js"></script>
    <script type="text/javascript" src="//sp.jd.com/payment/2.0.0/js/lib/lodash.min.js"></script>
    <script type="text/javascript" src="//sp.jd.com/payment/2.0.0/js/common.js"></script>
    <style>#no-ie{display:block;}</style>
</head>
<body :controller="vmPayment" class="main-payment">
<div class="shortcut">
    <div class="w">
        <a class="s-logo" href="//www.jd.com" target="_blank" psa="PCashier_jd">
            <img width="170" height="28" alt="京东 收银台" src="//storage.360buyimg.com/payment-assets/logo/2.0.0/jd-logo.png">
        </a>
        <ul class="s-right">
            <li id="loginbar" class="s-item fore1"></li>
            <li class="s-div">|</li>
            <li class="s-item fore2" psa="PCashier_myOrder">
                <a class="op-i-ext" href="//order.jd.com/center/list.action" target="_blank">我的订单</a>
            </li>
            <li class="s-div">|</li>
            <li class="s-item fore3" psa="PCashier_help">
                <a class="op-i-ext" target="_blank" href="//help.jd.com/user/issue/list-173-224.html" target="_blank">支付帮助</a>
            </li>
        </ul>
        <span class="clr"></span>
    </div>
</div>
<div class="main main-bg">
    <div class="w">
        <div class="order clearfix order-init" :class="@orderInitType">
            <div class="o-qrcode o-qrcode-enhance"><a class="oq-img" href="javascript:;">
                    <img src="//pcashier.jd.com/image/getQrCodeImage?qrCodeSign=be15dd96292d8cb965033e20a46c52d5a232ae3afea3e1d43d1f1da0ca1bd9dc" alt=""><i></i>
                </a>
            </div>
            <!-- 订单信息 -->
            <div class="o-left"><h3 class="o-title">订单提交成功，请尽快付款！订单号：70810862393</h3>

                <p class="o-tips">
                            <span class="o-tips-qrcode">
                推荐使用<a href="//app.jd.com" class="o-tips-app-jd" title="手机京东App" target="_blank" psa="PCashier_jdapp"></a><a href="//m.jr.jd.com/helppage/downApp/jrAppPromote.html" class="o-tips-app-jdjr" title="京东金融App" target="_blank"  psa="PCashier_jrapp"></a>扫码支付
                </span>
                    <span class="o-tips-div">|</span>
                    <span class="o-tips-time" id="deleteOrderTip"></span>

                </p>
            </div>
            <!-- 订单信息 end --><!-- 订单金额 -->
            <div class="o-right">
                <div class="o-price"><em>应付金额</em><strong>6499.00</strong><em>元</em></div>
                <div class="o-detail"><a onclick="payOrder.toggleDetail(this);" href="javascript:;">订单详情<i></i></a></div>
            </div>
            <!-- 订单金额 end -->
            <div class="o-list j_orderList" id="listPayOrderInfo"><!-- 单笔订单 -->

                <!-- 多笔订单 end -->
            </div>
        </div>
        <script type="text/javascript">
            var payOrder = {
                toggleDetail: function (ele) {
                    var $orderList = $('.j_orderList');
                    if (!$(ele).hasClass('opened')) {
                        //查询订单信息
                        $.ajax({
                            url: "/async/getOrderInfo?paySign=" + globalVar.paySign,
                            type: "get",
                            dataType: "html",
                            error: function () {
                                $("#listPayOrderInfo").html("");
                            },
                            success: function (data) {
                                $("#listPayOrderInfo").html(data);
                                $orderList.slideDown(300);
                                $(ele).addClass('opened').html('收起详情<i></i>');
                            }
                        });
                    } else {
                        $orderList.slideUp(300);
                        $(ele).removeClass('opened').html('订单详情<i></i>');
                    }

                }
            };

            function queryOrderBankState(){
                if(count > 10){
                    clearInterval(qrTimer);
                }
                count++;
                $.ajax({
                    type: "GET",
                    url: "//pa.jd.com/payment/queryOrderStatus",
                    data: {"paySign":globalVar.paySign},
                    dataType: "jsonp",
                    timeout: 2000,
                    success: function(result) {
                        if(result.state==1){
                            //直接跳到成功页
                            window.location.href = globalVar.successURL;
                        }
                    }
                });
            }

            var count = 0, qrTimer = null;
            var qrcodeImageURL = "//pcashier.jd.com/image/getQrCodeImage?qrCodeSign=be15dd96292d8cb965033e20a46c52d5a232ae3afea3e1d43d1f1da0ca1bd9dc";

            setTimeout(function () {
                if (qrcodeImageURL) {
                    qrTimer = setInterval(queryOrderBankState, 5000);
                }
            }, 10000);

        </script>                            <div class="payment pay-load">
            <!--京东支付图标-->
            <div class="jp-logo-wrap">
                <span class="jp-logo"></span>
            </div>
            <!--京东支付图标 end-->
            <!--收银台公告-->
            <div class="jp-notice" style="background:none;">
                <div class="jp-tips" ms-html="@jdPayTip"></div>
            </div>
            <!--收银台公告 end-->
            <!-- 收银台加载loading -->
            <div class="pay-loading" :effect="{is:'animate', action:'leave', onLeaveDone: @afterLoading}"></div>

            <div id="payChanel" class="pay-channel" :if="@isNewUser == 0" :effect="{is:'animate', action:'enter'}"></div>

            <!-- paybox 添加新卡网银支付 -->
            <div class="paybox-newcard" :if="@isNewUser == 0" :effect="{is:'animate', action:'enter'}">
                <a class="pn-more" :click="@more" href="javascript:;" :visible="@isShowMore" psa="PCashier_home_moreway">更多付款方式<i></i></a>
                <a class="pn-new" :click="@showNewCardWangyin(0)" href="javascript:;" psa="PCashier_home_newcodeorwy">添加新卡&nbsp;/&nbsp;网银支付<i></i></a>
            </div>
            <!-- paybox 添加新卡网银支付 end -->


            <!-- pay-verify 支付验证提交 type-credit type-credit-verify-code -->
            <div class="pay-verify" :if="@isNewUser == 0" :effect="{is:'animate', action:'enter'}">
                <div class="pv-line" :if="@isCVV2">
                    <input class="ui-input pv-input-cv2" id="pv-input-cvv2" type="text" placeholder="信用卡背后3位验证码" maxlength="3" autocomplete="off" :duplex="@cvv2">
                </div>

                <div class="pv-line pv-line-password" :if="@pwdLevel==1">
                    <xmp ms-widget="{is:'ms-longPassword', $id:'unit_longPassword'}"></xmp>
                    <span class="font-red ml10"></span>
                    <a href="//safe.jd.com/user/paymentpassword/getBackPassword.action" class="ml230" target="_blank" psa="PCashier_home_forgetpassword">忘记支付密码？</a>
                </div>

                <div class="pv-line pv-line-shortPwd" :if="@pwdLevel==2">
                    <div class="pl-s-title">请输入6位数字支付密码</div>
                    <!-- 需要错误提示 添加 ui-input-error -->
                    <xmp ms-widget="{is:'ms-shortPassword', $id:'unit_shortPassword'}"></xmp>
                    <a href="//safe.jd.com/user/paymentpassword/getBackPassword.action" class="ml10" target="_blank" psa="PCashier_home_forgetpassword">忘记支付密码？</a>
                </div>

                <!-- 支付信息提示 -->
                <div class="pv-msg" :if="@pwdLevel==4">
                    <!-- <strong class="font-red">您还差17900.00元，请选择其他支付组合方式。</strong> -->
                    <strong class="pv-msg-success"><i class="ui-icon ui-icon-success mr5"></i>您的支付密码已经校验通过，请放心支付！</strong>
                </div>
                <!-- 支付信息提示 end -->

                <!-- 支付加载 -->
                <div class="pv-button" :visible="@payLoading">
                    <input class="ui-button ui-button-XL ui-button-XL-loading" type="submit" value="加载中">
                </div>

                <div class="pv-button" :visible="!@payLoading">
                    <a :class="['ui-button ui-button-XL', @paymentFlag ? '' : 'disable']" class="ui-button ui-button-XL" :click="@commitPay" psa="PCashier_home_ljzf">立即支付</a>
                    <span class="font-red ml10" :html="@errorInfo"></span>
                </div>
                <!-- <div class="pv-line">
                    <a class="pv-agreement" href="">《京东快捷支付相关协议》</a>
                </div> -->
            </div>
            <!-- pay-verify 支付验证提交 end -->

            <!-- 新用户引导 old -->
            <div class="pay-newUser" :if="@isNewUser == 1" :effect="{is:'animate', action:'enter'}">
                <div class="pn-promotion" :if="newUserMarketDesc">首次使用新卡支付<span class="font-red" :html="@newUserMarketDesc"></span></div>
                <div class="pn-content">
                    <div class="pn-c-button">
                        <a class="ui-button ui-button-XL" :click="@showNewCardWangyin(0)" psa="PCashier_home_newuser_newcard"><i>+</i>&nbsp;&nbsp;&nbsp;&nbsp;使用新卡支付</a>
                    </div>
                    <div class="pn-c-ext">
                        您还可以&nbsp;<a class="pn-c-text" :click="@showNewCardWangyin(1)" psa="PCashier_home_newuser_wy">网银支付</a>

                    </div>
                </div>
            </div>
            <!-- 新用户引导 old end -->

            <!-- 新用户引导 new 营销 -->
            <div :if="@isNewUser == 2" :effect="{is:'animate', action:'enter'}">
                <xmp ms-widget="{is:'ms-area-newUser', $id:'vmNewUser', data:@data}"></xmp>
            </div>
            <!-- 新用户引导 new 营销 end -->

        </div>
        <div class="payment payment-new mt25 hide" id="payMallPlatVm">
            <div class="payment-change">
                <div class="pc-wrap clearfix" :effect="{is:'animate', action:'enter'}">
                    <div class="pc-w-left" ms-for="($index, el) in @agencyChannelList">
                        <span ms-if="$index !== 0">|</span>
                        <div class="pay-wrap">
                            <a ms-if="@el.channelId =='weixin' && @el.canUse" :click="@weixinConfirm($index)" style="cursor:pointer" psa="PCashier_wxzf">
                                <i class="wechat-pay icon"><img src="//storage.360buyimg.com/payment-assets/sdk/bank/PAY-WEIXIN.png" ></i> {{el.channelName}}
                            </a>

                            <a ms-if="@el.channelId =='unionpay' && @el.canUse" :click="@platConfirm($index)" style="cursor:pointer" psa="PCashier_zgyl">
                                <i class="visa-pay icon"><img src="//storage.360buyimg.com/payment-assets/sdk/bank/PAY-UNION.png"></i>
                                {{el.channelName}}
                                <i class="item-tips" ms-if="@el.marketingInfo">优惠</i>
                                <i class="item-tips-content" ms-if="@el.marketingInfo" ms-text="{{@el.marketingInfo}}"></i>
                            </a>

                            <a ms-if="@el.channelId =='yufuka'  && @el.canUse" ms-attr="{href:@el.directURL,target:'_blank',psa:'PCashier_yfkzf'}" ms-text="@el.channelName" style="cursor:pointer"></a>

                            <a ms-if="@el.channelId =='globalSale' && @el.canUse" ms-attr="{href:@el.directURL,psa:'PCashier_gjk'}" style="cursor:pointer">
                                <i class="global-pay icon"><img src="//storage.360buyimg.com/payment-assets/sdk/bank/PAY-GUOJIKA.png"></i>{{el.channelName}}
                            </a>


                            <a  ms-if="@el.channelId =='JNDBANK' && @el.canUse" :click="@platConfirm($index)" ms-text="@el.channelName" style="cursor:pointer"></a>

                            <a ms-if="@el.channelId =='ZRDF'  && @el.canUse" ms-attr="{href:@el.directURL,target:'_blank',psa:'PCashier_zrdf'}" style="cursor:pointer">
                                <i class="daifu-pay icon"><img src="//storage.360buyimg.com/payment-assets/sdk/bank/PAY-DAIFU.png"></i>{{el.channelName}}
                            </a>

                            <a class="badatong" ms-if="@el.channelId =='BADATONG' && @el.canUse" :click="@platConfirm($index)">
                                <i class="badatong-pay icon"><img src="//storage.360buyimg.com/payment-assets/sdk/bank/PAY-BADATONG.png" alt="八达通支付"></i>{{el.channelName}}
                            </a>
                            <div class="badatong-unfold" ms-if="@el.channelId =='BADATONG' && @el.canUse && @el.badatongInfo">
                                <div class="iner">
                                    <p>參考支付：HKD <b class="fs15">{{@el.badatongInfo.amount}}</b> </p>
                                    <p>參考匯率：1港幣={{@el.badatongInfo.rate}}人民幣元</p>
                                    <p class="tip">* 京東實時更新匯率，最終付款金額 以八逹通頁面的顯示為準 </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div id="payPlats"></div>
    </div>
</div>

<form action="/payment/platConfirm" name="paymentConfirm" id="paymentConfirm" method="post" target="_blank" style="display:none">
    <input type="hidden" name="bankPayRequestStr" id="bankPayRequest" value='' autocomplete="off"/>
</form>

<div id="modals"></div>

<script type="text/javascript" src="/misc/release/main.js"></script>
<!-- 收银台 footer -->
<div class="p-footer">
    <div class="pf-wrap w">
        <div class="pf-line">
            <span class="pf-l-copyright">Copyright &copy; 2004-2018  京东JD.com 版权所有</span>
            <img width="185" height="20" src="//sp.jd.com/payment/2.0.0/css/i/footer-auth.png"/>
            <span class="ml40">由网银在线（北京）科技有限公司提供技术支持</span>
        </div>
    </div>
</div>        <script type="text/javascript">
    (function () {
        var e = document.createElement('script');
        e.type = 'text/javascript';
        e.async = true;
        e.src = ('https:' == document.location.protocol ? 'https://cscssl' : 'http://csc') + '.jd.com/wl.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(e, s);
    })();
</script>

<!-- 搜索统计 -->
<script type="text/javascript">
    function getQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]);
        return 0;
    }
    jQuery.getScript('https://sstat.jd.com/scslog?args=2^' + getQueryString('suc_orderid') + '^' + getQueryString('suc_sku'));
</script>
<!-- 搜索统计 -->

<!-- Google Tag Manager -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-T947SH"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager -->



<script src="//payrisk.jd.com/js/tdpay.js"></script>

<script language="javaScript">
    try {
        globalVar.riskInfo = {};
        getJdEid(function (eid, fp, risk) {
            globalVar.riskInfo.deviceId = eid;
            globalVar.riskInfo.fingerprint = fp;
            globalVar.riskInfo.jsContent = risk.jsContent;
        });
    } catch (e) {

    }
</script></body>

</html>