<?php include "../../connect/connect_db.php"; 
$get_update_id=$_REQUEST['update_id'];
 
 try{
    $sql_select= $conn->prepare("SELECT * FROM star_tb where star_id='$get_update_id'");//การเขียนคำสั่ง SQL
    $sql_select->execute();//สั่งให้ sql_select ทำงาน
    $row_select = $sql_select->fetch(PDO::FETCH_ASSOC);      
    $img=$row_select['star_img'];
 
    }
    catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
//$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
?>
 
 
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href= "../../style.css" rel = "stylesheet">
        <title>เเบบฟอร์มเเก้ไขข้อมูลสินค้า</title>
    </head>
    <body>
        <div class="container">
        <center>
        <form action="product_update.php?update_id=<?php echo $get_update_id; ?>&img=<?php echo $img;?> " method="post">
            <table>
                <tr>
                    <td colspan="2"><h1>เเบบฟอร์มบันทึกข้อมูลสินค้า</h1></td>
                </tr>
                <tr>
                    <td>ชื่อสินค้า</td>
                    <td><input type="text" name="fname" value="<?php echo $row_select['star_name'];?>"></td>
                </tr>
                <tr>
                    <td>ประเภทสินค้า</td>
                    <td>
                    <select name="fbrane">  
                        <?php
                            try{
                                $sql_selects= $conn->prepare("SELECT * FROM star_brane_tb"); 
                                $sql_selects->execute();//สั่งให้ sql_select ทำงาน
                                while($row_selects = $sql_selects->fetch(PDO::FETCH_ASSOC)){
                                        
                        ?>
                        <option value="<?php echo $row_selects['star_brane_id']; ?>"><?php echo $row_selects['star_brane_name'];?></option> 
                        <?php 
                                }
                            }
                        catch(PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                        $conn = null;//เคลีย์ค่าในการดึงข้อมูล     
                        ?>
 
                    </select>    
                    </td>
                </tr>
                <tr>
                    <td>รุ่น</td>
                    <td><input type="text" name="fsize" value="<?php echo $row_select['star_size'];?>"></td>
                </tr>
                <tr>
                    <td>ราคา</td>
                    <td><input type="text" name="fprice" value="<?php echo $row_select['star_price'];?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูลสินค้า" id = "btn-success"></td>
                </tr>
            </table>
        </form>
    </center>
        </div>
    </body> 
</html>
