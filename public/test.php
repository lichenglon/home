<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta http-equiv="Cache-Control" content="no-transform" /> 
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <title>【深圳房产网,深圳二手房】房价,新房,租房,买房-深圳Q房网</title>
<meta name="description" content="深圳Q房网是深圳规模最大的房地产信息网,每日更新海量深圳楼盘信息,提供全新的深圳二手房、新房、小区、租房、写字楼等房产信息,查找深圳房源信息尽在深圳Q房网."/>
<meta name="keywords" content="深圳房产网,深圳房价,深圳二手房,深圳买房,深圳新房,深圳租房" />
  <script>var CWRUMLICENCE = 'J45Engw88Ner03Dg/So6Mnp1qe26Hnz1';</script>
  <script src="https://seagull.toushibao.com/rum/EndUserAgentPreload.js?qv=1516188622932"></script>
  <title>Q房网首页</title>
  <link type="text/css" rel="stylesheet" href="/themes/default/styles/frontend/common/v2.4/qfang-basic.css?qv=1516188622932" />
  <link type="text/css" rel="stylesheet" href="/themes/default/styles/frontend/index/v2.4/qfang-index.css?qv=1516188622932" />
  <link type="text/css" rel="stylesheet" href="/themes/default/styles/frontend/details/qfang-im.css?qv=1516188622932" />
  <link rel="shortcut icon" href="/themes/default/images/favicon.ico" />
  <link rel="alternate" media="only screen and(max-width: 640px)" href="http://m.qfang.com/shenzhen" >
  <meta name="mobile-agent" content="format=xhtml; url=http://m.qfang.com/shenzhen">
</head>

<body>
<!--头部公共文件 begin-->

<!--首页-->

<!--二手房-->

<!--新房-->

<!--学区房-->

<!--租房-->

<!--查房价-->
<!--地铁查房价-->

<!--写字楼-->

<!--房产问答-->

<!--新资讯-->

<!--特许加盟-->

<!--经纪人-->

<!--特惠团购-->


<!--掌上Q房-->

<!--趋势图显示地-->

<!--业主委托-->


<!--地铁找房-->

<script type="text/javascript">

(function(){
	var nowTime = '1516247144952';
	var time = '1516247144820';
	var response_time = nowTime-time;
    var xhr = null;
    if(window.XMLHttpRequest){
        xhr = new XMLHttpRequest();
    } else {
        xhr = new ActiveXObject('Microsoft.XMLHTTP')
    }
    
    var data = 'referer='+document.referrer.replace(/&/g,'%26')+'&width='+screen.width+'&height='+screen.height+'&response_time='+response_time;

    xhr.open('POST', "/stat", true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send(data);
})();

(function(){
	function isPC() {
	    var userAgentInfo = navigator.userAgent;
	    var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPod");
	    var flag = true;
	    for (var v = 0; v < Agents.length; v++) {
	        if (userAgentInfo.indexOf(Agents[v]) > 0) {
	            flag = false;
	            break;
	        }
	    }
	    return flag;
	}
	
	function redirectToWap() {
	    var path = window.location.pathname;
	    if (!path) {
	        return;
	    }
	    var search = window.location.search;
	    if (search.indexOf('redirect=false') != -1) {
	    	return ;
	    }
	
	    path = path.replace('qfang-web/', '');
	    var wapPath = 'http://m.qfang.com/shenzhen';
	    if (path == '/') {
	        return ; //首页
	    } else if (/^\/(sale|rent|garden|office|newhouse)(.*)/gi.test(path)) {
	        // wap站没有写字楼楼盘
	        if (path.indexOf('office/garden') != -1) {
	            return;
	        }
	        
	
	        // 楼盘详情页
	        if (/^\/garden\/desc\/\d+/gi.test(path)) {
	            path = path.replace('desc/', '')
	        }
	        // 新房列表页
	        if (path.indexOf('newhouse/list') != -1) {
	        	path = path.replace('/list', '')
	        }
	        // 写字楼列表页
	         if (/^\/office\/(rentSubway|saleSubway)/gi.test(path)) {
	         	path = path.replace('Subway', '');
	         }
	        
	        
	        if (/^\/garden\/(sale|rent)/gi.test(path)) {
	            // 楼盘租房二手房页面
	            var arr = path.split('/');
	            if (arr.length == 4) {
	                wapPath = wapPath + '/' + arr[2] + '?gardenId=' + arr[3];
	            } else if (arr.length == 5) {
	                wapPath = wapPath + '/' + arr[2] + '/' + arr[4] + '?gardenId=' + arr[3];
	            }
	        } else {
	            var arr = path.split('/');
	            for (var i = 1; i < arr.length; i++) {
	                wapPath = wapPath + '/' + arr[i];
	            }
	        }
	    }
	    location.href = wapPath;
	};
	
	if (!isPC()) {
	    redirectToWap();
	}

})();
    

</script>
  <!-- header -->
  <div class="header">
    <!-- <a class="jump-links" href="javascript:;" target="_blank">Jump link here!</a> -->
    <!-- top -->
    <div class="header-top" id="headerTop">
      <div class="w-1200 header-top-inner clearfix">
        <!-- logo -->
        <div class="logo-box fl">
          <p class="logo fl">
            <a class="icons" href="javascript:;">Q房网</a>
          </p>
          <p class="city-select fl" id="citySelect">
            <span>深圳</span>
          </p>
          <!-- cities -->
          <div class="cities-layer" id="citiesLayer">
            <i class="icons cities-layer-arrow"></i>
            <a class="icons cities-layer-close"><i class="icons"></i></a>
<div class="cities-con">
  <p class="tit">选择城市</p>
  <ul class="cities-opts clearfix">
    <li class="clearfix">
      <em class="icons">B</em>
      <p>
        <a class="highlight" href="http://beijing.qfang.com">北京</a>
      </p>
    </li>
    <li class="clearfix">
      <em class="icons">N</em>
      <p>
        <a class="highlight" href="http://nanjing.qfang.com">南京</a>
        <a href="http://nanning.qfang.com">南宁</a>
        <a href="http://nantong.qfang.com">南通</a>
      </p>
    </li>
    <li class="clearfix">
      <em class="icons">C</em>
      <p>
        <a href="http://chengdu.qfang.com">成都</a>
        <a href="http://chongqing.qfang.com">重庆</a>
      </p>
    </li>
    <li class="clearfix">
      <em class="icons">P</em>
      <p>
        <a href="http://pingdingshan.qfang.com">平顶山</a>
      </p>
    </li>
    <li class="clearfix">
      <em class="icons">D</em>
      <p>
        <a href="http://dongguan.qfang.com">东莞</a>
      </p>
    </li>
    <li class="clearfix">
      <em class="icons">Q</em>
      <p>
        <a class="highlight" href="http://qingdao.qfang.com">青岛 </a>
      </p>
    </li>
    <li class="learfix">
      <em class="icons">F</em>
      <p>
        <a class="highlight" href="http://foshan.qfang.com">佛山</a>
      </p>
    </li>
    <li class="clearfix">
      <em class="icons">S</em>
      <p>
        <a class="highlight" href="http://shenzhen.qfang.com">深圳</a>
        <a class="highlight" href="http://shanghai.qfang.com">上海</a>
        <a class="highlight" href="http://suzhou.qfang.com">苏州</a>
        <a href="http://sanya.qfang.com">三亚</a>
      </p>
    </li>
    <li class="clearfix">
      <em class="icons">G</em>
      <p>
        <a class="highlight" href="http://guangzhou.qfang.com">广州</a>
      </p>
    </li>
    <li class="clearfix">
      <em class="icons">T</em>
      <p>
        <a href="http://taiyuan.qfang.com">太原 </a>
        <a href="http://taicang.qfang.com">太仓 </a>
      </p>
    </li>
    <li class="clearfix">
      <em class="icons">H</em>
      <p>
        <a class="highlight" href="http://hangzhou.qfang.com">杭州</a>
        <a href="http://huizhou.qfang.com">惠州</a>
        <a href="http://hefei.qfang.com">合肥</a>
        <a href="http://huzhou.qfang.com">湖州</a>
      </p>
    </li>
    <li class="clearfix">
      <em class="icons">W</em>
      <p>
        <a href="http://wuhan.qfang.com">武汉</a>
        <a href="http://wuxi.qfang.com">无锡</a>
      </p>
    </li>
    <li class="clearfix">
      <em class="icons">J</em>
      <p>
        <a href="http://jiaxing.qfang.com">嘉兴</a>
      </p>
    </li>
    <li class="clearfix">
      <em class="icons">X</em>
      <p>
        <a class="highlight" href="http://hk.qfang.com">香港</a>
        <a href="http://xuzhou.qfang.com">徐州</a>
      </p>
    </li>
    <li class="clearfix">
      <em class="icons">K</em>
      <p>
        <a href="http://kunming.qfang.com">昆明</a>
      </p>
    </li>
    <li class="clearfix">
      <em class="icons">Z</em>
      <p>
        <a class="highlight" href="http://zhuhai.qfang.com">珠海</a>
        <a class="highlight" href="http://zhongshan.qfang.com">中山</a>
      </p>
    </li>
    <li class="clearfix">
      <em class="icons">L</em>
      <p>
        <a href="http://langfang.qfang.com">廊坊</a>
      </p>
    </li>
  </ul>
</div>
          </div>
          <!-- end cities -->
        </div>
        <!-- end logo -->
<!--首页-->

<!--二手房-->

<!--新房-->

<!--学区房-->

<!--租房-->

<!--查房价-->
<!--地铁查房价-->

<!--写字楼-->

<!--房产问答-->

<!--新资讯-->

<!--特许加盟-->

<!--经纪人-->

<!--特惠团购-->


<!--掌上Q房-->

<!--趋势图显示地-->

<!--业主委托-->


<!--地铁找房-->
        <!-- nav -->
        <div class="top-nav fr clearfix" id="topNav">
          <ul>
            <li class="nav-item">
              <p class="nav-link"><a href="/">首页</a></p>
            </li>
            <li class="nav-item">
              <p class="nav-link"><a href="/sale">二手房</a></p>
              <div class="nav-linksub">
                <i class="icons arrow"></i>
                <p>
                  <a href="/sale">房源</a>
                  <a href="/garden">小区</a>
                	<a href="/sale/n0">学区房</a>
                	<a href="/transaction">成交</a>
                 	 <a href="/tycoon">经纪人</a>
                  <a href="/map/sale">地图找房</a>
                </p>
              </div>
            </li>

            <li class="nav-item">
              <p class="nav-link"><a href="/newhouse">新房</a></p>
              <div class="nav-linksub">
                <i class="icons arrow"></i>
                <p>
                  <a href="/newhouse">新房首页</a>
                  	<a href="/groupbuy">优惠活动</a>
                  <a href="/newhouse/list">深圳新房</a>
                  <a href="/newhouse/info">楼盘导购</a>
                  <a rel="nofollow" target="_blank"  target="_blank" href="http://www.qfang.com/special/QKYT/">Q客云投</a>
                </p>
              </div>
            </li>

            <li class="nav-item">
              <p class="nav-link"><a href="/rent">租房</a></p>
              <div class="nav-linksub">
                <i class="icons arrow"></i>
                <p>
                  <a href="/rent">房源</a>
                  <a href="/garden">小区</a>
                  	<a href="/tycoonRent">经纪人</a>
                  <a href="/map/rent">地图找房</a>
                </p>
              </div>
            </li>
            
            <li class="nav-item">
              <p class="nav-link"><a rel="nofollow" href="/fangjia/area">查房价</a></p>
            </li>
            
            <li class="nav-item">
              <p class="nav-link"><a href="/office">写字楼</a></p>
              <div class="nav-linksub">
                <i class="icons arrow"></i>
                <p>
                  <a href="/office">写字楼首页</a>
                  <a href="/office/rent">写字楼出租</a>
                  <a href="/office/sale">写字楼出售</a>
                  <a href="/office/garden/rent">写字楼楼盘</a>
                 	 <a href="/office/tycoon/index">写字楼经纪人</a>
                </p>
              </div>
            </li>
            
            <li class="nav-item">
              <p class="nav-link"><a href="http://hw.qfang.com">海外</a></p>
              <div class="nav-linksub">
                <i class="icons arrow"></i>
                <p>
                  <a href="http://hw.qfang.com">海外首页</a>
                  <a href="http://hw.qfang.com/room">海外地产</a>
                  <a href="http://hw.qfang.com/homeKitinfo/list">海外资讯</a>
                </p>
              </div>
            </li>
           
            <li class="nav-item">
              <p rel="nofollow" class="nav-link"><a href="/trust?type=sale">业主委托</a></p>
            </li>
            
            <li class="nav-item">
              <p class="nav-link"><a target="_blank" href="http://app.qfang.com/index.html">掌上Q房</a></p>
              <div class="nav-linksub">
                <i class="icons arrow"></i>
                <p class="top-app">
                  <em class="icons"></em>
                </p>
              </div>
            </li>
            <li class="nav-item dn" id="loginOrUserName">
            	<p class="after-logging">
            		<i class="vertical-bar"></i>
            		<a href="http://user.qfang.com/index?fromUrl=http://shenzhen.qfang.com/" class="frontUserName">
            		</a>
            		<a class="num" href="http://user.qfang.com/uo/remindMsgList" style="display:none"></a>
            		<span class="comma-symbol">，</span>
            		<a class="exit" href="http://user.qfang.com/userLogin/exit">退出</a>
            	</p>
            </li>
            <li class="nav-item nav-item-login"  id="noLoginUser">
               <p class="nav-link">
                <a href="http://user.qfang.com?fromCity=SHENZHEN&fromUrl=http://shenzhen.qfang.com/">登录</a>
              </p>
              <div class="nav-linksub">
                <i class="icons arrow"></i>
                <p>
                  <a id="myQfang" href="javascript:;">我的Q房</a>
                </p>
              </div> 
				<!--
              <p class="after-logging">
                <i class="vertical-bar"></i>
                <a href="javascript:;">欧阳慕容</a>，
                <a class="num" href="javascript:;">3</a>
              </p>-->
            </li>
             <li class="nav-item reg-link"  id="registerUser">
              <i class="v-line"></i>
              <a rel="nofollow" href="http://user.qfang.com?fromCity=SHENZHEN&isRegister=isRegister">注册</a>
            </li>
          </ul>
        </div>
        <!-- end nav -->
      </div>
      <!-- top search -->
      <!-- end top search -->
    </div>
    <!-- end top -->
    <div class="theme-slogan-zh">
      <a class="icons" href="http://h5.qfang.com/realhouse/" target="_blank"></a>
      <p class="rolling-num">
        <a class="js-rolling-ele simhei" href="/sale" target="_blank">深圳在售真实二手房 <em>24655</em> 套</a>
        <a class="js-rolling-ele simhei" href="/rent" target="_blank">深圳在租真实出租房 <em>10362</em> 套</a>
        <a class="js-rolling-ele simhei" href="/newhouse/list" target="_blank">深圳在售新房楼盘 <em>215</em> 个</a>
      </p>
    </div>
    <!-- search -->
    <div class="search-box" id="searchBox">
      <div class="search-box-inner">
        <p class="search-tabs clearfix" id="searchTabs">
                    <span class="cur" data-placeholder="请输入房源特征、房型、地址或小区名..." data-type="sale">二手房</span>
          <span data-placeholder="请输入新房地址或新房名..." data-type="newhouse">找新房</span>
          <span data-placeholder="请输入房源特征、房型、地址或小区名..."  data-type="rent">找租房</span>
          <span data-placeholder="请输入房源特征、房型、地址或小区名..." data-type="officerent">写字楼</span>
          <span data-placeholder="请输入区域、商圈或小区名" data-type="houseprice">查房价</span>
          <i class="icons arrow"></i>
        </p>
        <div class="search-enter clearfix">
          <div class="ipt-box fl">
            <input maxlength="50" class="keywords" id="keyword1" type="text" data-type="sale" value="" autocomplete="off" />
            <label class="placeholder" id="searchremark">请输入房源特征、房型、地址或小区名...</label>
          </div>
          <a class="search-btn fl" href="javascript:;" id="s-btn1"><i class="icons"></i></a>
        </div>
         <i class="christmas-santa-claus"></i>
      </div>
    </div>
    <!-- end search -->
    <!-- entrances -->
    <div class="entrances" id="entrances">
      <div class="w-1200 entrances-inner">
        <ul class="clearfix">
          <li class="entrances-item entrance-sale">
            <a href="/sale" target="_blank">
              <p>
                <em class="icons-entrances"></em>
              </p>
              <div class="text fl clearfix">
                <span>找二手房</span>
                <span class="entrances-desp">一手资讯 真房源</span>
              </div>
            </a>
          </li>
          <li class="entrances-item entrance-newhs">
            <a href="/newhouse" target="_blank">
              <p>
                <em class="icons-entrances"></em>
              </p>
              <div class="text fl clearfix">
                <span>找新楼盘</span>
                <span class="entrances-desp">优质新盘 团购特惠</span>
              </div>
            </a>
          </li>
          <li class="entrances-item entrance-map">
            <a href="/map/sale" target="_blank">
              <p>
                <em class="icons-entrances"></em>
              </p>
              <div class="text fl clearfix">
                <span>地图找房</span>
                <span class="entrances-desp">精准定位 直观找房</span>
              </div>
            </a>
          </li>
          <li class="entrances-item entrance-tosale">
            <a href="/delegation" target="_blank">
              <p>
                <em class="icons-entrances"></em>
              </p>
              <div class="text fl clearfix">
                <span>我要卖房</span>
                <span class="entrances-desp">贴心服务 安全省心</span>
              </div>
            </a>
          </li>
          <li class="entrances-item entrance-school">
            <a href="/sale/n0" target="_blank">
              <p>
                <em class="icons-entrances"></em>
              </p>
              <div class="text fl clearfix">
                <span>找学区房</span>
                <span class="entrances-desp">优质学区 赢在起点</span>
              </div>
            </a>
          </li>
          <li class="entrances-item entrance-torent">
            <a href="/map/rent" target="_blank">
              <p>
                <em class="icons-entrances"></em>
              </p>
              <div class="text fl clearfix">
                <span>我要租房</span>
                <span class="entrances-desp">精选租房 任性之选</span>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- end entrances -->
  </div>
  <!-- end header -->
  <!-- hot sale house -->
  <div id="hotSaleHouse"></div>
  <!-- end hot sale house -->
  <!-- data -->
  <div class="qfang-data dn">
    <div class="comm-wrap js-focused-data"><!-- 如果是登录状态则增加className focused-data -->
      <!-- 游客访问 -->
      <div class="w-1200 comm-wrap-inner" data-type="loginBefore" id="cityTransactionId">
        <div class="comm-wrap-header clearfix">
          <h3 class="comm-wrap-tit fl">近期深圳房价走势</h3>
          <p class="really-hs-num clearfix fr"><i class="icons"></i><span>深圳在售真实二手房<em>24655</em>套</span></p>
          <p class="caption">关注数据了解最新的趋势</p>
        </div>
        <div class="clearfix">
          <div class="data-chart-box fl">
            <div class="data-chart fl" id="dataCharts"></div>
          </div>
          <div class="data-con fr">
            <div class="data-con-num clearfix">
              <div class="average-price fl">
                <a href="/fangjia/area" target="_blank">
                  <p class="data-title">深圳12月在售房源</p>
                  <p class="price"><b>24655</b>套</p>
                </a>
              </div>
              <div class="average-price fl">
                <a href="/fangjia/area" target="_blank">
                  <p class="data-title">深圳1月成交均价</p>
                  <p class="price"><b>56577</b>元/平米</p>
                </a>
              </div>
              <div class="sequential fr">
                <a href="/fangjia/area" target="_blank">
                  <p class="data-title">均价环比上月</p>
                  <p class="percentage rose">
                    <b>+  0.24</b><em>%</em>
                  </p>
                </a>
              </div>
            </div>
            <div class="garden-hsprices">
              <p class="title">查小区房价，快来试试</p>
              <div class="s-num-search clearfix">
                <div class="s-num-inputbox fl">
                  <input type="text" id="sNum" autocomplete="off" />
                  <label class="placeholder">请输入小区名</label>
                </div>
                <a href="javascript:;" class="search-btn fl" id="qfang_data_btn"><i class="icons"></i></a>
                <p class="lf-error dn clearfix">
                  <i class="icons"></i>
                  <span>没有找到相关小区</span>
                </p>
              </div>
            </div>
            <p class="reference-tips">二手房均价根据我司报盘、成交等数据进行评估，仅供参考</p>
          </div>
        </div>
      </div>
      <!-- end 游客访问 -->
      <!-- 登录访问 -->
      <div class="w-1200 comm-wrap-inner dn" data-type="loginAfter" id="attentionGardenId">
        <div class="comm-wrap-header clearfix">
          <h3 class="comm-wrap-tit fl">关注的小区近期数据</h3>
          <p class="focused-btns clearfix fr"><a href="javascript:;" class="js-unfollow">取消关注</a><a href="http://user.qfang.com/uc/collectList/garden">关注的小区</a></p>
          <p class="caption">我们会越来越懂你</p>
        </div>
        <div class="pics-play" id="focusedData">
          <div class="js-picsbox pics-box" >
          </div>
          <!-- btns -->
          <p class="js-btnprev btns btn-prev">
            <a class="icons" href="javascript:;"></a>
          </p>
          <p class="js-btnnext btns btn-next">
            <a class="icons" href="javascript:;"></a>
          </p>
          <!-- end btns -->
        </div>
      </div>
      <!-- end 登录访问 -->

    </div>
  </div>
  <!-- end data -->
  <!-- app download -->
  <div class="app-dldload" id="appDldload">
    <div class="w-1200 app-dldload-inner">
      <div class="app-qrcode">
        <p class="btns btn-iphone">
          <a href="https://itunes.apple.com/app/id1225814601" target="_blank" rel="nofollow">
            <i class="icons"></i>
            <span>iPhone</span>
          </a>
        </p>
        <p class="btns btn-android">
          <a href="http://dalian.qfang.com/qfangapp/v6_7_0/qfang_android_v6_7_0_qfangMarket.apk" target="_blank" rel="nofollow">
            <i class="icons"></i>
            <span>Android</span>
          </a>
        </p>
        <p class="qr-code"><i class="icons"></i></p>
      </div>
      <p class="hand-app" id="handApp"></p>
    </div>
  </div>
  <!-- end app download -->
  <!-- hot new houses -->
  <div class="comm-wrap">
    <div class="w-1200 comm-wrap-inner">
      <div class="comm-wrap-header clearfix">
        <h3 class="comm-wrap-tit fl">新房，新的生活</h3>
        <p class="u-more fr">
          <a href="/newhouse/list" target="_blank">更多深圳新房<span class="icons"></span></a>
        </p>
        <p class="caption">真实新楼盘信息</p>
      </div>
      <!-- con -->
      <div class="picture-package">
        <div class="comm-group">
          <ul class="clearfix">
          	<li class="item newhs-item">
              <a target="_blank" href="/newhouse/3510684">
                <p class="img-wrap">
                  <img class="lazy" alt="远洋新天地" onError="this.src='http://yun200.qfangimg.com/group1/285x270/M00/D8/98/CvtcKVcZ5YiAGVryAABla5Fvuh0069.jpg';" src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="
					http://yun200.qfangimg.com/group1/285x270/M00/2B/34/CvtcKlpK_I2AC8W7AAEh9WOwNtg081.jpg?signature=fA4K6OG2MOzqxvCpUDBixhOEJPGcfcum7QJrG_0ynxkX55LcMGECeS9mgi3orqsNl1ArAc-GVRi8-Igauqc9LA&tailor=true
                  " width="285" height="270" />
                </p>
                <p class="text-annotate">广告</p>
                <div class="new-hs-attr">
                  <p class="new-hs-top clearfix">
                    <em>远洋新天地</em>
                    <span>110-125㎡住宅</span>
                  </p>
                  <p class="new-hs-bottom">
                    <span>区域：龙岗中心城 </span>
                    <span>均价：39800元/㎡</span>
                    <span>报名：146人</span>
                    <span class="last">
                      	                      	新房优惠\
	                      	景观居所\
	                      	科技住宅\
	                      	新盘首开\
	                      	年度热盘
                    </span>
                  </p>
                </div>
              </a>
            </li>
          	<li class="item newhs-item">
              <a target="_blank" href="/newhouse/3516029">
                <p class="img-wrap">
                  <img class="lazy" alt="满京华云著" onError="this.src='http://yun200.qfangimg.com/group1/285x270/M00/D8/98/CvtcKVcZ5YiAGVryAABla5Fvuh0069.jpg';" src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="
					http://yun200.qfangimg.com/group1/285x270/M00/2B/84/CvtcKVoCcUKATJpLAAH53TqNqac425.jpg?signature=fA4K6OG2MOzqxvCpUDBixnZ_boj4Q1Ntpb3c_8ToLvKHzuTsBY6n6e882WpTpTHi10LstdTPNxKBWbOmiSNBbg&tailor=true
                  " width="285" height="270" />
                </p>
                <p class="text-annotate">广告</p>
                <div class="new-hs-attr">
                  <p class="new-hs-top clearfix">
                    <em>满京华云著</em>
                    <span>精装2-4房</span>
                  </p>
                  <p class="new-hs-bottom">
                    <span>区域：松岗 </span>
                    <span>均价：40000元/㎡</span>
                    <span>报名：212人</span>
                    <span class="last">
                      	                      	新房优惠\
	                      	科技住宅\
	                      	新盘首开
                    </span>
                  </p>
                </div>
              </a>
            </li>
          	<li class="item newhs-item">
              <a target="_blank" href="/newhouse/1102179">
                <p class="img-wrap">
                  <img class="lazy" alt="绿景虹湾" onError="this.src='http://yun200.qfangimg.com/group1/285x270/M00/D8/98/CvtcKVcZ5YiAGVryAABla5Fvuh0069.jpg';" src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="
					http://yun200.qfangimg.com/group1/285x270/M00/2A/E5/CvtcKVmvWKyAGwMCAAHxfkMbjzI791.jpg?signature=fA4K6OG2MOzqxvCpUDBixgIqffZmh3oIDSnPwSONBPXdvQ7XWxFMd8XztoLUbiwpA86ddjAmpa-YeoRkg5KAVg&tailor=true
                  " width="285" height="270" />
                </p>
                <p class="text-annotate">广告</p>
                <div class="new-hs-attr">
                  <p class="new-hs-top clearfix">
                    <em>绿景虹湾</em>
                    <span>51-75㎡清盘中</span>
                  </p>
                  <p class="new-hs-bottom">
                    <span>区域：梅林 </span>
                    <span>均价：75000元/㎡</span>
                    <span>报名：187人</span>
                    <span class="last">
                      	                      	新房优惠\
	                      	现房\
	                      	酒店式公寓\
	                      	年度热盘
                    </span>
                  </p>
                </div>
              </a>
            </li>
          	<li class="item newhs-item">
              <a target="_blank" href="/newhouse/3514979">
                <p class="img-wrap">
                  <img class="lazy" alt="卓越星源" onError="this.src='http://yun200.qfangimg.com/group1/285x270/M00/D8/98/CvtcKVcZ5YiAGVryAABla5Fvuh0069.jpg';" src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="
					http://yun200.qfangimg.com/group1/285x270/M00/2C/0E/CvtcKVpK_puAQoYXAAE43cj2V4o265.jpg?signature=fA4K6OG2MOzqxvCpUDBixsAunyWjoafDX9GNa-QJoOnXjq6uQNU6SHpiCGZf6g03ldeuxJDZSZlUb-Qei32XOA&tailor=true
                  " width="285" height="270" />
                </p>
                <p class="text-annotate">广告</p>
                <div class="new-hs-attr">
                  <p class="new-hs-top clearfix">
                    <em>卓越星源</em>
                    <span>在售86-91平</span>
                  </p>
                  <p class="new-hs-bottom">
                    <span>区域：平湖 </span>
                    <span>均价：38500元/㎡</span>
                    <span>报名：180人</span>
                    <span class="last">
                      	                      	新房优惠\
	                      	生态宜居\
	                      	景观居所\
	                      	新盘首开\
	                      	年度热盘
                    </span>
                  </p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- end con -->
    </div>
   </div>
  <!-- end hot new houses -->
  <!-- hot rent house -->
  
  <div class="comm-wrap bgc-f5f5f5">
    <div class="w-1200 comm-wrap-inner">
      <div class="comm-wrap-header clearfix">
        <h3 class="comm-wrap-tit fl">抢手租房，任性之选</h3>
        <p class="u-more fr">
          <a href="/rent" target="_blank">更多深圳租房<span class="icons"></span></a>
        </p>
        <p class="caption">真房源 好房只为你</p>
      </div>
      <!-- con -->
      <div class="picture-package">
        <div class="comm-group">
          <ul class="clearfix">
<li class="item">
              <a href="/rent/100091956" target="_blank">
                <p class="img-wrap">
                  <img class="lazy" alt="远洋新干线" onError="this.src='http://yun200.qfangimg.com/group1/285x230/M00/D8/98/CvtcKVcZ5YiAGVryAABla5Fvuh0069.jpg';" src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="
					http://yun.qfangimg.com/group2/285x230/M00/2F/ED/CvtcKVpSQkiAVc_KAAlkPDBnBek518.jpg?signature=o4ypkYpzG1tv-H2Ip5eNaxPQyxvXS0zF4Tk0Nbqid-Ul__sGOpKSew8iYWTRwi1kn5W7VVWJ5csfYs45f4QvnA&tailor=true
     				                   " width="285" height="230" />
                  <span class="desp"><em>4300</em>元/月</span>
                </p>
                <div class="text-wrap">
                  <p class="name"><b>远洋新干线</b></p>
                  <p class="meta clearfix">
                    <span>3室2厅</span>
                    <span>86.57平米</span>
                  </p>
                </div>
              </a>
</li>
<li class="item">
              <a href="/rent/100080157" target="_blank">
                <p class="img-wrap">
                  <img class="lazy" alt="诺德国际" onError="this.src='http://yun200.qfangimg.com/group1/285x230/M00/D8/98/CvtcKVcZ5YiAGVryAABla5Fvuh0069.jpg';" src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="
					http://yun.qfangimg.com/group1/285x230/M00/22/92/CvtcM1jV6DmAJIN5AAnGKPd9ANg191.jpg?signature=opJh8gvnjT1n_WeYkT6Z3OioeMmpSi4pNFohNp3eKiVNMQA5hzLWODx5cXiaC789I_7tcEbWmcvM833dYyA46Q&tailor=true
     				                   " width="285" height="230" />
                  <span class="desp"><em>4500</em>元/月</span>
                </p>
                <div class="text-wrap">
                  <p class="name"><b>诺德国际</b></p>
                  <p class="meta clearfix">
                    <span>2室1厅</span>
                    <span>47.69平米</span>
                  </p>
                </div>
              </a>
</li>
<li class="item">
              <a href="/rent/100003101" target="_blank">
                <p class="img-wrap">
                  <img class="lazy" alt="桃源村" onError="this.src='http://yun200.qfangimg.com/group1/285x230/M00/D8/98/CvtcKVcZ5YiAGVryAABla5Fvuh0069.jpg';" src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="
					http://yun.qfangimg.com/group4/285x230/M00/23/2B/CvtcMlm055qAfz-TAAo-sDI2Kmw392.jpg?signature=4RfmhDvImoLHqWgNTy98T3ElDEpG93mm7UrIJF9UR43eEwqNoSWyRak_KTgNz-N-B_aSe_OAN_fIYYf_3elFrA&tailor=true
     				                   " width="285" height="230" />
                  <span class="desp"><em>5700</em>元/月</span>
                </p>
                <div class="text-wrap">
                  <p class="name"><b>桃源村</b></p>
                  <p class="meta clearfix">
                    <span>3室2厅</span>
                    <span>95.39平米</span>
                  </p>
                </div>
              </a>
</li>
<li class="item">
              <a href="/rent/100097572" target="_blank">
                <p class="img-wrap">
                  <img class="lazy" alt="金众蓝钻" onError="this.src='http://yun200.qfangimg.com/group1/285x230/M00/D8/98/CvtcKVcZ5YiAGVryAABla5Fvuh0069.jpg';" src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="
					http://yun.qfangimg.com/group1/285x230/M00/41/E3/CvtcM1pZ2YiAUbWIAAs9euSEJWQ390.jpg?signature=opJh8gvnjT1n_WeYkT6Z3ChFkoq3MMEw-BmY5NYyBF1437n3LWLRL-p41hFYcQCvFITT47m_ytb97bOE0ETEBw&tailor=true
     				                   " width="285" height="230" />
                  <span class="desp"><em>1100</em>元/月</span>
                </p>
                <div class="text-wrap">
                  <p class="name"><b>金众蓝钻</b></p>
                  <p class="meta clearfix">
                    <span>1室0厅</span>
                    <span>36.82平米</span>
                  </p>
                </div>
              </a>
</li>
          </ul>
        </div>
      </div>
      <!-- end con  -->
    </div>
  </div>
  <!-- end hot rent house -->
  <!-- guide -->
  <div class="comm-wrap">
    <div class="w-1200 comm-wrap-inner">
      <div class="comm-wrap-header clearfix">
        <h3 class="comm-wrap-tit fl">置业指南，购房不再难</h3>
        <p class="u-more fr">
          <a target="_blank" href="/newhouse/info">更多指南<span class="icons"></span></a>
        </p>
        <p class="caption">购房知识·政策·流程</p>
      </div>
      <!-- con -->
      <div class="picture-package">
        <div class="comm-group">
          <ul class="clearfix">
            <li class="item">
              <a href="/newhouse/info/detail/582041" target="_blank">
                <p class="img-wrap">
                  <img class="lazy" alt="深圳御景蓝湾公馆精装3房pk惠州新力上园精装3房"  
                  src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="
						http://yun200.qfangimg.com/group1/285x330/M00/2C/1F/CvtcKVpW2beAbi8xAAB5uXY9yrE382.jpg
                  
                  " width="285" height="330" />
                  <span class="photo-small">
                  	<img class="lazy" src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="/themes/default/images/frontend/index/v2.4/photo3-46x46.png" width="46" height="46" />
                  </span>
                </p>
                <div class="text-wrap bgc-fafafa">
                  <p class="sentence">深圳御景蓝湾公馆精装3房pk惠州新力上园精装3房</p>
                </div>
              </a>
            </li>
            <li class="item">
              <a href="/newhouse/info/detail/581975" target="_blank">
                <p class="img-wrap">
                  <img class="lazy" alt="多地响起了放松限购口号   2018年楼市风向标要变了吗"  
                  src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="
						http://yun200.qfangimg.com/group1/285x330/M00/2B/45/CvtcKlpWxQOAKAvkAACYPK5KnSY544.jpg
                  
                  " width="285" height="330" />
                  <span class="photo-small">
                  	<img class="lazy" src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="/themes/default/images/frontend/index/v2.4/photo4-46x46.png" width="46" height="46" />
                  </span>
                </p>
                <div class="text-wrap bgc-fafafa">
                  <p class="sentence">多地响起了放松限购口号   2018年楼市风向标要变了吗</p>
                </div>
              </a>
            </li>
            <li class="item">
              <a href="/newhouse/info/detail/581953" target="_blank">
                <p class="img-wrap">
                  <img class="lazy" alt="深圳万科云城六期精装公寓PK惠州博林腾瑞3房"  
                  src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="
						http://yun200.qfangimg.com/group1/285x330/M00/2B/45/CvtcKlpWw-GAHpy6AACLahbMA-o534.jpg
                  
                  " width="285" height="330" />
                  <span class="photo-small">
                  	<img class="lazy" src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="/themes/default/images/frontend/index/v2.4/photo5-46x46.png" width="46" height="46" />
                  </span>
                </p>
                <div class="text-wrap bgc-fafafa">
                  <p class="sentence">深圳万科云城六期精装公寓PK惠州博林腾瑞3房</p>
                </div>
              </a>
            </li>
            <li class="item">
              <a href="/newhouse/info/detail/581861" target="_blank">
                <p class="img-wrap">
                  <img class="lazy" alt="2018深圳预计116个新盘入市  刚需房仍占主导"  
                  src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="
						http://yun200.qfangimg.com/group1/285x330/M00/2C/10/CvtcKVpMP0WANRUiAACIBMI3K7Q028.jpg
                  
                  " width="285" height="330" />
                  <span class="photo-small">
                  	<img class="lazy" src="/themes/default/images/frontend/common/v2.4/placeholder.gif" data-original="/themes/default/images/frontend/index/v2.4/photo7-46x46.png" width="46" height="46" />
                  </span>
                </p>
                <div class="text-wrap bgc-fafafa">
                  <p class="sentence">2018深圳预计116个新盘入市  刚需房仍占主导</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- end con  -->
    </div>
  </div>
  <!-- end guide -->
  <!-- footer 2016 -->
 

<!-- footer 2016 -->
  <div class="footer-2016 mt-40">
    <div class="footer-2016-inner">
      <!-- nav links -->
      <div class="footer-top clearfix">
        <p class="footer-top-nav fl clearfix">
          <a target="_blank" href="/aboutQfang">关于Q房</a> 
          <a target="_blank" href="/contactus">联系我们</a> 
          <a target="_blank" href="/recruit">人才招聘</a>
          <a target="_blank" href="/agreement">用户协议</a> 
          <a target="_blank" href="/friendLink">友情链接</a>
          <a target="_blank" href="/sitemap">网站地图</a> 
          <a target="_blank" href="/zxfy/sale">新上房源</a>
          <a target="_blank"  href="http://baike.qfang.com/">房产百科</a>
          <a target="_blank"  href="/ask">房产问答</a> 
          <a target="_blank"  href="/hotkeyword/list/hotsale">热门二手房</a>
          <a target="_blank"  href="/hotkeyword/list/hotrent">热门租房</a> 
          <a target="_blank"  href="/hotkeyword/list/hotnewhouse">热门新房</a> 
        </p>
        
        <p class="footer-top-hotline fr">服务热线：4009-000-999</p>
        <i class="icons zh-footer fr"></i>
      </div>
      <!-- nav links -->
  
 
      <!-- friendlylinks -->
      <div class="links-friendly" id="linksFriendly">
        <div class="links-friendly-inner">
          <div class="links-friendly-tabs clearfix">
            <ul id="linksfriendlyTabs">
            		<li class="cur"><a href="javascript:;">区域二手房</a> </li>
            		<li ><a href="javascript:;">商圈二手房</a> </li>
            		<li ><a href="javascript:;">区域租房</a> </li>
            		<li ><a href="javascript:;">商圈租房</a> </li>
            		<li ><a href="javascript:;">深圳楼盘</a> </li>
            		<li ><a href="javascript:;">热门城市二手房</a> </li>
            		<li ><a href="javascript:;">热门城市租房</a> </li>
            		<li ><a href="javascript:;">友情链接</a> </li>
            		<li ><a href="javascript:;">城市房价</a> </li>
            </ul>
          </div>
          <div class="links-friendly-tabcon">
          	    	<div class="links-friendly-item clearfix  ">
            			<p><a href="http://shenzhen.qfang.com/sale/dapengxinqu" title="大鹏二手房" target="_blank">大鹏二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/pingshanxinqu" title="坪山二手房" target="_blank">坪山二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/yantiana" title="盐田二手房" target="_blank">盐田二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/guangmingxinqu" title="光明二手房" target="_blank">光明二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/longhuaxinqu" title="龙华二手房" target="_blank">龙华二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/longgang" title="龙岗二手房" target="_blank">龙岗二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/baoan" title="宝安二手房" target="_blank">宝安二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/luohu" title="罗湖二手房" target="_blank">罗湖二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/futian" title="福田二手房" target="_blank">福田二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/nanshan" title="南山二手房" target="_blank">南山二手房</a></p>
            		</div>
          	    	<div class="links-friendly-item clearfix dn ">
            			<p><a href="http://shenzhen.qfang.com/sale/nanshan-nantou" title="南头二手房" target="_blank">南头二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/nanshan-kejiyuan" title="科技园二手房" target="_blank">科技园二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/nanshan-huaqiaocheng" title="华侨城二手房" target="_blank">华侨城二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/nanshan-houhai" title="后海二手房" target="_blank">后海二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/futian-jingtian" title="景田二手房" target="_blank">景田二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/futian-huanggang" title="皇岗二手房" target="_blank">皇岗二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/futian-futianzhongxinqu" title="福田中心区二手房" target="_blank">福田中心区二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/futian-chegongmiao" title="车公庙二手房" target="_blank">车公庙二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/futian-bagualing" title="八卦岭二手房" target="_blank">八卦岭二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/nanshan-xili" title="西丽二手房" target="_blank">西丽二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/nanshan-shekou" title="蛇口二手房" target="_blank">蛇口二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/nanshan-qianhai" title="前海二手房" target="_blank">前海二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/nanshan-nanyou" title="南油二手房" target="_blank">南油二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/nanshan-nanshanzhongxinqu" title="南山中心区二手房" target="_blank">南山中心区二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/luohu-renminnan" title="人民南二手房" target="_blank">人民南二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/luohu-nigang" title="泥岗二手房" target="_blank">泥岗二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/luohu-huangbeiling" title="黄贝岭二手房" target="_blank">黄贝岭二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/luohu-dongmen" title="东门二手房" target="_blank">东门二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/luohu-cuizhu" title="翠竹二手房" target="_blank">翠竹二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/luohu-buxin" title="布心二手房" target="_blank">布心二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/futian-xiangmihu" title="香蜜湖二手房" target="_blank">香蜜湖二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/futian-shangxiasha" title="上下沙二手房" target="_blank">上下沙二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/futian-shisha" title="石厦二手房" target="_blank">石厦二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/futian-meilin" title="梅林二手房" target="_blank">梅林二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/pingshanxinqu-pingshanc" title="坪山二手房" target="_blank">坪山二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/longhuaxinqu-minzhi" title="民治二手房" target="_blank">民治二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/longgang-longgangzhongxincheng" title="龙岗中心城二手房" target="_blank">龙岗中心城二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/longgang-bantian" title="坂田二手房" target="_blank">坂田二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/longgang-henggang" title="横岗二手房" target="_blank">横岗二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/longgang-buji" title="布吉二手房" target="_blank">布吉二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/baoan-xinan" title="新安二手房" target="_blank">新安二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/baoan-xixiang" title="西乡二手房" target="_blank">西乡二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/baoan-fuyong" title="福永二手房" target="_blank">福永二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale/baoan-baoanzhongxinqu" title="宝安中心区二手房" target="_blank">宝安中心区二手房</a></p>
            		</div>
          	    	<div class="links-friendly-item clearfix dn ">
            			<p><a href="http://shenzhen.qfang.com/rent/dapengxinqu" title="大鹏出租房" target="_blank">大鹏出租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/pingshanxinqu" title="坪山出租房" target="_blank">坪山出租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/yantiana" title="盐田出租房" target="_blank">盐田出租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/guangmingxinqu" title="光明出租房" target="_blank">光明出租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/longhuaxinqu" title="龙华出租房" target="_blank">龙华出租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/longgang" title="龙岗出租房" target="_blank">龙岗出租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/baoan" title="宝安出租房" target="_blank">宝安出租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/luohu" title="罗湖出租房" target="_blank">罗湖出租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/futian" title="福田出租房" target="_blank">福田出租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/nanshan" title="南山出租房" target="_blank">南山出租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/dapengxinqu" title="大鹏租房" target="_blank">大鹏租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/pingshanxinqu" title="坪山租房" target="_blank">坪山租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/yantiana" title="盐田租房" target="_blank">盐田租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/guangmingxinqu" title="光明租房" target="_blank">光明租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/longhuaxinqu" title="龙华租房" target="_blank">龙华租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/longgang" title="龙岗租房" target="_blank">龙岗租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/baoan" title="宝安租房" target="_blank">宝安租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/luohu" title="罗湖租房" target="_blank">罗湖租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/futian" title="福田租房" target="_blank">福田租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/nanshan" title="南山租房" target="_blank">南山租房</a></p>
            		</div>
          	    	<div class="links-friendly-item clearfix dn ">
            			<p><a href="http://shenzhen.qfang.com/rent/futian-jingtian" title="景田租房" target="_blank">景田租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/futian-huanggang" title="皇岗租房" target="_blank">皇岗租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/futian-futianzhongxinqu" title="福田中心区租房" target="_blank">福田中心区租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/nanshan-shekou" title="蛇口租房" target="_blank">蛇口租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/nanshan-qianhai" title="前海租房" target="_blank">前海租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/nanshan-kejiyuan" title="科技园租房" target="_blank">科技园租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/nanshan-huaqiaocheng" title="华侨城租房" target="_blank">华侨城租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/nanshan-houhai" title="后海租房" target="_blank">后海租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/nanshan-houhai" title="后海出租房" target="_blank">后海出租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/nanshan-huaqiaocheng" title="华侨城出租房" target="_blank">华侨城出租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/nanshan-kejiyuan" title="科技园出租房" target="_blank">科技园出租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/nanshan-qianhai" title="前海出租房" target="_blank">前海出租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/baoan-fuyong" title="福永租房" target="_blank">福永租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/luohu-huangbeiling" title="黄贝岭租房" target="_blank">黄贝岭租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/luohu-liantang" title="莲塘租房" target="_blank">莲塘租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/luohu-caiwuwei" title="蔡屋围租房" target="_blank">蔡屋围租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/luohu-cuizhu" title="翠竹租房" target="_blank">翠竹租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/luohu-buxin" title="布心租房" target="_blank">布心租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/futian-xiangmihu" title="香蜜湖租房" target="_blank">香蜜湖租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/futian-shangxiasha" title="上下沙租房" target="_blank">上下沙租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/futian-meilin" title="梅林租房" target="_blank">梅林租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/futian-jingtian" title="景田租房" target="_blank">景田租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/baoan-xinan" title="新安租房" target="_blank">新安租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/baoan-xixiang" title="西乡租房" target="_blank">西乡租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/nanshan-nanshanzhongxinqu" title="南山中心区租房" target="_blank">南山中心区租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/nanshan-nanyou" title="南油租房" target="_blank">南油租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/pingshanxinqu-pingshanc" title="坪山租房" target="_blank">坪山租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/longhuaxinqu-minzhi" title="民治租房" target="_blank">民治租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/longgang-longgangzhongxincheng" title="龙岗中心城租房" target="_blank">龙岗中心城租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/longgang-henggang" title="横岗租房" target="_blank">横岗租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/longgang-bantian" title="坂田租房" target="_blank">坂田租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent/longgang-buji" title="布吉租房" target="_blank">布吉租房</a></p>
            		</div>
          	    	<div class="links-friendly-item clearfix dn ">
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/futian" title="福田新房" target="_blank">福田新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/nanshan" title="南山新房" target="_blank">南山新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/baoan-fuyong" title="福永新房" target="_blank">福永新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/nanshan-houhai" title="后海新房" target="_blank">后海新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/dapengxinqu" title="大鹏新房" target="_blank">大鹏新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/pingshanxinqu" title="坪山新房" target="_blank">坪山新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/yantiana" title="盐田新房" target="_blank">盐田新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/guangmingxinqu" title="光明新房" target="_blank">光明新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/longhuaxinqu" title="龙华新房" target="_blank">龙华新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/longgang" title="龙岗新房" target="_blank">龙岗新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/baoan" title="宝安新房" target="_blank">宝安新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/luohu" title="罗湖新房" target="_blank">罗湖新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/longhuaxinqu" title="龙华楼盘" target="_blank">龙华楼盘</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/longgang" title="龙岗楼盘" target="_blank">龙岗楼盘</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/baoan" title="宝安楼盘" target="_blank">宝安楼盘</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/luohu" title="罗湖楼盘" target="_blank">罗湖楼盘</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/futian" title="福田楼盘" target="_blank">福田楼盘</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/nanshan" title="南山楼盘" target="_blank">南山楼盘</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/longhuaxinqu-guanlan" title="观澜新房" target="_blank">观澜新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/longgang-longgangzhongxincheng" title="龙岗中心城新房" target="_blank">龙岗中心城新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/longgang-buji" title="布吉新房" target="_blank">布吉新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/baoan-xixiang" title="西乡新房" target="_blank">西乡新房</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/longhuaxinqu-guanlan" title="观澜楼盘" target="_blank">观澜楼盘</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/longgang-longgangzhongxincheng" title="龙岗中心城楼盘" target="_blank">龙岗中心城楼盘</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/longgang-buji" title="布吉楼盘" target="_blank">布吉楼盘</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/baoan-xixiang" title="西乡楼盘" target="_blank">西乡楼盘</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/baoan-fuyong" title="福永楼盘" target="_blank">福永楼盘</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/nanshan-houhai" title="后海楼盘" target="_blank">后海楼盘</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/dapengxinqu" title="大鹏楼盘" target="_blank">大鹏楼盘</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/pingshanxinqu" title="坪山楼盘" target="_blank">坪山楼盘</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/yantiana" title="盐田楼盘" target="_blank">盐田楼盘</a></p>
            			<p><a href="http://shenzhen.qfang.com/newhouse/list/guangmingxinqu" title="光明楼盘" target="_blank">光明楼盘</a></p>
            		</div>
          	    	<div class="links-friendly-item clearfix dn ">
            			<p><a href="http://nanjing.qfang.com/sale" title="南京二手房" target="_blank">南京二手房</a></p>
            			<p><a href="http://shanghai.qfang.com/sale" title="上海二手房" target="_blank">上海二手房</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale" title="深圳二手房" target="_blank">深圳二手房</a></p>
            			<p><a href="http://huizhou.qfang.com/sale" title="惠州二手房" target="_blank">惠州二手房</a></p>
            			<p><a href="http://dongguan.qfang.com/sale" title="东莞二手房" target="_blank">东莞二手房</a></p>
            			<p><a href="http://foshan.qfang.com/sale" title="佛山二手房" target="_blank">佛山二手房</a></p>
            			<p><a href="http://zhuhai.qfang.com/sale" title="珠海二手房" target="_blank">珠海二手房</a></p>
            			<p><a href="http://zhongshan.qfang.com/sale" title="中山二手房" target="_blank">中山二手房</a></p>
            			<p><a href="http://qingdao.qfang.com/sale" title="青岛二手房" target="_blank">青岛二手房</a></p>
            			<p><a href="http://beijing.qfang.com/sale" title="北京二手房" target="_blank">北京二手房</a></p>
            			<p><a href="http://suzhou.qfang.com/sale" title="苏州二手房" target="_blank">苏州二手房</a></p>
            			<p><a href="http://hangzhou.qfang.com/sale" title="杭州二手房" target="_blank">杭州二手房</a></p>
            			<p><a href="http://guangzhou.qfang.com/sale" title="广州二手房" target="_blank">广州二手房</a></p>
            		</div>
          	    	<div class="links-friendly-item clearfix dn ">
            			<p><a href="http://guangzhou.qfang.com/rent" title="广州租房" target="_blank">广州租房</a></p>
            			<p><a href="http://nanjing.qfang.com/rent" title="南京租房" target="_blank">南京租房</a></p>
            			<p><a href="http://shanghai.qfang.com/rent" title="上海租房" target="_blank">上海租房</a></p>
            			<p><a href="http://shenzhen.qfang.com/rent" title="深圳租房" target="_blank">深圳租房</a></p>
            			<p><a href="http://huizhou.qfang.com/rent" title="惠州租房" target="_blank">惠州租房</a></p>
            			<p><a href="http://dongguan.qfang.com/rent" title="东莞租房" target="_blank">东莞租房</a></p>
            			<p><a href="http://foshan.qfang.com/rent" title="佛山租房" target="_blank">佛山租房</a></p>
            			<p><a href="http://zhuhai.qfang.com/rent" title="珠海租房" target="_blank">珠海租房</a></p>
            			<p><a href="http://zhongshan.qfang.com/rent" title="中山租房" target="_blank">中山租房</a></p>
            			<p><a href="http://qingdao.qfang.com/rent" title="青岛租房" target="_blank">青岛租房</a></p>
            			<p><a href="http://beijing.qfang.com/rent" title="北京租房" target="_blank">北京租房</a></p>
            			<p><a href="http://suzhou.qfang.com/rent" title="苏州租房" target="_blank">苏州租房</a></p>
            			<p><a href="http://hangzhou.qfang.com/rent" title="杭州租房" target="_blank">杭州租房</a></p>
            		</div>
          	    	<div class="links-friendly-item clearfix dn ">
            			<p><a href="http://suzhou.bendibao.com" title="苏州本地宝" target="_blank">苏州本地宝</a></p>
            			<p><a href="http://www.zxdyw.com/" title="装修网" target="_blank">装修网</a></p>
            			<p><a href="http://www.oppein.cn/" title="家具" target="_blank">家具</a></p>
            			<p><a href="http://www.qizuang.com/" title="装修公司" target="_blank">装修公司</a></p>
            			<p><a href="http://www.bao315.com" title="室内设计" target="_blank">室内设计</a></p>
            			<p><a href="https://nj.lianjia.com/" title="南京房产网" target="_blank">南京房产网</a></p>
            			<p><a href="http://zhuhai.qfang.com/" title="珠海房产网" target="_blank">珠海房产网</a></p>
            			<p><a href="http://www.517.cn" title="沈阳二手房 " target="_blank">沈阳二手房 </a></p>
            			<p><a href="http://www.guojj.com" title="深圳装修" target="_blank">深圳装修</a></p>
            			<p><a href="http://www.whjzw.net/ " title="装修效果图" target="_blank">装修效果图</a></p>
            			<p><a href="http://www.0731fdc.com" title="长沙房产网" target="_blank">长沙房产网</a></p>
            			<p><a href="http://www.szhk.com" title="深港在线" target="_blank">深港在线</a></p>
            			<p><a href="http://www.596fc.com	" title="漳州房产网" target="_blank">漳州房产网</a></p>
            			<p><a href="http://www.jiuzheng.com" title="装修" target="_blank">装修</a></p>
            			<p><a href="http://www.bzw315.com/	" title="装修网	" target="_blank">装修网	</a></p>
            			<p><a href="http://www.haogongzhang.com/" title="装修网" target="_blank">装修网</a></p>
            			<p><a href="http://www.whjzw.net	" title="武汉装修网" target="_blank">武汉装修网</a></p>
            			<p><a href="http://www.juwai.com	" title="海外房产网" target="_blank">海外房产网</a></p>
            			<p><a href="http://www.zhuozhoufangchan.com/	" title="涿州房产网" target="_blank">涿州房产网</a></p>
            			<p><a href="http://www.shenchuang.com/	" title="深圳之窗" target="_blank">深圳之窗</a></p>
            			<p><a href="http://shenzhen.8684.cn/	" title="深圳公交查询" target="_blank">深圳公交查询</a></p>
            			<p><a href="https://www.tianqi.com/shenzhen/" title="深圳天气" target="_blank">深圳天气</a></p>
            			<p><a href="https://shenzhen.anjuke.com/" title="深圳房产" target="_blank">深圳房产</a></p>
            			<p><a href="http://www.0755rc.com	" title="深圳招聘网" target="_blank">深圳招聘网</a></p>
            			<p><a href="http://www.muniao.com/" title="日租公寓" target="_blank">日租公寓</a></p>
            			<p><a href="http://www.5khouse.com	" title="昆山房产网" target="_blank">昆山房产网</a></p>
            			<p><a href="http://hangzhou.fangtoo.com/" title="杭州房产网" target="_blank">杭州房产网</a></p>
            			<p><a href="http://www.0772fang.com" title="柳州房产网" target="_blank">柳州房产网</a></p>
            			<p><a href="http://www.0572home.com/	" title="德清房产网" target="_blank">德清房产网</a></p>
            			<p><a href="http://baike.qfang.com/shuyu/" title="房产术语" target="_blank">房产术语</a></p>
            			<p><a href="http://baike.qfang.com/renwu/" title="房地产人物" target="_blank">房地产人物</a></p>
            			<p><a href="http://www.51gaifang.com/" title="房屋设计图" target="_blank">房屋设计图</a></p>
            			<p><a href="http://esf.xmhouse.com	" title="厦门二手房" target="_blank">厦门二手房</a></p>
            			<p><a href="http://yipu.com.cn/" title="商业地产" target="_blank">商业地产</a></p>
            			<p><a href="http://www.lsfc.net.cn" title="嘉州房产网" target="_blank">嘉州房产网</a></p>
            			<p><a href="http://www.tuliu.com/	" title="土地流转" target="_blank">土地流转</a></p>
            			<p><a href="http://www.to8to.com" title="土巴兔装修网" target="_blank">土巴兔装修网</a></p>
            			<p><a href="http://fc.0372.cn" title="安阳房产网" target="_blank">安阳房产网</a></p>
            			<p><a href="http://www.yihaojiaju.com	" title="家居装修" target="_blank">家居装修</a></p>
            			<p><a href="http://shenzhen.qfang.com/sale" title="深圳二手房" target="_blank">深圳二手房</a></p>
            			<p><a href="http://www.grfyw.com/	" title="个人房源网" target="_blank">个人房源网</a></p>
            			<p><a href="http://www.zzjjw.cn" title="九江房价" target="_blank">九江房价</a></p>
            			<p><a href="https://bj.lianjia.com/" title="北京房产网" target="_blank">北京房产网</a></p>
            			<p><a href="http://nn.loupan.com" title="南宁楼盘网" target="_blank">南宁楼盘网</a></p>
            			<p><a href="http://www.99cfw.com	" title="厂房出租网" target="_blank">厂房出租网</a></p>
            		</div>
          	    	<div class="links-friendly-item clearfix dn ">
            			<p><a href="http://shenzhen.qfang.com/fangjia/area" title="深圳房价" target="_blank">深圳房价</a></p>
            			<p><a href="http://beijing.qfang.com/" title="北京房价" target="_blank">北京房价</a></p>
            			<p><a href="http://zhongshan.qfang.com/fangjia/area" title="中山房价" target="_blank">中山房价</a></p>
            			<p><a href="http://zhuhai.qfang.com/fangjia/area" title="珠海房价" target="_blank">珠海房价</a></p>
            			<p><a href="http://suzhou.qfang.com/fangjia/area" title="苏州房价" target="_blank">苏州房价</a></p>
            			<p><a href="http://shanghai.qfang.com/fangjia/area" title="上海房价" target="_blank">上海房价</a></p>
            			<p><a href="http://qingdao.qfang.com/fangjia/area" title="青岛房价" target="_blank">青岛房价</a></p>
            			<p><a href="http://nanjing.qfang.com/fangjia/area" title="南京房价" target="_blank">南京房价</a></p>
            			<p><a href="http://hangzhou.qfang.com/fangjia/area" title="杭州房价" target="_blank">杭州房价</a></p>
            			<p><a href="http://foshan.qfang.com/fangjia/area" title="佛山房价" target="_blank">佛山房价</a></p>
            			<p><a href="http://guangzhou.qfang.com/fangjia/area" title="广州房价" target="_blank">广州房价</a></p>
            		</div>
          </div>
          
           
        </div>
      </div>
      <!-- end friendlylinks -->
      
      <!-- copyright11 -->
      <div class="footer-bottom">
        <p class="footer-bottom-letter">
          <span>按字母检索：</span>
	        <a target="_blank" href="/letter/A"><span>A</span></a>
	        <a target="_blank" href="/letter/B"><span>B</span></a>
	        <a target="_blank" href="/letter/C"><span>C</span></a>
	        <a target="_blank" href="/letter/D"><span>D</span></a>
	        <a target="_blank" href="/letter/E"><span>E</span></a>
	        <a target="_blank" href="/letter/F"><span>F</span></a>
	        <a target="_blank" href="/letter/G"><span>G</span></a>
	        <a target="_blank" href="/letter/H"><span>H</span></a>
	        <a target="_blank" href="/letter/I"><span>I</span></a>
	        <a target="_blank" href="/letter/J"><span>J</span></a>
	        <a target="_blank" href="/letter/K"><span>K</span></a>
	        <a target="_blank" href="/letter/L"><span>L</span></a>
	        <a target="_blank" href="/letter/M"><span>M</span></a>
	        <a target="_blank" href="/letter/N"><span>N</span></a>
	        <a target="_blank" href="/letter/O"><span>O</span></a>
	        <a target="_blank" href="/letter/P"><span>P</span></a>
	        <a target="_blank" href="/letter/Q"><span>Q</span></a>
	        <a target="_blank" href="/letter/R"><span>R</span></a>
	        <a target="_blank" href="/letter/S"><span>S</span></a>
	        <a target="_blank" href="/letter/T"><span>T</span></a>
	        <a target="_blank" href="/letter/U"><span>U</span></a>
	        <a target="_blank" href="/letter/V"><span>V</span></a>
	        <a target="_blank" href="/letter/W"><span>W</span></a>
	        <a target="_blank" href="/letter/X"><span>X</span></a>
	        <a target="_blank" href="/letter/Y"><span>Y</span></a>
	        <a target="_blank" href="/letter/Z"><span>Z</span></a>
        </p>
        <p class="footer-bottom-copyright">Copyright © 2017 qfang.com All Rights Reserved ICP备案号：<a target="_blank" style="color:#999" href = "http://www.miitbeian.gov.cn" rel="nofollow">粤ICP备05067219号-3</a></p>
        <p class="footer-bottom-cpyname" style="float:left;">公司名称：深圳市云房网络科技有限公司</p>
        <style>.ebsgovicon_class{float: left; margin: -1px 10px;} .ebsgovicon_class img{width:20px;height:27.5px}</style>
        <p id="ebsgoviconParent" class="ebsgovicon_class" style="float:left;">
	    <script type="text/javascript" charset="utf-8">
	    	(function(){
			    var scriptEle = document.createElement("script");
			    scriptEle.type = "text/javasctipt";
			    scriptEle.async = true;
			    scriptEle.id = "ebsgovicon";
			    scriptEle.src = "http://szcert.ebs.org.cn/govicon.js?id=a62a7cbc-957d-4104-a773-090987c97144&width=75&height=105&type=1";
			    var x = document.getElementById("ebsgoviconParent");
			    x.insertBefore(scriptEle, x.firstChild);		
			 })();
	    </script>
	    </p>
      </div>
      <!-- /copyright -->
    </div>
  </div>
  <!-- /footer 2016 -->
    
  <div class="dialog-show-wrapper dialog-login" id="dialogLogin">
<!-- 登录弹框 -->
    <div class="dialog-show-inner">
      <div class="icons-dialogshow dialog-show-title">
        <div class="dialog-show-title-text">
          <h3></h3>
        </div>
        <p class="btn-dialogclose"><a href="javascript:;" id="dialogLoginClose"><i class="icons-dialogshow"></i></a></p>
      </div>
      <!-- form -->
      <div class="login-box">
      <div class="login-box-inner" id="loginBox">
        <p class="login-tbs" id="loginTbs">
          <a rel="nofollow" class="cur" href="javascript:;">登录</a>
          <a rel="nofollow" href="javascript:;">账号注册</a>
        </p>
        <div class="login-form">
          <p class="broker-remind-text dn" id="isBroker">你是经纪人哦，不过你可以<a href="javascript:;" onclick="Login.applyToBeAUser();">申请成为用户</a>或者<a href="javascript:;">回到经纪人中心</a></p>
          <!-- 登录 -->
          <div class="login-form-item" id="loginTab">
            
          </div>
          <!-- /登录 -->
          <!-- 注册 -->
          <div class="login-form-item" id="registerTab" style="display:none;">
            <ul>
			  <li class="parts-group">
			    <input class="lf-keyword" type="text" id="telNum12" />
			    <p class="lf-label" id="telNumTip">请输入手机号码</p>
			    <p class="lf-error dn clearfix" id="telNum_ErrorTip">
			      <i class="icons"></i>
			      <span>请填写正确的手机号码</span>
			    </p>
			  </li>
			  <li class="parts-group">
			    <input class="lf-keyword" type="text" id="msgCode"/>
			    <p class="lf-label" id="msgCodeTip">请输入收到的短信验证码</p>
			    <p class="lf-error dn clearfix" id="msgCode_ErrorTip">
			      <i class="icons"></i>
			      <span>请填写短信验证码</span>
			    </p>
			    <p class="mb-msg-code" id="getVCode2">发送验证码</p>
			    <!-- <p class="mb-msg-code" id="getVCode2" onclick="ImgCode.pictureCode(event);">发送验证码</p> -->
			    <!-- 图片验证码 -->
			   
				<!-- end 验证码 -->
			  </li>
			  <li class="parts-group">
			    <input class="lf-keyword" type="password" id="pwd"/>
			    <p class="lf-label" id="regPwdTip">请设置登录密码</p>
			    <p class="lf-error dn clearfix" id="pwd_ErrorTip">
			      <i class="icons"></i>
			      <span>请输入正确的密码,密码长度为6-16个字符</span>
			    </p>
			    <i class="icons eyes" id="eyes"></i>
			  </li>
			  <li class="login-btn registered-btn">
			    <a class="btn-orange btn-dis" onclick="Register.registerSubmit()" href="javascript:;" id="registerBtn">立即注册</a>
			  </li>
			  <li class="registered-remind">注册之后即可获得更周到的一对一专业服务</li>
			</ul>
          </div>
         </div>
         <!-- /注册 -->
        </div>
      </div>
      <!-- /form -->
    </div>
  <!-- /登录弹框 -->
  <script type="text/javascript">
			var base = '/themes/default';
  </script>			
  </div>
  
<!-- Google Tag Manager -->
<noscript>
	<iframe src="//www.googletagmanager.com/ns.html?id=GTM-5NGTRL"
		height="0" width="0" style="display: none; visibility: hidden"></iframe>
</noscript>
<script>
	(function(w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({
			'gtm.start' : new Date().getTime(),
			event : 'gtm.js'
		});
		var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
		j.async = true;
		j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, 'script', 'dataLayer', 'GTM-5NGTRL');
</script>
<!-- End Google Tag Manager -->
<div style="display:none;">

<div class="Home"  id="PageType"></div>
<div class="Shenzhen"  id="PageCity"></div>
<div class="Other"  id="BusiType"></div>
<script>
	var PageType="Home";
	var PageCity="Shenzhen";
	var BusiType="Other";
</script>
</div>

<!--除二手房，租房，写字楼，新房，其他的与首页的一致,但需隐藏”友情链接-->



	<script type="text/javascript" src="/themes/default/scripts/frontend/qfang-common.js?qv=1516188623191"></script>
	<script type="text/javascript" src="/themes/default/scripts/plugin/jquery.cookie.js?qv=1516188623191"></script>
	
	<!--新房用-->
	
	<!--头部公共文件 end-->
<script type="text/javascript">
  	var ctx="";
	var city = "SHENZHEN";
	var shenzhenPath = "http://shenzhen.qfang.com";
	var cityName = "深圳";
	var frontUserName = $.cookie("userName") ;
	var sid = $.cookie("fuid") ;
	var userCenterUrl = "http://user.qfang.com/userManager/collectQuery" ;
	var userExit = "http://user.qfang.com/userLogin/exit" ;
	var userId = $.cookie("userId") ;
</script>

<!-- 转发 -->

  <!--验证码弹出--> 
 <div class="confirm-tips confirm-tips-mbvcode dn" id="imgCode-box">
  <i class="icons confirm-arrow"></i>
  <!--注意：此处有加一个id id="imgCodeClose" 和里面嵌套1个i标签 <i class="icons-dialogshow"></i>-->
  <a class="icons confirm-close" href="javascript:;" id="imgCodeClose">
    <i class="icons-dialogshow"></i>
  </a>
  <div class="confirm-con clearfix">
    <p class="gvcode-area clearfix">
      <span class="gvcode-area-img fl"><img id="gvcode-area-img-ele" src="" width="139" height="28" /></span>
      <span class="gvcode-area-refresh fl"><i class="icons"></i><em>换一张</em></span>
    </p>
    <div class="gvcode-input fl">
      <input class="lf-keyword" type="text" id="imgCodeText">
      <p class="lf-label" id="imgCodeTip">请输入右侧图片内容</p>
      <!--注意：没有错误消息的话--<p class="lf-error dn clearfix">-->
      <p class="lf-error clearfix" style="display:none"><i class="icons"></i><span>验证码有误，请重新输入</span></p>
    </div>
    <p class="confirm-btn fl"><a class="btn-orange" href="javascript:;">提交</a></p>
  </div>
</div>
<!--验证码弹出-->
<script>
$(function(){
	var $box = $('#imgCode-box');
	
	$box.on('click', '#imgCodeClose', function(){
		$.qfangDialog.DialogClose('imgCode-box');
	});
	
	// 刷新验证码
	//gvcode-area
	$box.on('click', '.gvcode-area', function(){
		$box.find('#gvcode-area-img-ele').attr('src', ctx+'/checkCode/getValidateCode?r='+Math.random());
	});
	
	$box.on('click', '#imgCodeText', function(){
		$box.find('.lf-error').hide();
	});
	
	// 点击提交
	$box.on('click', '.btn-orange', function(){
		var code = $.trim($box.find('#imgCodeText').val());
		var $tips = $box.find('.lf-error');
		if (!code) {
			$tips.find('span').text('验证码不能为空');
			$tips.show();
			return false;
		}
		
		var data = {'code':code};
		$.ajax({
			url : ctx + '/checkCode/validate',
			data : data,
			dataType : 'JSON',
			method : 'POST',
			success : function(resp){
				if (resp.value == 0) {
					$tips.hide();
					$box.data('validate', true);
					$.qfangDialog.DialogClose('imgCode-box');
					var el = $($box.data('successEleClick'));
					if (el.length > 0) {
						el.trigger('click');
					}
					//var e2 = $($box.data('successEleFocus'));
					//if (e2.length > 0) {
						//e2.trigger('focus');
					//}
				} else {
					$box.data('validate', false);
					$tips.show().find('span').text('验证码有误，请重新输入');
				}
			},
			error : function(){
				$box.data('validate', false);
			}
			
		});
	});
	

	$('#imgCodeText').bind('keyup', function(){
		if ($(this).val()!='') {
			$(this).next().hide();
		}
	}).bind('blur', function(){
		if ($(this).val()=='') {
			$(this).next().show();
		}
	});
	
});

</script>
  
<!-- end 转发 -->

<!-- 热门搜索SEO html -->
<div class="dn sale">
	<a href="http://shenzhen.qfang.com/garden/sale/57383">布吉阳光花园</a>
	<a href="http://shenzhen.qfang.com/garden/sale/57336">深圳湾畔花园</a>
	<a href="http://shenzhen.qfang.com/garden/desc/61484">瑞泽佳园一期</a>
	<a href="http://shenzhen.qfang.com/garden/desc/58068">中海西岸华府北区</a>
	<a href="http://shenzhen.qfang.com/office/garden/desc/55646">联合广场</a>
</div>

<div class="dn rent">
	<a href="http://shenzhen.qfang.com/rent?keyword=远洋新干线">远洋新干线</a>
	<a href="http://shenzhen.qfang.com/rent?keyword=讯美科技广场">讯美科技广场</a>
	<a href="http://shenzhen.qfang.com/rent?keyword=现代国际">现代国际</a>
	<a href="http://shenzhen.qfang.com/rent?keyword=中洲控股金融中心">中洲控股金融中心</a>
	<a href="http://shenzhen.qfang.com/rent?keyword=苍松大厦">苍松大厦</a>
</div>

<div class="dn newhouse">
	<a href="http://shenzhen.qfang.com/newhouse/list?keyword=信义荔山御园">信义荔山御园</a>
	<a href="http://shenzhen.qfang.com/newhouse/list?keyword=锦绣御园三期">锦绣御园三期</a>
	<a href="http://shenzhen.qfang.com/newhouse/list?keyword=卓越后海金融中心">卓越后海金融中心</a>
	<a href="http://shenzhen.qfang.com/newhouse/list?keyword=佳兆业假日广场">佳兆业假日广场</a>
	<a href="http://shenzhen.qfang.com/newhouse/list?keyword=宏发世纪花园">宏发世纪花园</a>
</div>

<div class="dn officesale">
	<a href="http://shenzhen.qfang.com/office/sale?keyword=安联大厦">安联大厦</a>
	<a href="http://shenzhen.qfang.com/office/sale?keyword=万骏经贸大厦">万骏经贸大厦</a>
	<a href="http://shenzhen.qfang.com/office/sale?keyword=新华保险大厦">新华保险大厦</a>
	<a href="http://shenzhen.qfang.com/office/sale?keyword=赛格广场">赛格广场</a>
	<a href="http://shenzhen.qfang.com/office/sale?keyword=卓越世纪中心">卓越世纪中心</a>
</div>

<div class="dn officerent">
	<a href="http://shenzhen.qfang.com/office/rent?keyword=%E4%B8%9C%E9%A3%8E%E5%A4%A7%E5%8E%A6">东风大厦</a>
	<a href="http://shenzhen.qfang.com/office/rent?keyword=%E5%A4%A7%E4%B8%AD%E5%8D%8E%E5%9B%BD%E9%99%85%E4%BA%A4%E6%98%93%E5%B9%BF%E5%9C%BA">大中华国际交易广场</a>
	<a href="http://shenzhen.qfang.com/office/rent?keyword=%E5%9C%B0%E7%8E%8B%E5%A4%A7%E5%8E%A6">地王大厦</a>
	<a href="http://shenzhen.qfang.com/office/rent?keyword=%E9%B8%BF%E9%9A%86%E4%B8%96%E7%BA%AA%E5%B9%BF%E5%9C%BA">鸿隆世纪广场</a>
	<a href="http://shenzhen.qfang.com/office/rent?keyword=%E4%BA%AC%E5%9F%BA%E6%BB%A8%E6%B2%B3%E6%97%B6%E4%BB%A3%E5%A4%A7%E5%8E%A6">京基滨河时代大厦</a>
</div>
<!-- end 热门搜索SEO html -->

<!--登录使用-->
<script type="text/javascript" src="/themes/default/scripts/frontend/common/jquery.md5.js?qv=1516188623191"></script>
<script type="text/javascript" src="/themes/default/scripts/frontend/user/login.js?qv=1516188623191"></script>
<script type="text/javascript" src="/themes/default/scripts/frontend/user/imgCode.js?qv=1516188623191"></script>
  <!-- /footer 2016 -->
  <!-- toolbars -->
  <div class="toolbars" id="toolbars">
    <ul>
      <li class="tool-fav">
        <span class="tool-icon"><a href="http://user.qfang.com/uc/collectList/all" target="_blank"><i class="icons-sidetools"></i></a></span>
        <p class="tool-desp"><i class="icons-sidetools"></i><span>关注房源</span></p>
      </li>
      <li class="tool-im" id="im-lanuch">
        <span class="tool-icon"><a href="javascript:;"><i class="icons-sidetools"></i></a></span>
        <p class="tool-desp"><i class="icons-sidetools"></i><span>在线沟通</span></p>
        <i class="icon-im msg-remind " id="tools-msg-remind" style="display:none;"></i>
      </li>
      <li class="tool-entruste">
        <span class="tool-icon"><a href="/delegation"><i class="icons-sidetools"></i></a></span>
        <p class="tool-desp"><i class="icons-sidetools"></i><span>我要卖房</span></p>
      </li>
      <li class="tool-app">
        <span class="tool-icon"><a href="javascript:;"><i class="icons-sidetools"></i></a></span>
        <p class="tool-desp"><em class="icons-sidetools"></em><i class="icons-sidetools"></i><span>Q房APP下载</span></p>
      </li>
      <li class="tool-backtop">
        <span class="tool-icon"><a href="javascript:;"><i class="icons-sidetools"></i></a></span>
        <p class="tool-desp"><i class="icons-sidetools"></i><span>返回顶部</span></p>
      </li>
    </ul>
  </div>
  <!-- end toolbars -->
  
  <!-- APP -->
  <div class="app-download">
    <div class="inner">
      <p class="pic-app-download"></p>
      <div class="text-app-download fl">
        <p class="title"><a target="_blank" href="http://app.qfang.com/index.html">下载<span>Q</span>房网APP</a></p>
        <ul class="list clearfix">
          <li>匿名在线咨询</li>
          <li class="right">解答您的房产疑问</li>
          <li>海量真实房源</li>
          <li class="right">获取最新房源信息</li>
        </ul>
      </div>
      <div class="btns-app-download fl">
        <div class="app-qrcode">
          <p class="btns btn-iphone">
            <a href="https://itunes.apple.com/app/id1225814601" target="_blank" rel="nofollow">
              <i class="icons"></i>
              <span>iPhone</span>
            </a>
          </p>
          <p class="btns btn-android">
            <a href="http://dalian.qfang.com/qfangapp/v6_7_0/qfang_android_v6_7_0_qfangMarket.apk" target="_blank" rel="nofollow">
              <i class="icons"></i>
              <span>Android</span>
            </a>
          </p>
          <p class="qr-code"><i class="icons"></i></p>
        </div>
      </div>
      <i class="close-app-download icons fr"></i>
    </div>
  </div>
  <!-- end APP -->
  
  
  <!-- 登录弹框 -->
  <!-- /登录弹框 -->
  <!--验证码弹出-->
  <!--
  <div class="confirm-tips confirm-tips-mbvcode dn" id="imgCode-box">
    <i class="icons confirm-arrow"></i>
    <a class="icons confirm-close" href="javascript:;" id="imgCodeClose">
      <i class="icons-dialogshow"></i>
    </a>
    <div class="confirm-con clearfix">
      <p class="gvcode-area clearfix">
        <span class="gvcode-area-img fl"><img src="/img/vcode-144x32.jpg" width="139" height="28" /></span>
        <span class="gvcode-area-refresh fl" onclick="ImgCode.changeSecurityCode();"><i class="icons"></i><em>换一张</em></span>
      </p>
      <div class="gvcode-input fl">
        <input class="lf-keyword" type="text" id="imgCodeText">
        <p class="lf-label" id="imgCodeTip">请输入右侧图片内容</p>
        <p class="lf-error clearfix"><i class="icons"></i><span>验证码有误，请重新输入</span></p>
      </div>
      <p class="confirm-btn fl"><a class="btn-orange" href="javascript:;" onclick="ImgCode.registerPhoneTrendCode('regist');">提交</a></p>
    </div>
  </div>-->
  <script>
    var baseUrl = '/themes/default';
    var ctx="";
  	var pageType="index";
  	var ctx = "";
  	var city = "SHENZHEN";
  	var frontUserName = $.cookie("userName") ;
  	
  	var baseUrl = '/themes/default';
  	var saleChartDataStr=eval('[{"asOfDate":1501516800000,"month":8,"price":53874,"year":2017},{"asOfDate":1504195200000,"month":9,"price":57364,"year":2017},{"asOfDate":1506787200000,"month":10,"price":55540,"year":2017},{"asOfDate":1509465600000,"month":11,"price":56153,"year":2017},{"asOfDate":1512057600000,"month":12,"price":56442,"year":2017},{"asOfDate":1514736000000,"month":1,"price":56577,"year":2018}]');
  	var saleSets=eval('[6658,6807,5577,6946,8059,0]');
  	
  	<!-- 二手房楼市数据---月份 -->
  	var monthData=[];
  	<!-- 二手房楼市数据---价格 -->
  	var salePrice=[];
  	<!-- 二手房楼市数据---套数-->
  	var saleSet=[];
  	for(var i in saleChartDataStr){
  		var month=saleChartDataStr[i].month;
  		var price=saleChartDataStr[i].price;
  		monthData.push(month+"月");
  		salePrice.push(price);
  	}
  	
  	//如果都是0，那么就省略
  	var flag=0;
  	for(var i in saleSets){
  		var count=saleSets[i];
		if(count==0){
			flag++;
		}
  		saleSet.push(count);
  	}
  	if(flag==saleSets.length){
  		saleSet= [];
  	}
  </script>
    <!--首页房源滚动出现js加载冲突，会导致这部分代码失效，提前-->
    <script type="text/javascript">
	    $(function() {
	      function rolling() {
	        var $rolling = $('.rolling-num');
	        var $first = $rolling.find('.js-rolling-ele:first');
	        var h = 30;
	        $first.animate({
	          'height': 0
	        }, 'slow', function() {
	          $rolling.append($first);
	          $first.height(h);
	        });
	      }
	      setInterval(rolling, 5000);
	    });
    </script>
  <!--验证码弹出-->
  <script type="text/javascript" src="/themes/default/scripts/frontend/common/v2.4/qfang-libs.js?qv=1516188622932"></script>
  <script type="text/javascript" src="/themes/default/scripts/frontend/index/v2.4/qfang-index.js?qv=1516188622932"></script>
  <!-- im的cmd amd和echarts.js的cmd amd有冲突，必须引入在echarts.js之前-->
<!--[if lt IE 10]>
 <script> window["WEB_XHR_POLLING"] = true </script>
<![endif]--> 



<script src="/themes/default/scripts/frontend/details/pcmdata-2.0.0.min.js?qv=1516188622404"></script> 
<script src="/themes/default/scripts/frontend/details/protobuf-min-2.7.js?qv=1516188622404"></script>  	
<script src="/themes/default/scripts/frontend/details/RongIMVoice-2.0.2.min.js?qv=1516188622404"></script> 



<script src="https://cdn.ronghub.com/RongIMLib-2.2.4.min.js?qv=1516188622404"></script>


<script src="/themes/default/scripts/frontend/details/jquery.form.min.js?qv=1516188622404"></script>

<script src="/themes/default/scripts/frontend/details/qfang-im2.js?qv=1516188622404"></script>


<!-- IM -->
  <div class="im-wrap clearfix" id="imWrap">
    <!-- close -->
    <p class="im-close fr clearfix js-closebtn" id="imClose">
      <a href="javascript:;">
        <span>收起</span>
        <i class="icon-im"></i>
      </a>
    </p>
    <!-- end close -->
    <!-- keymenu -->
    <p class="key-choose-menu dn" id="keyChoose" >
      <a class="cur" href="javascript:;">
        <i class="icon-im"></i>
        <span data-txt="Enter">按Enter发送消息</span>
      </a>
      <a href="javascript:;" >
        <i class="icon-im"></i>
        <span data-txt="Shift+Enter">按Shift+Enter发送消息</span>
      </a>
    </p>
    <!-- end keymenu -->
    <!-- 左侧 -->
    <div class="im-side fl">
      <p class="im-side-logo">
        <i class="icon-im"></i>
      </p>
      <div class="contacter-tb" id="contacterTb">
        <ul id="cterTb"></ul>
      </div>
    </div>
    <!-- end 左侧 -->
    <!-- 右侧 -->
    <div class="im-main fl">
      <div class="im-main-header js-dragbar" id="imMainHeader"></div>
      <div class="im-main-con clearfix">
        <!-- 聊天窗口 -->
        <div class="chat-window fl">
          <!-- 接收 -->
          <div class="receive-msg">
            <div id="msgWrap"></div>
          </div>
          <!-- end 接收 -->
          <!-- 发送 -->
          <div class="post-msg">
            <div class="post-msg-tools">
              <div class="face-package fl ">
                <p class="face-trigger" id="faceTriggerBtn">
                  <i class="icon-im"></i>
                </p>
              </div>
              <div class="pic-package fl " id="pic-package">
                <p class="pic-trigger" >
                 <i class="icon-im" id="icon-im" ></i>
                 <form id="pictureUploadFrom" action="/qchat/pictureUpload" enctype="multipart/form-data" methond="post" >
                  <input class="upload-file" id="uploadFile" type="file" name="file"  />
                  </form>
                </p>
              </div>
            </div>
            <div class="post-msg-area">
              <div class="edit-iframe" id="editIframe"></div>
              <div class="post-msg-bottom clearfix">
                <span class="key-tip">小提示：按Enter可以快捷发送</span>
                <div class="trigger-click fr clearfix fr">
                  <a class="post-msg-btn fl" id="postMsgBtn" href="javascript:;">发送</a>
                  <a class="key-choose-btn fl" id="keyChooseBtn" href="javascript:;"><i class="icon-im"></i></a>
                  <span class="post-msg-err" id="err"></span>
                </div>
              </div>
            </div>
          </div>
          <!-- end 发送 -->
        </div>
        <!-- end 聊天窗口 -->
        <!-- 聊天窗口右侧 -->
        <div class="relevant-info fl">
          <div class="relevant-info-con">
            <div id="tabBoxWrap"></div>
          </div>
          <p class="app-qr-code clearfix">
            <i class="icon-im"></i>
           	<span><b>下载Q房APP</b><br/>可以更加便捷的<br/>查看房源</span>
          </p>
        </div>
        <!-- end 聊天窗口右侧 -->
      </div>
    </div>
    <!-- end 右侧 -->
  </div>
  <!-- end IM -->
  
  <!-- 关闭确认 -->
  <div class="dialog-show-wrapper dialog-confirm" id="dialogConfirm">
    <div class="dialog-show-inner">
      <div class="icons-dialogshow dialog-show-title">
        <div class="dialog-show-title-text">
          <h3></h3>
        </div>
        <p class="btn-dialogclose"><a href="javascript:;" id="dialogConfirmClose"><i class="icons-dialogshow"></i></a></p>
      </div>
      <!-- con -->
      <div class="exit-con">
        <p class="exit-con-tips">确定要关闭吗，你将查看不到聊天记录哦～</p>
        <p class="binding-btns exit-con-btns">
          <a class="btn-orange btn-dis fl" id="cancelDel" href="javascript:;">取消</a>
          <a class="btn-orange fr" id="sureDel" href="javascript:;">确定</a>
        </p>
      </div>
      <!-- /con -->
    </div>
  </div>
  <!-- /关闭确认 -->
  <script type="text/javascript" src="/themes/default/scripts/frontend/common/echarts/echarts-2.2.7/echarts.js?qv=1516188622932"></script>
  <script type="text/javascript" src="/themes/default/scripts/common/core.js?qv=1516188622932"></script>
  <script type="text/javascript" src="/themes/default/scripts/common/cookie.js?qv=1516188622932"></script>
  <script src="/themes/default/scripts/frontend/common/guide/guide.js?qv=1516188622932"></script>
  <script type="text/javascript" src="/themes/default/scripts/frontend/AccessRecordLocation.js?qv=1516188622932"></script>
  <script>
  $("#qfang_data_btn").click(function(){
 		qfangIndexRoomSearch(
            "qfang_data_btn",
            "sNum",
            ctx+"/search/getSearchKeyword",
            ctx+"/garden/index/gardenDetail",
            "Garden",
            false,
            false,
            true
        );
  });
	
  $(function() {
    $('#code').click(function() {
      $.qfangDialog.DialogShow('imgCode-box');
    });

    //注意：提交完成 关闭弹窗也调用$.qfangDialog.DialogClose("imgCode-box");
    $('#imgCodeClose').click(function() {
      $.qfangDialog.DialogClose('imgCode-box');
    });
  });
    </script>
  </script>
</body>

</html>
