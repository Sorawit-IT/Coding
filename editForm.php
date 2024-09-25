<?php 
    require('dbconnect.php');
    $id = $_GET["idemp"];

    $sql = "SELECT * FROM employees WHERE empid = $id";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    $skill_arr = array("JAVA","PHP","Python","HTML");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขพนักงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center">ฟอร์มแก้ไขข้อมูลการสั่งซื้อ</h2>
        <form action="updateData.php" method="POST">
            <input type="hidden" value="<?php echo $row['empid']; ?>" name="id" >
                <div class="form-group">
                    <label for="firstname">ชื่อ</label>
                    <input type="text" name="fname" class="form-control" value="<?php echo $row['fname']; ?>">
                </div>
                <div class="form-group">
                    <label for="lastname">IDสินค้า</label>
                    <input type="text" name="ID" class="form-control" value="<?php echo $row['ID']; ?>">
                </div>
                <div class="form-group">
                    <label for="lastname">ที่อยู่</label>
                    <input type="text" name="aaddress" class="form-control" value="<?php echo $row['aaddress']; ?>">
                </div>
                <div class="form-group">
                    <label for="lastname">วันที่</label>
                    <input type="text" name="DDate" class="form-control" value="<?php echo $row['DDate']; ?>">
                </div>
                <!-- <div class="form-group">
                    <label for="gender">เพศ</label>
                    <?php
                        if($row['gender'] =='male'){
                            echo "<input type='radio' name='gender' value='male' checked> ชาย";
                            echo "<input type='radio' name='gender' value='female' > หญิง";
                            echo "<input type='radio' name='gender' value='Other'> อื่นๆ";
                        }else if($row['gender'] == 'female'){
                            echo "<input type='radio' name='gender' value='male' > ชาย";
                            echo "<input type='radio' name='gender' value='female' checked> หญิง";
                            echo "<input type='radio' name='gender' value='Other'> อื่นๆ";
                        }else{
                            echo "<input type='radio' name='gender' value='male' > ชาย";
                            echo "<input type='radio' name='gender' value='female' > หญิง";
                            echo "<input type='radio' name='gender' value='Other'checked> อื่นๆ";
                        }
                    ?> -->
                <!-- </div>
                <div class="form-group">
                        <label for="">ทักษะ</label>
                        <?php
                            $skill = explode(",",$row["skills"]);
                            foreach($skill_arr as $value){
                                if(in_array($value,$skill)){
                                    echo"<input type= 'checkbox' name='skills[]' value= $value checked>$value";
                                }else{
                                    echo"<input type= 'checkbox' name='skills[]' value=$value>$value";
                                }
                            }
                        ?>
                </div> -->
                <input type="submit" class="btn btn-success" value="Update ข้อมูล">
                <input type="submit" class="btn btn-warning" value="ส่งข้อมูล">
                <!-- <a href="index.html" class="btn btn-info">กลับหน้าแรก</a> -->
        </form>
    </div>
</body>
</html>