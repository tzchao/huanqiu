<!--技术支持：北京奇奇科技有限公司  www.qiqikeji.com-->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keyword" content="">
    <meta name="description" content="">

    <title>实体店-地图</title>

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

</head>
<body>
<?php
  include('header.php');
?>
<div class="banner">
  <img class="img-responsive" src="sj_images/banner22.jpg" alt="">
</div>
<div class="main-ny shiti-ny container">
  <div class="shiti">
    <div class="shiti-tit">
      <a class="cur" href="shiti_map.php">实体店网点</a>
      <a class="lb" href="shiti_list.php">实体店列表</a>
    </div>
    <div class="shiti-map">
      <div class="map-l">
        <h2>实体店</h2>
        <ul>
          <li>
            <a href="shiti_cont.php">北京市欧语大经贸有限公司1</a>
            <p class="dz"><i></i>北京市顺义区新顺南大街4号鑫海韵通电器三星（华联超市附近）</p>
            <p><i></i>联系电话：010-69426260</p>
          </li><li>
            <a href="shiti_cont.php">北京市欧语大经贸有限公司2</a>
            <p class="dz"><i></i>北京市顺义区新顺南大街4号鑫海韵通电器三星（华联超市附近）</p>
            <p><i></i>联系电话：010-69426260</p>
          </li><li>
            <a href="shiti_cont.php">北京市欧语大经贸有限公司3</a>
            <p class="dz"><i></i>北京市顺义区新顺南大街4号鑫海韵通电器三星（华联超市附近）</p>
            <p><i></i>联系电话：010-69426260</p>
          </li><li>
            <a href="shiti_cont.php">北京市欧语大经贸有限公司4</a>
            <p class="dz"><i></i>北京市顺义区新顺南大街4号鑫海韵通电器三星（华联超市附近）</p>
            <p><i></i>联系电话：010-69426260</p>
          </li><li>
            <a href="shiti_cont.php">北京市欧语大经贸有限公司5</a>
            <p class="dz"><i></i>北京市顺义区新顺南大街4号鑫海韵通电器三星（华联超市附近）</p>
            <p><i></i>联系电话：010-69426260</p>
          </li><li>
            <a href="shiti_cont.php">北京市欧语大经贸有限公司6</a>
            <p class="dz"><i></i>北京市顺义区新顺南大街4号鑫海韵通电器三星（华联超市附近）</p>
            <p><i></i>联系电话：010-69426260</p>
          </li>
        </ul>
        <div class="fenye">
          <div class="prev-next">
            <a class="l" href="javascript:;"></a>
            <a class="r" href="javascript:;"></a>
          </div>
          <div class="yeshu">1/5</div>
        </div>
      </div>
      <div class="map-r">
        <div class="tit">
          <h2><em>北京-北京市</em>附近共有<em>14</em>家实体店</h2>
          <div class="chaxun">
            <select>
              <option>北京</option>
            </select>
            <select>
              <option>北京市</option>
            </select>
            <input type="button" value="查询">
          </div>
        </div>
        <div class="map">
           <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=au57zG7s0wDuGByWQwOjmCjv"></script>
          <!--百度地图容器-->
          <div style="width:682px;height:620px;border:#ccc solid 1px;font-size:12px" id="map"></div>

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
                {content:"北京市顺义区新顺南大街4号鑫海韵通电器三星（华联超市附近）",title:"北京市欧语大经贸有限公司1",imageOffset: {width:-46,height:-21},position:{lat:39.911901,lng:116.395107}},
                {content:"北京市顺义区新顺南大街4号鑫海韵通电器三星（华联超市附近）",title:"北京市欧语大经贸有限公司2",imageOffset: {width:-46,height:-21},position:{lat:39.902934,lng:116.402293}},
                {content:"北京市顺义区新顺南大街4号鑫海韵通电器三星（华联超市附近）",title:"北京市欧语大经贸有限公司3",imageOffset: {width:-46,height:-21},position:{lat:39.919648,lng:116.428452}},
                {content:"北京市顺义区新顺南大街4号鑫海韵通电器三星（华联超市附近）",title:"北京市欧语大经贸有限公司4",imageOffset: {width:-46,height:-21},position:{lat:39.893081,lng:116.370098}},
                {content:"北京市顺义区新顺南大街4号鑫海韵通电器三星（华联超市附近）",title:"北京市欧语大经贸有限公司5",imageOffset: {width:-46,height:-21},position:{lat:39.893081,lng:116.370098}},
                {content:"北京市顺义区新顺南大街4号鑫海韵通电器三星（华联超市附近）",title:"北京市欧语大经贸有限公司6",imageOffset: {width:-46,height:-21},position:{lat:39.893081,lng:116.370098}},
                {content:"北京市顺义区新顺南大街4号鑫海韵通电器三星（华联超市附近）",title:"北京市欧语大经贸有限公司7",imageOffset: {width:-46,height:-21},position:{lat:39.892417,lng:116.429745}}
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
    </div>
  </div>

</div>


<?php
  include('footer.php');
?>

</body>
</html>