<?php
include "../../connect/connect_db.php";  //เชื่อมต่อ database
$get_star_brane_name=$_REQUEST['fbrane'];
 
 
 
try{
$sql_insert = "insert into star_brane_tb (star_brane_id,star_brane_name) 
values ('''$get_star_brane_id','$get_star_brane_name')";
 
    $conn->exec($sql_insert);
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
    //echo "<script>window.location.href='product_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
