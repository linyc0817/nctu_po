<?php
/*
 * Template Name: tour
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewpoint" content="width=device-width, initial-scale=1" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- bootstrap -->
<link href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>

<link href="<?php bloginfo('template_url'); ?>/css/tour.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">

<script src="<?php bloginfo('template_url'); ?>/js/homepage.js"></script>

  <style type="text/css"></style>
</head>
<script type="text/javascript">
  
</script>
<body>
<div class="navbar">
  <div class="triangle"></div>
    <img src="<?php bloginfo('template_url'); ?>/image/logo.png" alt="NCTU logo" width="360" height="75" style="position: relative; left: 6%; top: 1.5em;">

   
<!-- 
    <form>
      <input type="text" name="search" placeholder="">
    </form>

    <div class="language-opt">
      <div class="lang-left lang-normal">中文</div>
      <div class="lang-right lang-choose">EN</div>
    </div> -->

<div id="tool_bar">

    <form>
      <input type="text" name="search" placeholder="">
    </form>


    <div id = "lang">
      <div class="lang-left lang-normal">中文</div>
      <div class="lang-right lang-choose">EN</div>
    </div>

</div>


    
<div class="top" id="top_1">
  <div id="nav1">
    <div id="navid1">關於本室</div>
  </div>
  <div class="navbox1">   <!-- hover出梯形一 -->
    <div id="navboxw1">可 查 閱 本 室 簡 介 、 本<br>室 位 置 、 主 任 簡 介 、<br>本 室 願 景 、 組 織 架<br>構 、 人 員 職 掌 及 工 作<br>成 果 等 資 訊
    </div>
  </div>
  <div class="navbox1_2">   <!-- hover出梯形二 -->
    <div id="navboxw1_2">
      <a href="<?php echo site_url(); ?>/intro/" style="color: #FFFFFF;"><div id="navboxw1_2_1">本 室 簡 介<br></div></a>
      <a href="<?php echo site_url(); ?>/site/" style="color: #FFFFFF;"><div id="navboxw1_2_2">本 室 位 置<br></div></a>
      <div id="navboxw1_2_3">人 員 職 掌<br></div>
      <a href="<?php echo site_url(); ?>/vision/" style="color: #FFFFFF;" ><div id="navboxw1_2_4">本 室 願 景<br></div></a>
      <div id="navboxw1_2_5">工 作 成 果</div>
    </div>
  </div>
  <div class="navbox1_3">   <!-- 點擊展開出梯形三 -->
    <div id="navboxw1_3">
      <!-- <div id="navboxw1_3">本 室 簡 介<br></div>
      <div id="navboxw1_4">本 室 位 置<br></div>
      <div id="navboxw1_5">人 員 職 掌<br></div>
      <div id="navboxw1_6">本 室 願 景<br></div>
      <div id="navboxw1_7">工 作 成 果</div> -->
    </div>
  </div>
  <div class="navbox1_4">   <!-- 點擊展開出梯形四 -->
    <div id="navboxw1_4">
      <!-- <div id="navboxw1_3">本 室 簡 介<br></div>
      <div id="navboxw1_4">本 室 位 置<br></div>
      <div id="navboxw1_5">人 員 職 掌<br></div>
      <div id="navboxw1_6">本 室 願 景<br></div>
      <div id="navboxw1_7">工 作 成 果</div> -->
    </div>
  </div>
</div>
<div class="top" id="top_2">
  <div id="nav2">
    <div id="navid2">訊息公告</div>
  </div>
  <div class="navbox2"></div>
  <div class="navbox2_2"></div>
</div>
<div class="top" id="top_3">
  <div id="nav3">
    <div id="navid3">法令&表格</div>
  </div>
  <div class="navbox3"></div>
  <div class="navbox3_2"></div>
</div>
<div class="top" id="top_4">
  <div id="nav4">
    <div id="navid4_1">人事業務標準</div>
    <div id="navid4_2">作業流程</div>
  </div>
  <div class="navbox4"></div>
  <div class="navbox4_2"></div>
</div>
<div class="top" id="top_5">
  <div id="nav5">
    <div id="navid5_1">公務員廉政</div>
    <div id="navid5_2">倫理規範</div>
  </div>
  <div class="navbox5"></div>
  <div class="navbox5_2"></div>
</div>
<div class="top" id="top_6">
  <div id="nav6">
    <div id="navid6">出勤卡鐘位置</div>
  </div>
  <div class="navbox6"></div>
  <div class="navbox6_2"></div>
</div>
<div class="top" id="top_7">
  <div id="nav7">
    <div id="navid7">留言版</div>
  </div>
  <div class="navbox7"></div>
  <div class="navbox7_2"></div>
</div>

</div>

<!-- <div class="tour_bg_left">  
    <div id="tour_bg_left">可 查 閱 本 室 簡 介 、 本<br>室 位 置 、 主 任 簡 介 、<br>本 室 願 景 、 組 織 架<br>構 、 人 員 職 掌 及 工 作<br>成 果 等 資 訊
    </div>
</div>
 <div class="tour_bg_right">   
    
    <div id="tour_bg_right">可 查 閱 本 室 簡 介 、 本<br>室 位 置 、 主 任 簡 介 、<br>本 室 願 景 、 組 織 架<br>構 、 人 員 職 掌 及 工 作<br>成 果 等 資 訊
    </div>

      <a href="<?php echo site_url(); ?>/intro/" style="color: #FFFFFF;"><div id="navboxw1_2_1">本 室 簡 介<br></div></a>
      <a href="<?php echo site_url(); ?>/site/" style="color: #FFFFFF;"><div id="navboxw1_2_2">本 室 位 置<br></div></a>
      <div id="navboxw1_2_3">人 員 職 掌<br></div>
      <a href="<?php echo site_url(); ?>/vision/" style="color: #FFFFFF;" ><div id="navboxw1_2_4">本 室 願 景<br></div></a>
      <div id="navboxw1_2_5">工 作 成 果</div>
    
  </div> -->


<div class ="layer2">
  <div id = "tour_left">
      <a href="<?php echo site_url(); ?>/intro/" style="color: #FFFFFF;"><div id="navboxw1_2_1">本 室 簡 介<br></div></a>
      <a href="<?php echo site_url(); ?>/site/" style="color: #FFFFFF;"><div id="navboxw1_2_2">本 室 位 置<br></div></a>
      <div id="navboxw1_2_3" style = "left:25%;position: fixed ;color:#F4A22C;">人 員 職 掌<br></div>
      <a href="<?php echo site_url(); ?>/vision/" style="color: #FFFFFF;" ><div id="navboxw1_2_4">本 室 願 景<br></div></a>
      <div id="navboxw1_2_5">工 作 成 果</div>




  </div>

  <div  id = "tour_right"> 
  </div>



</div>







<div class="footer">
  <img src="<?php bloginfo('template_url'); ?>/image/footer.png" alt="footer" width="100%" style="position: fixed; bottom: 0; left: 0;">
</div>

<?php get_template_part('includes/footer'); ?>
</body>
</html>
