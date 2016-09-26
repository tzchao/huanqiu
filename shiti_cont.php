<!--技术支持：北京奇奇科技有限公司  www.qiqikeji.com-->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keyword" content="">
    <meta name="description" content="">

    <title>实体-详情</title>

<!--    <link href="sj_css/bootstrap.min.css" rel="stylesheet">-->
    <link href="hq_css/animate.min.css" rel="stylesheet">
    <link href="hq_css/base.css" rel="stylesheet">
    <link href="hq_css/style.css" rel="stylesheet">

    <script type="text/javascript" src="hq_js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="hq_js/curr_nav.js"></script>
<script type="text/javascript" src="hq_js/publicJS.js"></script>

    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <style>
    /*首页轮播banner*/
    /***banner*****/
    #banner1{display: block}
    .banner{padding-left:0px;padding-right: 0px; z-index: -1; width: 640px; height: 480px; float: left}
    .banner .banner-min-box .ban-thumb{
      cursor: pointer;
      display:block; float: left;
      height: auto;
      letter-spacing: normal;
      width: 24.9%;
      padding:0 10px;
      box-sizing: border-box;
    }
    .banner .banner-min-box{
      bottom:10px; width: 1170px;
      position: absolute;
      right: 50%;
      margin-right: -585px;
      padding: 0 30px;
    }
    .banner .banner-min-box .ban-thumb img{
      cursor: pointer;
      border:1px solid #fff
    }
    .banner .banner-min-box .ban-thumb img.active{
      border:2px solid #005891;
    }
    .index_focus {
      width: 100%; position: relative;
    }
    .nav_list_active {
      margin-bottom: -78px; -ms-transform: translate(0, 100%) rotate(0deg); transition: all 0.5s ease; -moz-transition: all 0.5s ease; -webkit-transition: all 0.5s ease; -o-transition: all 0.5s ease; -ms-transition: all 0.5s ease; -moz-transform: translate(0, 100%) rotate(0deg); -webkit-transform: translate(0, 100%) rotate(0deg); -o-transform: translate(0, 100%) rotate(0deg);
    }
    .index_focus {
      width: 100%; overflow: hidden; position: relative;
    }
    .focus_pic {
      width: 100%; overflow: hidden;
    }
    .focus_pic ul {
      width: 400%; -ms-transform: translate(0, 0); transition: 500ms; -moz-transition: 500ms; -webkit-transition: 500ms; -o-transition: 500ms; -ms-transition: 500ms; -moz-transform: translate(0, 0); -webkit-transform: translate(0, 0); -o-transform: translate(0, 0);
      list-style: none;
      padding:0px;
      margin-top:0px;
    }
    .focus_pic li {
      width: 25%;  float: left; position: relative;
    }
    .focus_pic li a {
      text-align: center; display: block;
    }
    .focus_btn {
      right: 0px;left:0px; bottom: 5px; position: absolute;
      display: block; text-align: center;
    }
    .focus_btn li {
      background:#ccc; width: 12px; height: 12px; overflow: hidden; margin-right: 1px; display: inline-block; zoom: 1; border-radius: 6px; cursor: pointer;
    }
    .focus_btn li.active {
      background:@c-e96a55;
    }
    .not-active .na-hide {display:none;}
    .ai-banner-font {
      position:absolute;
      left:0;
      top:0;
      width:100%;
      height:100%;
    }

    .index_focus .focus_left,.index_focus .focus_right{display: block; position: absolute; top: 50%; margin-top: -37px; width: 29px; height: 75px;z-index: 9999}
    .index_focus .focus_left{background: url("sj_images/banner-btn-left.png") center no-repeat; left: 0; }
    .index_focus .focus_right{background: url("sj_images/banner-btn-right.png") center no-repeat; right: 0;}
    .index_focus .focus_left:hover,.index_focus .focus_right:hover{background-color: rgba(0,86,147,.8)!important;}


  </style>
</head>
<body style="background-color: #fff;">
<?php
  include('header.php');
?>
<div class="zixun container" style="margin-top: 25px">
  <div class="zixun-cont">
    <div class="mbx">
      <a href="">实体中心</a>>湖北省>武汉市>广埠屯路店
    </div>
    <div class="shiti-desc">
      <div class="banner" id="banner1">
        <div id="index_focus" class="index_focus">
          <a href="javascript:;" class="focus_left"></a>
          <a href="javascript:;" class="focus_right"></a>
          <div class="focus_pic">
            <ul class="clearbox" style="width: 300%; margin-left: -200%;">
              <li class="" id="boxli1" style="width: 33.3333%;">
                <a class="banna" title="" href="">
                  <img src="sj_images/img48.png" width="640" height="480" class="max100Img" alt=""></a>
              </li>
              <li id="boxli1" class="" style="width: 33.3333%;">
                <a class="banna" title="" href="">
                  <img src="sj_images/img48.png" width="640" height="480" class="max100Img" alt=""></a>
              </li>
              <li id="boxli1" class="active1" style="width: 33.3333%;">
                <a class="banna" title="" href="">
                  <img src="sj_images/img48.png" width="640" height="480" class="max100Img" alt=""></a>
              </li>
            </ul>
          </div>
          <div class="focus_btn">
            <ul>
              <li class=""></li>
              <li class=""></li>
              <li class="active"></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="desc">
        <h2>我是店面名称</h2>
        <div><em>地址：</em>湖北省武汉市武昌区广埠屯路3176号</div>
        <div><em>电话：</em>400-888-888</div>
        <div><em>营业时间：</em>9:00-17:00</div>
        <div><em>QQ：</em>123456789</div>
        <div><em>邮箱：</em>123456789@com</div>
      </div>
    </div>
    <div class="cont">
      <h2 style="color: #333333">简介</h2>
      <br>
      <p>跨境电商新政刚满月、跨境电商新政刚满月跨境电商,新政刚满月跨境电商新政刚满月跨境电商新。政刚满月跨境电商新政刚，满月跨境电商新政刚满月跨境电？商新
        跨境电商新政刚满月、跨境电商新政刚满月跨境电商,新政刚满月跨境电商新政刚满月跨境电商新。政刚满月跨境电商新政刚，满月跨境电商新政刚满月跨境电？商新
        跨境电商新政刚满月、跨境电商新政刚满月跨境电商,新政刚满月跨境电商新政刚满月跨境电商新。政刚满月跨境电商新政刚，满月跨境电商新政刚满月跨境电？商新
        跨境电商新政刚满月、跨境电商新政刚满月跨境电商,新政刚满月跨境电商新政刚满月跨境电商新。政刚满月跨境电商新政刚，满月跨境电商新政刚满月跨境电？商新
      </p>
      <br>
      <div class="map">
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=au57zG7s0wDuGByWQwOjmCjv"></script>
        <!--百度地图容器-->
        <div style="width:1024px;height:470px;border:#ccc solid 1px;font-size:12px" id="map"></div>

        <script type="text/javascript">
          //创建和初始化地图函数：
          function initMap(){
            createMap();//创建地图
            setMapEvent();//设置地图事件
            addMapControl();//向地图添加控件
            addMapOverlay();//向地图添加覆盖物
          }
          function createMap(){
            map = new BMap.Map("map");
            map.centerAndZoom(new BMap.Point(116.395107,39.911901),14);
          }
          function setMapEvent(){
            map.enableScrollWheelZoom();
            map.enableKeyboard();
            map.enableDragging();
            map.enableDoubleClickZoom()
          }
          function addClickHandler(target,window){
            target.addEventListener("click",function(){
              target.openInfoWindow(window);
            });
          }
          function addMapOverlay(){
            var markers = [
              {content:"北京市顺义区新顺南大街4号鑫海韵通电器三星（华联超市附近）",title:"北京市欧语大经贸有限公司1",imageOffset: {width:-46,height:-21},position:{lat:39.911901,lng:116.395107}}
            ];
            for(var index = 0; index < markers.length; index++ ){
              var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
              var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
                imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
              })});
              var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
              var opts = {
                width: 200,
                title: markers[index].title,
                enableMessage: false
              };
              var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
              marker.setLabel(label);
              addClickHandler(marker,infoWindow);
              map.addOverlay(marker);
            };
          }
          //向地图添加控件
          function addMapControl(){
            var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
            map.addControl(navControl);
          }
          var map;
          initMap();
        </script>



      </div>
    </div>
    <div class="fenxiang">
      <h2 class="lanmu-tit"><i></i>分享到：</h2>
      <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a></div>
      <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
    </div>
    <div class="comment-input">
      <h2 class="lanmu-tit"><i></i>文章评论：</h2>
      <span class="pl"><i></i>345</span>
      <div class="inp">
        <div class="user">
          <img src="sj_images/user.png"  alt="">
        </div>
        <form>
          <input type="text" class="txt" placeholder="评论一番吧！">
          <input type="button" class="btn" value="发表评论">
        </form>
      </div>
      <ul class="comment-list">
        <li>
          <div class="user"><img src="sj_images/user.jpg" width="63" height="63"></div>
          <h3><span>二狗子</span><i>回复</i><span>文人飘风</span></h3>
          <p>当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。
          当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。
          </p>
          <div class="botm">
            <span class="t"><i></i><b>05-28</b> 17:55</span>
            <span class="z"><i></i><b>268</b></span>
            <span class="p huifu"><i></i><b>回复</b></span>
          </div>
          <div class="input">
            <textarea placeholder="回复：文人飘风"></textarea>
            <div class="anniu">
              <input type="button" class="quxiao" value="取消">
              <input type="button" class=" c" value="评论">
            </div>
          </div>
        </li>
        <li>
          <div class="user"><img src="sj_images/user.jpg" width="63" height="63"></div>
          <h3><span>二狗子</span></h3>
          <p>当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。
          当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。
          </p>
          <div class="botm">
            <span class="t"><i></i><b>05-28</b> 17:55</span>
            <span class="z"><i></i><b>268</b></span>
            <span class="p huifu"><i></i><b>回复</b></span>
          </div>
          <div class="input">
            <textarea placeholder="回复：文人飘风"></textarea>
            <div class="anniu">
              <input type="button" class="quxiao" value="取消">
              <input type="button" class=" c" value="评论">
            </div>
          </div>
        </li>
      </ul>
      <div class="clear"></div>
      <div class="jiazaiMore">加载更多</div>
    </div>

  </div>

</div>


<?php
  include('footer.php');
?>
  <script src="hq_js/slide.js"></script>
<script>
  $('.jiazaiMore').click(function(){
    var $list = $(".comment-list");
    for(var i=0;i<4;i++){
      $list.append(
          '<li>'+
              '<div class="user"><img src="sj_images/user.jpg" width="63" height="63"></div>'+
              '<h3><span>二狗子</span></h3>'+
              '<p>当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。'+
              '当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。当朝不写当朝史，所谓进到岁王为此和。'+
              '</p>'+
              '<div class="botm">'+
              '<span class="t"><i></i><b>05-28</b> 17:55</span>'+
              '<span class="z"><i></i><b>268</b></span>'+
              '<span class="p huifu"><i></i><b>回复</b></span>'+
              '</div>'+
              '<div class="input">'+
              '<textarea placeholder="回复：文人飘风"></textarea>'+
              '<div class="anniu">'+
              '<input type="button" class="quxiao" value="取消">'+
              '<input type="button" class=" c" value="评论">'+
              '</div>'+
              '</div>'+
              "</li>"
      )
    }
  });

  $(document).on('click','.huifu',function(){
    $(this).parent().next('.input').fadeIn();
  });
  $(document).on('click','.quxiao',function(){
    $(this).parent().parent('.input').fadeOut();
  });

  $(function(){
    $("#index_focus").slide();
  });

</script>
</body>
</html>