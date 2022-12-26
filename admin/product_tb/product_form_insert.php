<?php include "../../connect/connect_db.php";  //เชื่อมต่อ database  ?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href= "../../style.css" rel = "stylesheet">  
    <title>เเบบฟอร์มบันทึกข้อมูลสินค้า</title>
    </head>
    <body>
        <div class="container">
        <center>
        <form action="product_insert.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="2"><h1>เเบบฟอร์มบันทึกข้อมูลสินค้า</h1></td>
                </tr>
                <tr>
                    <td>ชื่อสินค้า</td>
                    <td><input type="text" name="fname"></td>
                </tr>
                <tr>
                    <td>แบรน์</td>
                    <td>
                    <select name="fbrane">  
                        <?php
                            try{
                                $sql_select= $conn->prepare("SELECT * FROM star_brane_tb"); 
                                $sql_select->execute();//สั่งให้ sql_select ทำงาน
                                while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                                        
                        ?>
                        <option value="<?php echo $row_select['star_brane_id']; ?>"><?php echo $row_select['star_brane_name'];?></option> 
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
                    <td>รุ่น</td>
                    <td><input type="text" name="fsize"></td>
                </tr>
                <tr>
                    <td>ราคา</td>
                    <td><input type="text" name="fprice"></td>
                </tr>
                <tr>
                    <td>รูปภาพสินค้า</td>
                    <td> <input type="file" name="fimg"></td>
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูลสินค้า" class = "btn btn-success" id="btn-success"></td>
                    <td><a href="product_select.php">แสดงตาราง</a></td>

                </tr>
            </table>
        </form>
    </center>
        </div>
    </body> 
</html