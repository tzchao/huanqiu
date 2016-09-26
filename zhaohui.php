<!--技术支持：北京奇奇科技有限公司  www.qiqikeji.com-->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keyword" content="">
    <meta name="description" content="">

    <title>找回密码</title>

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
  <img class="img-responsive" src="sj_images/regist-img.jpg" alt="">
  <div class="reg-box">
    <div class="reg-tit">
      <span>找回密码</span>
    </div>
    <div class="regist-form">
      <form action="zhaohui_success.php">
        <div class="inp">
          <span>手机号：</span>
          <input type="text" class="txt" id="number1" name="">
        </div>
        <div class="inp yzm">
          <span>验证码：</span>
          <input type="text" class="txt" name="">
          <a class="yzm-a btn" id="getyzm1" href="javascript:;">获取验证码</a>
        </div>
        <div class="inp">
          <span>设置新密码：</span>
          <input type="password" class="txt" name="">
        </div>
        <div class="inp">
          <span>确认新密码：</span>
          <input type="password" class="txt" name="">
        </div>
        <div class="inp">
          <label>
            <input type="checkbox" checked="">
            我已阅读并同意<a href="javascript:;">《环球医城网站用户服务协议》</a>
          </label>
        </div>
        <div class="inp submit">
          <input type="submit" class="btn" value="提交">
        </div>
      </form>
    </div>
  </div>
</div>
<?php
  include('footer.php');
?>

</body>
</html>