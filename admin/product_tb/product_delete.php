<?php
include "../../connect/connect_db.php";  //เชื่อมต่อ database
$get_del_id=$_REQUEST['delete_id'];
echo $get_del_id;
 
 
 
try{
    $sql_delete = "DELETE FROM star_tb WHERE star_id=$get_del_id";    
    
    $conn->exec($sql_delete);    
    
    echo "<script>alert('ลบข้อมูลเรียบร้อยเเล้ว')</script>";
    echo "<script>window.location.href='product_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
