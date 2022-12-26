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
  background-color:  gray;
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
    
  </style>
</head>
<body>

<section class="nav-bar">
        <!-- Top navigation -->
<div class="topnav">

<!-- Centered link -->
<div class="topnav-centered">
  <a href="home.php" class="active">RUDDINCAMERA</a>
</div>

<!-- Left-aligned links (default) -->
<a href="home.php">หน้าหลัก</a>
<a href="#contact">Contact</a>
<a href="#news">News</a>
<a href="#contact">Contact</a>

<!-- Right-aligned links -->
<div class="topnav-right">
  <a href="../admin/product_tb/product_select.php">Search</a>
  <a href="login.php">About</a>
  <a href="login.php">About</a>
</div>
</div>
        
    </section>
  
</body>
</html>