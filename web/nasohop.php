<?php include "../connect/connect_db.php"; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.2/assets/css/docs.css"
      rel="stylesheet"
    />
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .container
        {
            margin-top: 100px;
        }
        .newarrival
        {
            background: green;
            width: 50px;
            color: white;
            font-size: 12px;
            font-weight: bold;
        }
        .col-md-7 h2
        {
            color: #555;

        }
        .stars
        {
            height: 900%;
        }
        .price{
            color: #fe980f;
            font-size: 26px;
            font-weight: bold;
            padding-top: 20px;
        }
        input
        {
            border: 1px solid #ccc;
            font-weight: bold;
            height: 33px;
            text-align: center;
            width: 30px;
        }
        .cart{
            background: #fe980f;
            color: #ffffffff;
            font-size: 15px;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <?php include "menu.php";
    $id=$_REQUEST['id'];

    try{
      $sql_select= $conn->prepare("SELECT *  
      FROM star_tb
      LEFT JOIN star_brane_tb
      ON star_tb.star_brane = star_brane_tb.star_brane_id
      where star_id=$id ");
      $sql_select->execute();//สั่งให้ sql_select ทำงาน
      $row_select = $sql_select->fetch(PDO::FETCH_ASSOC);
          //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ

  }
      
      catch(PDOException $e) {
              echo "Error: " . $e->getMessage();
          }

  ?>  
    <div class="container">
        <div class="row">
            <div class="col-md-5">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  class="d-block w-100" src="../admin/product_tb/img/<?php echo $row_select['star_img']; ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../admin/product_tb/img/<?php echo $row_select['star_img']; ?>"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../admin/product_tb/img/<?php echo $row_select['star_img']; ?>" alt="First slide">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 

            </div>
            <div class="col-md-7">
                <p class="newarrival text-center">NEW</p>
                <h2><?php echo $row_select['star_name'];?></h2>
                <p>Product Code: ad009</p>
                <p><?php echo $row_select['star_price'];?>.BHAT</p>
                <p><b>Avai lability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <p><b>Avai lability:</b></p>
                <p>BRANDS:<?php echo $row_select['star_brane_name'];?></p>
                <label>Quantity:</label>
                <input type="text" value="1">
                <button type="button" class="btn btn-fefault cart">ADD TO CART</button>

            </div>
        </div>
        
    </div>
</body>
</html>