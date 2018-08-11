<?php
/*
 * Template Name: homepage
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
<link href="<?php bloginfo('template_url');?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php bloginfo('template_url');?>/bootstrap/js/bootstrap.min.js"></script>

<link href="<?php bloginfo('template_url');?>/css/homepage.css" rel="stylesheet">
<link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet">

<script src="<?php bloginfo('template_url');?>/js/homepage.js"></script>

  <style type="text/css"></style>
</head>
<script type="text/javascript">

</script>
<body>

<div class="navbar">
  <div class="triangle"></div>

  <a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url');?>/image/logo.png" alt="NCTU logo" width="360" height="75" style="position: relative; left: 6%; top: 1.5em;"></a>


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

  <div class="navbox3"><!-- 法令左側 -->
    <div style="
    position: fixed;
    top: 35vh;
    font-size: 18px;
    margin-left: 50px;
    letter-spacing: 0.3em;
    width:220px;
    color: white;">
    可查閱相關法律規章，並下載與該法規相關之表格</div>
  </div>

  <div class="navbox3_2"><!-- 法令右側 -->
    <div id="decree-flex-container" style="position: fixed; top:25%;">
        <div id="type">
            <p class="decree-item mouse-hover">
                教育/研究人員
            </p>
            <p class="decree-item mouse-hover">
                公務人員
            </p>
            <p class="decree-item mouse-hover">
                適用勞基法人員
            </p>
        </div>
        <div id="cat">
            <p class="decree-item mouse-hover">組織、任用、報到、留職停薪</p>
        </div>
    </div>
    <!-- 法規第二層 -->
    <div id="decree-left decree-details">

    </div>
    <div id="decree-right decree-details">

    </div>

  </div>
</div>
<!-- <div class="top" id="top_4">
  <div id="nav4">
    <div id="navid4_1">人事系統</div>
    <div id="navid4_2">作業流程</div>
  </div>
  <div class="navbox4">
    <div id="navboxw4"> 可 查 閱 重 要 訊 息 、 業 <br>務 訊 息 、 活 動 訊 息 、<br>法 規 訊 息 及 友 校 訊 息
    </div>
  </div>
  <div class="navbox4_2">
    <div id="navboxw4_2">

    </div>
  </div>
</div> -->
<!-- <div class="top" id="top_5">
  <div id="nav5">
    <div id="navid5_1">公務員廉政</div>
    <div id="navid5_2">倫理規範</div>
  </div>
  <div class="navbox5">
    <div id="navboxw5"> 查 閱 公 務 員 廉 政 倫 理<br>規 範 相 關 法 令 規 章
    </div>
  </div>
  <div class="navbox5_2">
    <div id="navboxw5_2">
      <a href="<?php echo site_url(); ?>/rules/" style="color: #FFFFFF;"><div id="navboxw5_2_1">條 文 及 總 說 明<br></div></a>
      <a href="<?php echo site_url(); ?>/questions/" style="color: #FFFFFF;"><div id="navboxw5_2_2">問 答 輯<br></div></a>
      <a href="<?php echo site_url(); ?>/process/" style="color: #FFFFFF;"><div id="navboxw5_2_3">受 贈 財 務、飲 宴 應 酬、請 託 關 說 及 其 他 廉 正 倫 理 事 件 處 理 程 序<br></div></a>
      <a href="<?php echo site_url(); ?>/links/" style="color: #FFFFFF;"><div id="navboxw5_2_4">相 關 連 結<br></div></a>
    </div>
  </div>
</div> -->
<div class="top" id="top_6">
  <div id="nav6">
    <div id="navid6">出勤卡鐘位置</div>

  </div>
  <div class="navbox6"></div>
  <div class="navbox6_2"></div>
  <div class="navbox6_map">

    <div class="map1" style="background-image: url(<?php bloginfo('template_url');?>/image/clock_map_1.png");"></div>
    <button id="close">X</button>

    <div  id=c_navi>
      <ul>
        <li>
          <span>Menu1</span>
      <ul>
        <li>Menu1_1</li>
        <li>Menu1_2</li>
      </ul>
        </li>

      </ul>
    </div>

  </div>
</div>
<div class="top" id="top_7">
  <div id="nav7">
    <div id="navid7">留言版</div>
  </div>
  <div class="navbox7">
    <!-- <hr style=" border: 1px solid #EA9C32; position: fixed; top: 30%; left: 5%; width: 10%;"> -->
    <div class ="msg-board-div">

    <!-- 後端function -->
    <?php
function hasNextP($text)
{
    return (strpos($text, "<p>") !== false);
}
function getAllP($text)
{
    $all = array();
    $start_pos = 0;

    while (hasNextP($text)) {
        $start = strpos($text, "<p>", $start_pos) + 3;
        $length = strpos($text, "</p>", $start) - $start;
        //echo $length . " ";
        $string = substr($text, $start, $length);

        $all[] = $string;
        $startpos = $start + $length + 5;
        $text = substr($text, $startpos);
    }

    return $all;
}

?>

    <!-- 其他問題 -->
    <?php
$my_postid = 98; //This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
$all = getAllP($content);
foreach ($all as &$text) {
    $print = '<div class="msg-board-content other-questions" style="display:none">' . $text . '</div>';
    echo ($print);
}
?>
    <!-- 約用人員 -->
    <?php
$my_postid = 104; //This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
$all = getAllP($content);
foreach ($all as &$text) {
    $print = '<div class="msg-board-content personnel" style="display:none">' . $text . '</div>';
    echo ($print);
}
?>
<!-- 專兼任教師 -->
    <?php
$my_postid = 106; //This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
$all = getAllP($content);
foreach ($all as &$text) {
    $print = '<div class="msg-board-content teachers" style="display:none">' . $text . '</div>';
    echo ($print);
}
?>

    </div>

    <div id="navboxw7_1" class="navbox7-left">出國申請</div>
    <div id="navboxw7_2" class="navbox7-left">全時工讀生</div>
    <div id="navboxw7_3" class="navbox7-left">其他問題</div>
    <div id="navboxw7_4" class="navbox7-left">研發替代役</div>
    <div id="navboxw7_5" class="navbox7-left">約用人員</div>
    <div id="navboxw7_6" class="navbox7-left">差勤</div>
    <div id="navboxw7_7" class="navbox7-left">專兼任計畫人員</div>
    <div id="navboxw7_8" class="navbox7-left">專兼任教師</div>
    <div id="navboxw7_9" class="navbox7-left">博士後研究員</div>
    <div id="navboxw7_10" class="navbox7-left">離職問題</div>
    <div id="navboxw7_11" class="navbox7-left"><hr style=" border: 1px solid #EA9C32; position: fixed; top: 85%; left: 0%; width: 8%;">留言</div>
    <!-- <hr style=" border: 1px solid #EA9C32; position: fixed; top: 30%; left: 35%; width: 45%;" > -->
    <div id="navboxrw7_1">可以左方分類查閱常見問題之相關解答，如需留言請點選左下方留言鈕。</div>

  </div>
</div>

<div class="hp-img_wrapper">


  <div class="navbox2"></div>
  <div class="navbox2_2"></div>

<img id="close-button" src="<?php bloginfo('template_url');?>/image/close-button.png" alt="close button" >
<div class="bgd" style="background-image: url(<?php bloginfo('template_url');?>/image/picture.jpg");">

<!-- 左欄抓文章 -->
<?php
function debug_to_console($data)
{
    $output = $data;
    if (is_array($output)) {
        $output = implode(',', $output);
    }

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
function leftSideBarMsgs()
{
    $categorys = array("重要訊息", "業務訊息", "法規訊息", "友校訊息");
    $cat_class = array("important-msgs", "business-msgs", "legislation-msgs", "friendSchools-msgs");
    foreach ($categorys as $index => &$catname) {
        $cat_id = get_cat_ID($catname);
        $posts = get_posts(array('category' => $cat_id));
        foreach ($posts as $post) {
            $content = get_post($post->ID)->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
            $all = getAllP($content);
            foreach ($all as &$text) {

                $print = '<div class="' . $cat_class[$index] . ' left-side-bar-msgs">' . $text . '</div>';
                $date = get_the_date('Y-m-d', $post->ID);
                echo ('<div class="' . $cat_class[$index] . ' left-side-bar-msgs">' . $date . '</div>');
                echo ($print);
            }
        }
    }
}
/*
function importantMsg()
{
$cat_id = get_cat_ID('重要訊息');
$posts = get_posts(array('category' => $cat_id));
foreach ($posts as $post) {
$content = get_post($post->ID)->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
$all = getAllP($content);
foreach ($all as &$text) {

$print = '<div class="important-msgs left-side-bar-msgs">' . $text . '</div>';
$date = get_the_date('Y-m-d', $post->ID);
echo ('<div class="important-msgs left-side-bar-msgs">' . $date . '</div>');
echo ($print);
}
}
}
function businessMsg()
{
$cat_id = get_cat_ID('業務訊息');
$posts = get_posts(array('category' => $cat_id));
foreach ($posts as $post) {

$content = get_post($post->ID)->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
$all = getAllP($content);
foreach ($all as &$text) {
$print = '<div class="business-msgs left-side-bar-msgs">' . $text . '</div>';
$date = get_the_date('Y-m-d', $post->ID);
echo ('<div class="business-msgs left-side-bar-msgs">' . $date . '</div>');
echo ($print);
}
}
}
 */
?>

    <!-- 左欄box -->
  <div class="left-side-bar-bg">

    <div class="left-side-bar-container">
        <div class=" left-side-bar-element " id="important-msgs">
            重要訊息
        </div>
        <div class="left-side-bar-element" id="business-msgs">
            業務訊息
        </div>
        <div class="left-side-bar-element" id="legislation-msgs">
            法規訊息
        </div>
        <div class="left-side-bar-element" id="friendSchools-msgs">
            友校訊息
        </div>
        <div id="line" class="" style="border-style: solid;border-width:0.2px;height: 1px;width: 45%;color: #f4a22c;">


        </div>
        <div class="left-side-bar-element ">
            動態行事曆
        </div>
        <div class="left-side-bar-element ">
            加保人數
        </div>

    </div>
</div>
<div class="right-bg">
<?php
leftSideBarMsgs();
?>

</div>
</div>


  <!-- <div class="one"><div class="one_word"> 105年度人事業務績效考核<br>第一組-第二名</div></div>
  <div class="two"><div class="two_word"> 105年度人事業務績效考核<br>第一組-第二名</div></div>
  <div class="three"><div class="three_word"> 本校106年八月份公勞保人數4,876人<br>(職員244人、教師1,267人、駐衛警15人、聘僱人員及其他人員3,237人、技工友...<br></div></div> -->
  <!-- 左欄文字 -->
  <!-- <div id="left_words">
    <div id ="left" style="position: absolute; top: 5%; left: 3%; font-size: 2.0em; z-index: 8; font-weight: 500; color:  #040000;"> 動態</div>
    <div id ="left" style="position: absolute; top: 15%; left: 3%; font-size: 2.0em; z-index: 8; font-weight: 500; color:  #040000;"> 行事曆</div>
    <div id ="left" style="position: absolute; top: 40%; left: 3%; font-size: 2.0em; z-index: 8; font-weight: 500; color:  #040000;"> 工作</div>
    <div id ="left" style="position: absolute; top: 50%; left: 3%; font-size: 2.0em; z-index: 8; font-weight: 500; color:  #040000;"> 成果</div>
    <div id ="left" style="position: absolute; top: 70%; left: 3%; font-size: 2.0em; z-index: 8; font-weight: 500; color:  #040000;"> 加保</div>
    <div id ="left" style="position: absolute; top: 80%; left: 3%; font-size: 2.0em; z-index: 8; font-weight: 500; color:  #040000;"> 人數</div>
    <div id ="left7" style="position: absolute; top: 80%; left: 9%; font-size: 1.7em; z-index: 8; font-weight: 500; color:  #040000; display: block;"> 4,876人</div>
  </div> -->



  <!-- <div id = "right1" style="position: absolute; top: 0%;width:20%;height:20%; right:0; font-size: 1.8em; z-index: 8; font-weight: 500; color:#FFFFFF; background-color: #385D6B;  border-bottom: 2px solid #1E4E5D;">
   <div id ="w1" style="position: absolute; font-size: 1.0em; font-weight: 400; color: #FFFFFF; z-index: 8; left: 33%; top: 20%;">一 般 訊 息</div>
  </div>
  <div id ="rbox1"> text_right1 </div>
  <div id = "right2" style="position: absolute; top: 20%;height:20%;width:20%; right: 0; font-size: 1.8em; z-index: 8; font-weight: 500; color:#FFFFFF; background-color: #385D6B; border-top: 2px solid #1E4E5D;  border-bottom: 2px solid #1E4E5D;">
   <div id ="w2" style="position: absolute; font-size: 1.0em; font-weight: 400; color: #FFFFFF; z-index: 8; left: 33%; top: 20%;">活 動 訊 息</div>
  </div>
  <div id ="rbox2"> text_right2 </div>
  <div id = "right3" style="position: absolute; top: 40%;height:20% ;width:20%;right: 0; font-size: 1.8em; z-index: 8; font-weight: 500; color:#FFFFFF; background-color: #385D6B;  border-top: 2px solid #1E4E5D;  border-bottom: 2px solid #1E4E5D;">
   <div id ="w3" style="position: absolute; font-size: 1.0em; font-weight: 400; color: #FFFFFF; z-index: 8; left: 33%; top: 20%;">法 規 訊 息</div>
  </div>
  <div id ="rbox3"> text_right3 </div>
  <div id = "right4" style="position: absolute; top: 60%;height:20% ;width:20%;right: 0; font-size: 1.8em; z-index: 8; font-weight: 500; color:#FFFFFF; background-color: #385D6B; border-top: 2px solid #1E4E5D;  border-bottom: 2px solid #1E4E5D;">
    <div id ="w4" style="position: absolute; font-size: 1.0em; font-weight: 400; color: #FFFFFF; z-index: 8; left: 33%; top: 20%;">友 校 訊 息</div>
  </div>
  <div id ="rbox4"> text_right4 </div>
  <div id = "right5" style="position: absolute; top: 80%;height:20%; width:20%;right: 0; font-size: 1.8em; z-index: 8; font-weight: 500; color:#FFFFFF; background-color: #385D6B;  border-top: 2px solid #1E4E5D;">
    <div id ="w5" style="position: absolute; font-size: 1.0em; font-weight: 400; color: #FFFFFF; z-index: 8; left: 33%; top: 20%;">業 務 訊 息</div>
  </div>
    <div id ="rbox5"> text_right5 </div>
  </div> -->


  <div class="pic1">
      <div class="picline1"></div>
      <div class="img1">
        <img class="buttom-icon" src="<?php bloginfo('template_url');?>/image/01.png" class="01" alt="01" >
        <div class="text1">
          <p>適用勞基法</p>
          <p>專區</p>
          <br></br>
          <br></br>
          <br></br>

        </div>
    </div>
  </div>


<div class="pic2">
  <div class="picline2"></div>
  <div class="img2">
    <img class="buttom-icon" src="<?php bloginfo('template_url');?>/image/02.png" alt="02">
    <div class="text2">
      <p>外籍教職員</p>
      <p>專區</p>
    </div>
  </div>
</div>

<div class="pic3">
  <div class="picline3"></div>
  <div class="img3 ">
    <img class="buttom-icon" src="<?php bloginfo('template_url');?>/image/03.png" alt="03" >
    <div class="text3">
      <p>兼任教師</p>
      <p>專區</p>
    </div>
  </div>
</div>

<div class="pic4">
  <div class="picline4"></div>
  <div class="img4 ">
    <img class="buttom-icon" src="<?php bloginfo('template_url');?>/image/04.png" alt="04" >
    <div class="text4">
      <p>學習與勞動</p>
      <p>權益專區</p>
    </div>
  </div>
</div>

<div class="pic5">
  <div class="picline5"></div>
  <div class="img5">
    <img class="buttom-icon" src="<?php bloginfo('template_url');?>/image/05.png" alt="05">

    <div class="text5">
      <p>教師升等</p>
      <p>專區</p>
    </div>

  </div>

</div>

<div class="pic6">
  <div class="picline6"></div>
  <div class="img6">
    <img class="buttom-icon" src="<?php bloginfo('template_url');?>/image/06.png" alt="06" >
    <div class="text6">
      <p>退休專區</p>
    </div>
  </div>
</div>

<div class="pic7">
  <div class="picline7"></div>
  <div class="img7">
    <img class="buttom-icon" src="<?php bloginfo('template_url');?>/image/07.png" alt="07">

    <div class="text7">
      <p>福利專區 </p>

      <p>含自強康樂委員會</p>

    </div>
  </div>
</div>


  <!-- </div> -->
    <!-- 下方7個圖示 -->



</div>




</div>



<div id="foot">
  <div id="foot-img"><img src="<?php bloginfo('template_url');?>/image/footer.png" alt="01" style=" position: relative; min-height:10% ; top: 0%; left: 0%; height: 4em;width: 100vw;filter: drop-shadow(0px 0px 0px rgba(0, 0, 0, 1));"></div>

  <div id="foot_left">
    <div id="foot-area1">
        <div class="foot_title"></p></p>本室簡介</p></p></div>
        <div class="foot_link"></p></p>本室簡介|本室位置|人事職掌|</p></p></div>
        <div class="foot_link"></p></p>本室願景|工作成果</p></p></div>


        <div class="foot_title"></p></p>訊息公告</p></p></div>
        <div class="foot_link"></p></p>重要訊息|業務訊息|法規訊息|</p></p></div>
        <div class="foot_link"></p></p>友校訊息</p></p></div>

        <div class="foot_title"></p></p>法令&表格</p></p></div>
        <div class="foot_link"></p></p>教育/研究人員|公務人員</p></p></div>
        <div class="foot_link"></p></p>適用勞基法人員</p></p></div>


    </div>

    <div id="foot-area2">
        <div class="foot_title"></p></p>人事業務標準作業流程(SOP)</p></p></div>
        <div class="foot_link"></p></p>第一組業務|第二組業務</p></p></div>

        <div class="foot_title"></p></p>公務員廉政倫理規範</p></p></div>

        <div class="foot_title"></p></p>出勤卡鐘位置</p></p></div>

        <div class="foot_title"></p></p>留言板&FAQ問答</p></p></div>

    </div>


  </div>


  <div id="foot_right">
    <div id="foot-area3">
      <div class="foot_title"> <p><p>外籍教職員專區</p></p></div>
      <div class="foot_link"> <p><p>訊息│法規&表格</p></p></div>


      <div class="foot_title"> <p><p>兼任教師專區</p></p></div>
      <div class="foot_link"> <p><p>訊息│法規&表格</p></p></div>

      <div class="foot_title"> <p><p>教師升等專區</p></p></div>
      <div class="foot_link"> <p><p>訊息│法規&表格</p></p></div>
    </div>

    <div id="foot-area4">

      <div class="foot_title"> <p><p>學習與勞動權益專區</p></p></div>
      <div class="foot_link"> <p><p>訊息│法規&表格|會議紀錄</p></p></div>



      <div class="foot_title"> <p><p>退休專區</p></p></div>

      <div class="foot_link"> <p><p>教育人員:訊息│法規&表格</p></p></div>
      <div class="foot_link"> <p><p>公務人員訊息│法規&表格</p></p></div>


      <div class="foot_title"> <p><p>福利專區<b>（含自強康樂委員會）</b></p></p></div>
      <div class="foot_link"> <p><p>各類人員福利│訊息|法規&表格</p></p></div>
      <div class="foot_link"> <p><p>社團資訊│會議紀錄|特約廠商</p></p></div>



      <div class="foot_title"> <p><p>員工協助專區</b></p></p></div>
      <div class="foot_link"> <p><p>訊息|法規&表格|網站連結</p></p></div>
    </div>

    <div id="foot-area5">
      <div class="foot_title"> <p><p>適用勞基法專區</b></p></p></div>
      <div class="foot_link"> <p><p>訊息|法規&表格</p></p></div>

      <div class="foot_title"> <p><p>個人資料保護專區</b></p></p></div>
      <div class="foot_link"> <p><p>訊息|法規&表格|網站連結</p></p></div>


      <div class="foot_title"> <p><p>托育專區</b></p></p></div>
      <div class="foot_link"> <p><p>托育簡介|訊息|法規&表格</p></p></div>
      <div class="foot_link"> <p><p>哺乳室介紹</p></p></div>


      <div class="foot_title"> <p><p>線上教學專區</b></p></p></div>
      <div class="foot_link"> <p><p>教學訓練影片|影片課程相關文件</p></p></div>
    </div>

  <div id="foot_bottom">
      30010 新竹市大學路1001號
      最佳瀏覽環境│IE 8 以上版本│建議解析度│1024 x 768
      國立交通大學人事室版權所有，請尊重智慧財產權勿任意轉載
<!--

    <div class="foot_title">關於本室2</div>
    <div class="foot_link">本室簡介|本室位置|人事職掌|本室願景|工作成果</div>
 -->
  </div>
</div>

</div>




<!-- <div class="footer">
  <img src="<?php bloginfo('template_url');?>/image/footer.png" alt="footer" width="100%" style="position: fixed; bottom: 0; left: 0;">
</div> -->

</body>
</html>
