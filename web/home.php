<?php include "../connect/connect_db.php"; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://css.gg/search.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <!-------->
    <style>
     
      
        .topnav {
  position: relative;
  overflow: hidden;
  background-color: gray;
}

.topnav a {
  float: left;
  color: #fff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #fff;
  color: black;
}

.topnav a.active {
  font-family: "Audiowide", sans-serif;  
  background-color: Gray;
  color: white;
}

.topnav-centered a {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  border-radius: 200px;
  transform: translate(-50%, -50%);
}

.topnav-right {
  float: right;
  
}

/* Responsive navigation menu (for mobile devices) */
@media screen and (max-width: 600px) {
  .topnav a, .topnav-right {
    float: none;
    display: block;
  }
  
  .topnav-centered a {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
  }
}
        .tab-menu{
            
        }
        .img-slide{
           
        }
        * {box-sizing: border-box}
.mySlides1 {
    display: none
}
img {
    vertical-align: middle;
    
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;
}
.tt-box-title {
    text-align: center;
    padding-bottom: 0;
    background-color: #;
    font-family: "Audiowide", sans-serif;
    border-radius: 25px;

    
}
.tt-box-title .tt-title a.title-hoven {
    color: #191919;
    text-emphasis: none;
    text-decoration: none;
    background-color: ;
}
.tems{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    position: relative;
    background-color: ;
}
.tems-items{
    
    padding: 10px;
    border-radius: 25px;
    background-color: #;
}
  .tems-items img{
  border-radius: 20px;
  }
.tu{
    font-family: Geneva, Verdana, sans-serif;
    text-align: center;
    
    border-radius: 25px;
    background-color: #;
   
}
.tems-items p{
    font-family: "Audiowide", sans-serif;
}
footer{
  display: flex;
    background:#333;
    padding: 1rem;
    color: #fff;
}


</style>
</head>
<body>
    <section class="nav-bar">
        <!-- Top navigation -->
<div class="topnav">

<!-- Centered link -->
<div class="topnav-centered">
  <a href="home.php" class="active">RUDDINCAMERA-SHOP</a>
</div>

<!-- Left-aligned links (default) -->
<a href="home.php">หน้าหลัก</a>
<a href="sinkha_tammod.php">สินค้าทั้งหมด</a>
<a href="#news">สินค้าขายดี</a>
<a href="#contact">สินค้ามาแรง</a>

<!-- Right-aligned links -->
<div class="topnav-right">
  <a href="../admin/product_tb/product_select.php">หลังบ้าน</a>
  <a href="https://www.facebook.com/haris.jehmoh.77">ช่องการติดต่อ</a>
  <a href="login.php">About</a>
</div>
</div>
        
    </section>
    <!------------>
    <header class="img-slide">
    <div class="slideshow-container">
  <div class="mySlides1">
    <img src="img/ppp.jpg" style="width:100%">
  </div>

  <div class="mySlides1">
    <img src="img/123.jpg" style="width:100%">
  </div>

  <div class="mySlides1">
    <img src="img/12.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
<script>
let slideIndex = [1,1];
let slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  let i;
  let x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
 </script>
 <div class="tt-box-title"> 
    <h2 class="tt-title">
    <a href="#" class="title-hoven"title=shoall>BRANDS</a>
    </h2>
   </div>

   
<section class="tems">
    <div class="tems-items">
       <a href="product_brand.php?type=18"><img src="img/555.jpg" alt="Card image" style="width:100%"></a>
        <div class="tu">
        <p>CANON</p>
        </div>
    </div> 
    <div class="tems-items">
         <a href="product_brand.php?type=17"><img src="img/nnn.jpg" alt="Card image" style="width:100%"></a>
        <div class="tu">
        <p>NIKON</p>
        </div>
    </div> 
    <div class="tems-items">
       <a href="product_brand.php?type=19"><img src="img/lan.jpg" alt="Card image" style="width:100%"></a>
        <div class="tu">
        </div>
        <center><p>LENS</p></center>
    </div> 
    <div class="tems-items">
       <a href="product_brand.php?type=20"><img src="img/2.jpg" alt="Card image" style="width:100%"></a>
        <div class="tu">
        <p>FUJI FLIM</p>
        </div>
    </div> 
    
    
</section>
 
<div>
<?php include "img_click.php"; ?> 
</div>
  
</header>
    <footer>
        <div>
        <p>&copy;|2022</p>
        <p>ค้นหาร้านค้า</p>
        <p>สมัครเป็นสมาชิก</p>
        <p>ลงทะเบียนเพื่อรับข่าวสาร</p>
        </div>
        <div>
          <p>รับความช่วยเหลือ</p>
          <p>สถานะคำสั่งซื้อ</p>
          <p>การส่งมอบ</p>
        </div>
    </footer>

</body>
</html>