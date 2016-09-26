
<footer id="foot">
    <div class="container-fluid foot-top">
        <div class="container">
          <dl>
            <dt>公司信息</dt>
            <dd><a href="">公司介绍</a></dd>
            <dd><a href="">联系我们</a></dd>
            <dd><a href="">加入我们</a></dd>
            <dd><a href="">媒体报道</a></dd>
          </dl><dl>
            <dt>条款和说明</dt>
            <dd><a href="">隐私条款</a></dd>
            <dd><a href="">网站声明</a></dd>
          </dl><dl>
            <dt>友情链接</dt>
            <dd><a href="">春雨医生</a></dd>
            <dd><a href="">奇点网</a></dd>
            <dd><a href="">人民日报韩文版</a></dd>
            <dd><a href="">环球网</a></dd>
          </dl>
          <div class="ewm">
            <span>
              <img src="sj_images/ewm.jpg" width="110" alt="">
              <i>官网微信</i>
            </span><span>
              <img src="sj_images/ewm.jpg" width="110" alt="">
              <i>Android APP</i>
            </span><span>
              <img src="sj_images/ewm.jpg" width="110" alt="">
              <i>Iphone APP</i>
            </span>
          </div>
        </div>
    </div>
    <div class="banquan container">
      <p>Copyright@2016 All Rights Reserved</p>
      <p>版权所有：北京健康盒子科技有限公司  京ICP备100000   京为计网审［2016］第0000号</p>
      <img class="telphone" src="sj_images/telphone.png">
    </div>
</footer>
<div class="fixed-left">
  <span>400-8888-888</span>
  <a class="yy"  id="zxyy" href="javascript:;"><i></i>在线预约</a>
  <a class="lx" href="javascript:;"><i></i>联系客服</a>
  <a class="top" id="backTop" href="javascript:;" title="返回顶部">&nbsp;</a>
</div>
<div id="mcover" style="display: none;">
  <div class="tanchu animated">
    <div id="close">
      <a class="animated" href="javascript:;" title="关闭"></a>
    </div>
    <h3>马上预约</h3>
    <div class="inp">
      <span>就诊时间</span>
      <select>
        <option>2016</option>
      </select>
      <select>
        <option>8月</option>
      </select>
    </div>
    <div class="inp">
      <span>项目类别</span>
      <select>
        <option>体检</option>
        <option>美容</option>
        <option>生育</option>
        <option>保险</option>
        <option>养生</option>
        <option>抗衰老</option>
        <option>抗癌</option>
        <option>其他</option>
      </select>
    </div>
    <div class="inp">
      <span>联系方式</span>
      <input type="text" class="txt" id="number" placeholder="请输入您的电话号码">
    </div>
    <div class="inp">
      <span>验证码</span>
      <input type="text" class="txt yzm">
      <a href="javascript:;" id="getyzm">获取</a>
    </div>
    <input type="submit" class="sub" value="马上预约">
  </div>
</div>
<script>
  $(document).ready(function(){
    $('#backTop').click(function(){
      $('html,body').animate({scrollTop:0},"slow");
    });

    $("#getyzm1").click (function() {
      var re= /^1[3|4|5|8][0-9]\d{4,8}$/;
      var numObj = $('#number1');
      if(re.test(numObj.val()) && numObj.val().length==11){
        var time=60;
        var code=$(this);
        var t=setInterval(function  () {
          time--;
          code.html(time+"S");
          if (time==0) {
            clearInterval(t);
            code.html("重新获取");
          }
        },1000)
      }else{
        alert('请输入正确的手机号码');
        return false;
      }
    });

    //获取短信验证码
    $("#getyzm").click (function() {
      var re= /^1[3|4|5|8][0-9]\d{4,8}$/;
      var numObj = $('#number');
      if(re.test(numObj.val()) && numObj.val().length==11){
        var time=60;
        var code=$(this);
        var t=setInterval(function  () {
          time--;
          code.html(time+"S");
          if (time==0) {
            clearInterval(t);
            code.html("重新获取");
          }
        },1000)
      }else{
       alert('请输入正确的手机号码');
        return false;
      }
    });

    $('#close').click(function(){
      $('#mcover').css({display:'none'}) ;
    });
    $('#close a').hover(function(){
      $(this).addClass('swing');
    },function(){
      $(this).removeClass('swing');
    });
    $('#zxyy').click(function(){
      $('#mcover').css({display:'block'}).find('.tanchu').addClass('fadeInDown');
    });
  });
</script>