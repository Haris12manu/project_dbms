<?php include "../connect/connect_db.php"; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-------->
    <style>
        .body{
        background-color: #D2691E;
        }
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
       border-radius: 200px;
       top: 50%;
       left: 50%;
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
        .title h2{
            margin: 2%;
           font-family: "Audiowide", sans-serif;
        }
        .row
        {
          margin: 1%;
        }
        

        footer{
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
  <a href="home.php" class="active">RUDDINCAMERA</a>
</div>

<!-- Left-aligned links (default) -->
<a href="home.php">หน้าหลัก</a>
<a href="#contact">สินค้าทั้งหมด</a>
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
        <center>
        <div class="title">
    <h2>NIKON</h2>
   </div>
<div class="container mt-5">
  <div class="row">
  <?php
                try{
                    $sql_select= $conn->prepare("SELECT *  
                    FROM star_tb
                    LEFT JOIN star_brane_tb
                    ON star_tb.star_brane = star_brane_tb.star_brane_id
                    where star_brane_id='17' order by star_id desc limit 8 ");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
   <div class="col-sm-3">
    <div class="card" style="width:250px">
    <img class="card-img-top" src="../admin/product_tb/img/<?php echo $row_select['star_img']; ?>" alt="Card image" style="width=350"height="230px">
    <div class="card-body">
      <h4 class="card-title"><?php echo $row_select['star_name']; ?></h4>
      <p class="card-text">BRANDS|<?php echo $row_select['star_size']; ?></p>
      <p class="card-text"><?php echo $row_select['star_price']; ?>.BHAT</p>
      <a href="" class="btn btn-primary">สั่งสินค้า</a><br>
      <a href="nasohop.php?id=<?php echo $row_select['star_id'];?>">ดูเพิ่มเติม</a>
    </div>
  </div>
  </div>
  <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
</div>
</center>



<br><div class="row"><!-- เริ่มต้น foter -->
              <div class="col-md-2" style="background-color: rgb(240, 255, 255)">
                <font color="#000000">
                <p>ค้นหาร้านค้า</p>
                <p>สมัครเป็นสมาชิก</p>
                <p>ลงทะเบียนเพื่อรับข่าวสาร</p></font>
              </div>
              <div class="col-md-2" style="background-color: rgb(240, 255, 255)">
                <font color="#000000">
                <p>รับความช่วยเหลือ</p>
                <p>สถานะคำสั่งซื้อ</p>
                <p>การส่งมอบ</p>
                <p>การคืนสินค้า</p>
                <p>ทางเลือกการชำระเงิน</p>
                <a href=""><p>ติดต่อเรา</p></font></a>
              </div>
              <div class="col-md-2" style="background-color: rgb(240, 255, 255)">
                <font color="#000000">
                <p>เกี่ยวกับ RUDDINCAMERA</p>
                <p>ข่าวสาร</p>
                <p>ร่วมงานกับเรา</p>
                <p>ร่วมลงทุนกับเรา</p>
                <p>ความยั่งยืน</p></font>
              </div>  
              <div class="col-md-6" style="background-color: rgb(240, 255, 255)">
                <font color="#000000">
                <p></p></font>
              </div>  
          
            </div><!-- ปิด class row main menu -->  
              
            <div class="row"><!-- เริ่มต้น Banner -->
              <div class="col-md-1" style="background-color: rgb(240, 255, 255)">
                <font color="#000000">
                <p>ไทย</p>
                </font>
              </div>
              <div class="col-md-5" style="background-color: rgb(240, 255, 255)">
                <font color="#000000">
                <p>© 2022 RUDDINCAMERA, TH. สงวนลิขสิทธิ์</p>
                </font>
              </div>
              <div class="col-md-1" style="background-color: rgb(240, 255, 255)">
                <font color="#000000">
                <p>คำแนะนำ</p>
                </font>
              </div>  
              <div class="col-md-1" style="background-color: rgb(240, 255, 255)">
                <font color="#000000">
                <p>เงื่อนไขการขาย</p></font>
              </div> 
              <div class="col-md-2" style="background-color: rgb(240, 255, 255)">
                <font color="#000000">
                <p>ข้อกำหนดการใช้</p></font>
              </div>    
              <div class="col-md-2" style="background-color: rgb(240, 255, 255)">
                <font color="#000000">
                <p>นโยบายความเป็นส่วนตัวของ RUDDINCAMERA</p></font>
              </div> 

            </div> <!-- ปิด คอน -->

        </body>
</html>