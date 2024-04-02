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
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3" style = "width:23%">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3" style = "width:23%">
      <a href="#menu" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s3" style = "width:23%">
      <a href="#activity" class="w3-button w3-block w3-black">ACTIVITY</a>
    </div>
    <div class="w3-col s3" style = "width:8%">
      <a href="./zh.php" class="w3-button w3-block w3-black" >中文</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Open from 8am to 8pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">Cat<br>Cafe</span>
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
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE CAFE</span></h5>
    <p>The Cafe was recently renovated to host the faculty staff and students on campus. </p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"We've lowered our prices to the minimum, so that everyone can come to rest and work without any financial burden." </i></p>
      <p>Manager of the Café: Alice</p>
    </div>
    <img loading="lazy" src="https://s2.loli.net/2023/12/29/31vOMJZf2CGnkRX.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>Opening hours:</strong> weekdays from 8am to 8pm, weekends to 7pm</p>
    <p><strong>Address:</strong> JULC, China</p>
  </div>
</div>

<!-- Menu Container -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">

    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">THE MENU</span></h5>

    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, &#39;Food&#39;);" id="myLink">
        <div class="w3-col s6 tablink w3-dark-grey" style="width: 33%;">Food</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, &#39;Beverage&#39;);">
        <div class="w3-col s6 tablink" style="width: 33%;">Beverage</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, &#39;Coffee&#39;);">
        <div class="w3-col s6 tablink" style="width: 33%;">Coffee</div>
      </a>
    </div>

    <div id="Food" class="w3-container menu w3-padding-48 w3-card" style="text-align: center; display: block;">
      <h5>Egg Tart</h5>
      <p class="w3-text-grey">¥10 for 3</p><br>

      <h5>Fruit Pizza</h5>
      <p class="w3-text-grey">¥29</p><br>

      <h5>Black Pepper Beef Pizza<text style="color:red;size:60%;text-shadow: #FC0 1px 0 10px;"><sup><b>New!</b></sup></text></h5>
      <p class="w3-text-grey">¥39</p><br>

      <h5>Bacon Pizza</h5>
      <p class="w3-text-grey">¥39</p><br>

      <h5>Tuna Pizza</h5>
      <p class="w3-text-grey">¥39</p><br>

      <h5>French Fries</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>Potato lattice</h5>
      <p class="w3-text-grey">¥10</p><br>

      <h5>Roasted chicken wings</h5>
      <p class="w3-text-grey">¥10</p><br>

      <h5>Popcorn chicken</h5>
      <p class="w3-text-grey">¥10</p><br>

      <h5>Chicken nuggests</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>Chicken stick</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>Fried butterfly shape shrimp</h5>
      <p class="w3-text-grey">¥12</p><br>

      <h5>Shrimp balls with caviar</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>Fried egg</h5>
      <p class="w3-text-grey">¥2</p><br>

      <h5>Pasta</h5>
      <p class="w3-text-grey">¥18</p><br>

      <h5>Rice with beef and black pepper</h5>
      <p class="w3-text-grey">¥18</p><br>

      <h5>Curry rice</h5>
      <p class="w3-text-grey">¥15</p><br>

      <h5>Cheese corn</h5>
      <p class="w3-text-grey">¥10</p><br>

      <h5>Fruit Salad</h5>
      <p class="w3-text-grey">¥15</p><br>

    </div>

    <div id="Beverage" class="w3-container menu w3-padding-48 w3-card" style="text-align: center; display: none;">
      <h5>Kamquat &amp; Lemon Juice</h5>
      <p class="w3-text-grey">(Special offer) ¥6</p><br>

      <h5>Passion fruit &amp; Mango Juice</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>Orange lactobacillus drink</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>Grapefruit lactobacillus drink</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>Mango lactobacillus drink</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>Passion fruit lactobacillus drink</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>Hot milk</h5>
      <p class="w3-text-grey">(Special offer) ¥5</p><br>

      <h5>Longan red date tea</h5>
      <p class="w3-text-grey">¥8</p><br>

      <h5>Honey pomelo tea</h5>
      <p class="w3-text-grey">¥8</p><br>

    </div>

    <div id="Coffee" class="w3-container menu w3-padding-48 w3-card" style="text-align: center; display: none;">
      <h5>Americano</h5>
      <p class="w3-text-grey">(Special offer) ¥9.9</p><br>

      <h5>Espresso</h5>
      <p class="w3-text-grey">¥12</p><br>

      <h5>Latte</h5>
      <p class="w3-text-grey">¥15</p><br>

      <h5>Cappuccino</h5>
      <p class="w3-text-grey">¥15</p><br>

      <h5>Caramel Macchiato</h5>
      <p class="w3-text-grey">¥15</p><br>

      <h5>Coconut Latte</h5>
      <p class="w3-text-grey">¥15</p><br>

      <h5>Orange C Americano</h5>
      <p class="w3-text-grey">(Special offer) ¥9.9</p><br>

    </div>

    <img loading="lazy" src="https://s2.loli.net/2023/12/29/cLfltERKP9XhpGU.jpg" style="width:100%;max-width:1000px;margin-top:32px;">
  </div>
</div>

<!-- Contact/Area Container -->
<div class="w3-container" id="activity" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">ACTIVITY</span></h5>
    <p>The cafe opens from 8am to 8pm during workdays. </p>
    <p>On holidays and weekends, it closes at 6pm.</p>
    <img loading="lazy" src="https://s2.loli.net/2024/01/01/76jlpEDxTRSio3F.jpg" class="w3-image" style="width:100%">
    <p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
    <p><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
    <form action="./action_page.php" target="_blank" method="post">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required="" name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="tel" placeholder ="Mobile" required="" name="Mobile"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required="" name="People"></p>
      <p>
          <input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="<?php
          date_default_timezone_set("Asia/Hong_Kong");
          echo date("Y-m-d") . "T" . date("H:i");
          ?>">
      </p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required="" name="Message"></p>
      <p><button class="w3-button w3-black" type="submit">SEND MESSAGE</button></p>
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



</html>
