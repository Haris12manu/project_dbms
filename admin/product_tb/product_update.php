<?php
include "../../connect/connect_db.php";  //เชื่อมต่อ database
$get_update_id=$_REQUEST['update_id'];
$get_name=$_REQUEST['fname'];
$get_brane=$_REQUEST['fbrane'];
$get_size=$_REQUEST['fsize'];
$get_price=$_REQUEST['fprice'];
$filename = $_FILES["fimg"]["name"];
$img=$_REQUEST['img'];

if($filename == null)
{
  $filename = $img;
}

 
 
try{
      
    $sql_update = "UPDATE star_tb 
            SET star_name='$get_name',
                star_brane='$get_brane',
                star_size='$get_size',
                star_price='$get_price',
                star_img='$filename'
            WHERE star_id ='$get_update_id' ";
  
    $stmt = $conn->prepare($sql_update);
    $stmt->execute();
  
    echo "<script>alert('เเก้ไขข้อมูลเรียบร้อยเเล้ว')</script>";      
    echo "<script>window.location.href='product_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
