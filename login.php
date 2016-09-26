<!--技术支持：北京奇奇科技有限公司  www.qiqikeji.com-->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keyword" content="">
    <meta name="description" content="">

    <title>登录</title>

<!--    <link href="sj_css/bootstrap.min.css" rel="stylesheet">-->
    <link href="hq_css/animate.min.css" rel="stylesheet">
    <link href="hq_css/base.css" rel="stylesheet">
    <link href="hq_css/style.css" rel="stylesheet">

    <script type="text/javascript" src="hq_js/jquery-1.11.3.min.js"></script>
<!--<script type="text/javascript" src="hq_js/curr_nav.js"></script>-->
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
<div class="log-reg">
  <img class="img-responsive" src="sj_images/login-img.jpg" alt="">
  <div class="box">
    <a class="wx-login" href="javascript:;">通过微信登录</a>
    <div class="or"><b class="l"></b><i>或</i><b class="r"></b></div>
    <form>
      <div class="inp">
        <span class="user"></span>
        <input type="text" class="txt" placeholder="手机">
      </div>
      <div class="inp">
        <span class="pwd"></span>
        <input type="password" class="txt" placeholder="密码">
      </div>
      <div class="wj">
        <label><input type="checkbox" checked>自动登录</label>
        <a href="zhaohui.php">忘记密码？</a>
      </div>
      <input type="submit" class="sub" value="登录">
      <div class="line"></div>
      <div class="zc">
        <span>还没有账号？</span>
        <a href="regist.php">注册</a>
      </div>
    </form>
  </div>
</div>
<?php
  include('footer.php');
?>

</body>
</html>