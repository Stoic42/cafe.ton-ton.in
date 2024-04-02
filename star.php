<?php
$Page = "Cat Gallery";
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cats</title>
<link rel="icon" type="image/gif" href="https://img.icons8.com/?size=60&id=eeqkjTGtABCj&format=gif">

<link rel="stylesheet" href="./cafe_files/w3.css">
<link rel="stylesheet" href="./cafe_files/css">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
  align-content: center;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("https://s2.loli.net/2023/12/29/31vOMJZf2CGnkRX.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}

div.contrast{
  width:100%;
  border:1px solid black;
  position:relative;
  top=10px;
  background: white;
  padding-left:10px;
}
div.contrast:hover{
  border:1px solid white;
  color:white;
  background: black;
}
font.le{
  size:-2;
  color:gray;
}

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  width:100%;
  position: relative;
}

[class^="mySlides"] img {
    width: 100%;
    height: auto;
}

/* Next & previous buttons */
.prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 8px 16px;
    margin-top: -22px;
    color: black; /* Black text color */
    font-weight: bold;
    background-color: white; /* White background color */
    border: 1px solid black; /* Black border for flat style */
    border-radius: 0;
    user-select: none;
    transform: translateY(-50%);
}

.prev:hover, .next:hover {
    background-color: grey; /* Grey background on hover */
}


.prev {
    left: 10px;
}

.next {
    right: 10px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  background-color:black 0.5;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>
<body data-new-gr-c-s-check-loaded="14.1147.0" data-gr-ext-installed="">

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3" style = "width:23%">
      <a href="./index.php" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3" style = "width:23%">
      <a href="https://cafe.ton-ton.in/#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3" style = "width:23%">
      <a href="https://cafe.ton-ton.in/#menu" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s3" style = "width:23%">
      <a href="https://cafe.ton-ton.in/#activity" class="w3-button w3-block w3-black">ACTIVITY</a>
    </div>
    <div class="w3-col s3" style = "width:8%">
      <a href="https://cafe.ton-ton.in/zh.php" class="w3-button w3-block w3-black" >中文</a>
    </div>
  </div>
</div>

<div class="w3-sand w3-grayscale w3-large">
    <div class="w3-content" style="max-width:700px">
          <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">
<?php
    include('connection.php');
    $sql = "SELECT cat.cat_name, cat.cat_pinyin, cat.species, cat.dob, cat.health,
                   album.img_url, album.description, album.photographer_id,
                   accounts.username
            FROM cat
            LEFT JOIN album ON cat.cat_id = album.cat_id
            LEFT JOIN accounts ON album.photographer_id = accounts.id
            ORDER BY cat.cat_name, album.shot_time";

        $result = $con->query($sql);
        // Organize Data in PHP
        $cats = [];
while ($row = $result->fetch_assoc()) {
    $cats[$row['cat_name']]['details'] = [
        'name' => $row['cat_name'],
        'species' => $row['species'],
        'dob' => $row['dob']
        // add more details as needed
    ];
    $cats[$row['cat_name']]['photos'][] = [
        'img_url' => $row['img_url'],
        'description' => $row['description'],
        'photographer_name' => $row['username']
    ];
}

// Generate HTML for Each Cat's Slideshow
$index = 0;
foreach ($cats as $cat) {
    echo "<h3>" . htmlspecialchars($cat['details']['name']) . "</h3>";
    echo "<h4>" . htmlspecialchars($cat['details']['species']) . "</h4>";
    echo "<h6>" . htmlspecialchars($cat['details']['dob']) . "</h6>";
    echo "<div class='slideshow-container'>";

    $counter=0;

    foreach ($cat['photos'] as $photo) {
        echo "<div class='mySlides$index fade' style='width:100%'> ";
        echo "<div class='numbertext'>Photo by: " . htmlspecialchars($photo['photographer_name']) . "</div>";
        echo "<img src='" . htmlspecialchars($photo['img_url']) . "' alt='Photo of " . htmlspecialchars($cat['details']['name']) . "'>";
        echo "<div class='text'>" . htmlspecialchars($photo['description']) . "</div>";
        echo "</div>";
        $counter++;
    }
    //0,1,2,3 = 4 slideshows
    echo "<a class='prev' onclick='plusSlides(-1, $index)'>&#10094;</a>";
echo "<a class='next' onclick='plusSlides(1, $index)'>&#10095;</a>";

echo "</div>"; // Close the slideshow container
$index++;
}
    ?>
  </div>
<br>

</div>
</div>


<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>校园驿站 || Mug and Mentor</p>
  <p>Copied the CSS from <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <a target="_blank" href="https://icons8.com/icon/eeqkjTGtABCj/cat">Cat</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>
</footer>

<script>
document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('.slideshow-container').forEach((slideshow, index) => {
        showSlides(1, index); // Show the first slide of each slideshow
    });
});

let slideIndices = new Array(<?php echo count($cats); ?>).fill(1);

function plusSlides(step, slideshowNo) {
    showSlides(slideIndices[slideshowNo] += step, slideshowNo);
}

function showSlides(n, slideshowNo) {
  let slides = document.querySelectorAll(".mySlides" + slideshowNo);
  if (n > slides.length) { slideIndices[slideshowNo] = 1; }
  if (n < 1) { slideIndices[slideshowNo] = slides.length; }
  slides.forEach(slide => slide.style.display = "none");
  slides[slideIndices[slideshowNo] - 1].style.display = "block";
}



</script>
