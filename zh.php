<!DOCTYPE html>
<!-- saved from url=(0024)http://cafe.ton-ton.in/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>校园驿站||Mug and Mentor</title>
<link rel="icon" type="image/x-icon" href="https://img.icons8.com/?id=37211&amp;format=png&amp;size=96&amp;name=icons8-cafe-96.png&amp;fromSite=true">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./cafe_files/w3.css">
<link rel="stylesheet" href="./cafe_files/css">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("https://s2.loli.net/2023/12/29/8JeQITSslgbBRYf.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}
</style>
</head>
<body data-new-gr-c-s-check-loaded="14.1147.0" data-gr-ext-installed="">

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3" style = "width:23%">
      <a href="#home" class="w3-button w3-block w3-black" >首页</a>
    </div>
    <div class="w3-col s3"  style = "width:23%">
      <a href="#about" class="w3-button w3-block w3-black">简介</a>
    </div>
    <div class="w3-col s3" style = "width:23%">
      <a href="#menu" class="w3-button w3-block w3-black" >菜单</a>
    </div>
    <div class="w3-col s3" style = "width:23%">
      <a href="#activity" class="w3-button w3-block w3-black" >活动</a>
    </div>
    <div class="w3-col s3" style = "width:8%">
      <a href="https://cafe.ton-ton.in/" class="w3-button w3-block w3-black">English</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Open from 10am to 8pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px;text-shadow: #FFFFFF 1px 0 10px;-webkit-text-stroke:2px black">校园<br>驿站</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Jilin University - Lambton College</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">简介</span></h5>
    <p>学校的咖啡馆在最近翻修啦！最大的更新就是多来了几只可爱的小猫。欢迎师生来此享用美食，或者在猫猫的陪伴下放松心情、学习和工作！</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"我们把价格压到最低，就是为了大家能毫无心理负担地前来休憩和作业。" </i></p>
      <p>店长：Alice</p>
    </div>
    <img loading="lazy" src="https://s2.loli.net/2023/12/29/31vOMJZf2CGnkRX.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>营业时间:</strong> 工作日开到晚上8点, 节假日或周末晚上6点打烊。</p>
    <p><strong>地址:</strong>吉林大学莱姆顿学院</p>
  </div>
</div>

<!-- Menu Container -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">

    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">菜单</span></h5>

    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, &#39;Food&#39;);" id="myLink">
        <div class="w3-col s6 tablink w3-dark-grey" style="width: 33%;">餐品</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, &#39;Beverage&#39;);">
        <div class="w3-col s6 tablink" style="width: 33%;">饮品</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, &#39;Coffee&#39;);">
        <div class="w3-col s6 tablink" style="width: 33%;">咖啡</div>
      </a>
    </div>

    <div id="Food" class="w3-container menu w3-padding-48 w3-card" style="text-align: center; display: block;">
      <h5>蛋挞</h5>
      <p class="w3-text-grey">¥4/个；¥10/3个</p><br>

      <h5>水果批萨</h5>
      <p class="w3-text-grey">¥29</p><br>

      <h5>黑椒牛肉批萨</h5>
      <p class="w3-text-grey">¥39</p><br>

      <h5>培根批萨</h5>
      <p class="w3-text-grey">¥39</p><br>

      <h5>金枪鱼批萨</h5>
      <p class="w3-text-grey">¥39</p><br>

      <h5>薯条</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>薯格</h5>
      <p class="w3-text-grey">¥10</p><br>

      <h5>烤鸡翅</h5>
      <p class="w3-text-grey">¥10</p><br>

      <h5>鸡米花</h5>
      <p class="w3-text-grey">¥10</p><br>

      <h5>鸡块</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>鸡排</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>蝴蝶虾</h5>
      <p class="w3-text-grey">¥12</p><br>

      <h5>鱼子酱虾球</h5>
      <p class="w3-text-grey">¥12</p><br>

      <h5>煎蛋</h5>
      <p class="w3-text-grey">¥2</p><br>

      <h5>意大利面</h5>
      <p class="w3-text-grey">¥18</p><br>

      <h5>黑椒牛柳饭<text style="color:red;size:60%;text-shadow: #FC0 1px 0 10px;"><sup><b>New!</b></sup></text></h5>
      <p class="w3-text-grey">¥18</p><br>

      <h5>咖喱饭</h5>
      <p class="w3-text-grey">¥15</p><br>

      <h5>芝士玉米</h5>
      <p class="w3-text-grey">¥10</p><br>

      <h5>水果沙拉</h5>
      <p class="w3-text-grey">¥15</p><br>

    </div>

    <div id="Beverage" class="w3-container menu w3-padding-48 w3-card" style="text-align: center; display: none;">
      <h5>金桔柠檬汁</h5>
      <p class="w3-text-grey">(特价) ¥6</p><br>

      <h5>百香芒果汁</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>橘子乳酸菌</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>西柚乳酸菌</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>芒果乳酸菌</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>百香果乳酸菌</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>热牛奶</h5>
      <p class="w3-text-grey">(Special offer) ¥5</p><br>

      <h5>桂圆红枣茶</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>蜂蜜柚子茶</h5>
      <p class="w3-text-grey">¥8</p><br>

    </div>

    <div id="Coffee" class="w3-container menu w3-padding-48 w3-card" style="text-align: center; display: none;">
      <h5>美式咖啡</h5>
      <p class="w3-text-grey">(特价) ¥9.9</p><br>

      <h5>意式浓缩咖啡</h5>
      <p class="w3-text-grey">¥12</p><br>

      <h5>拿铁</h5>
      <p class="w3-text-grey">¥15</p><br>

      <h5>卡布奇诺</h5>
      <p class="w3-text-grey">¥15</p><br>

      <h5>焦糖玛奇朵</h5>
      <p class="w3-text-grey">¥15</p><br>

      <h5>生椰拿铁</h5>
      <p class="w3-text-grey">¥15</p><br>

      <h5>橙C美式</h5>
      <p class="w3-text-grey">(特价) ¥9.9</p><br>

    </div>

    <img loading="lazy" src="https://s2.loli.net/2023/12/29/cLfltERKP9XhpGU.jpg" style="width:100%;max-width:1000px;margin-top:32px;">
  </div>
</div>

<!-- Contact/Area Container -->
<div class="w3-container" id="activity" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">活动</span></h5>
    <p>屯里通将携手校园驿站，倾听大家的声音。后期将筹办Workshop、观影、咖啡师观影等活动，敬请期待和留言！</p>
    <img loading="lazy" src="https://s2.loli.net/2024/01/01/76jlpEDxTRSio3F.jpg" class="w3-image" style="width:100%">
    <p><span class="w3-tag">注意！!</span> 我们为任何大型或小型活动提供全方位餐饮服务。我们将尽力考虑大家的意见。</p>
    <p><strong>预订</strong>座位，询问今日特价，或者留言！</p>
    <form action="./action_page.php" target="_blank" method="post">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder ="姓名" required="" name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="tel" placeholder ="电话" required="" name="Mobile"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="人数" required="" name="People"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="日期和时间" required="" name="date" value="<?php
      date_default_timezone_set("Asia/Hong_Kong");
      echo date("Y-m-d") . "T" . date("H:i");
      ?>"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="消息或特殊要求" required="" name="Message"></p>
      <p><button class="w3-button w3-black" type="submit">发送</button></p>
    </form>
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>校园驿站 || Mug and Mentor</p>
  <p>Copied the CSS from <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <a target="_blank" href="https://icons8.com/icon/37211/cafe">Cafe</a> icon by <a target="_blank" href="https://icons8.com/">Icons8</a>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>


    </style><div aria-label="grammarly-integration" role="group" tabindex="-1" class="grammarly-desktop-integration" data-content="{&quot;mode&quot;:&quot;full&quot;,&quot;isActive&quot;:true,&quot;isUserDisabled&quot;:false}"></div></template></grammarly-desktop-integration></html>
