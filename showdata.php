<?php
    require('dbconnect.php');

    $sql = "SELECT * FROM employees ORDER BY fname ASC";
    $result = mysqli_query($connect,$sql);
    $count = mysqli_num_rows($result);
    $order = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลพนักงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <table class="table table-striped table-hover">
            <h1 class="text-center">แสดงข้อมูลการสั่งซื้อ
            </h1>
            <br>
            <thead>
                <tr>
                    <th>ลําดับที่</th>
                    <th>ชื่อลูกค้า</th>
                    <th>IDสินค้า</th>
                    <th>ที่อยู่</th>
                    <th>วันที่</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                       <td><?php echo $order++; ?></td>
                       
                       <td><?php echo $row["fname"]; ?></td>
                       <td><?php echo $row["ID"]; ?></td>
                       <td><?php echo $row["aaddress"]; ?></td>
                       <td><?php echo $row["DDate"]; ?></td>
                       <td>
                            <!-- <button type="button" class="btn btn-danger">ลบข้อมูล</button> -->
                            <a href="deleteQuery.php?idemp= <?php echo $row["empid"]; ?>" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">ลบข้อมูล</a>
                       </td>
                       <td>
                            <!-- <button type="button" class="btn btn-warning">แก้ไขข้อมูล</button> -->
                            <a href="editForm.php?idemp= <?php echo $row["empid"]; ?>" class="btn btn-warning" onclick="return confirm('คุณต้องการแก้ไขข้อมูลหรือไม่')">แก้ไขข้อมูล</a>
                       </td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
        <!-- <a href="insertForm.php" class="btn btn-primary">กรอกข้อมูลพนักงาน</a> -->
        <a href="index.html" class="btn btn-info">กลับหน้าแรก</a>
        <a href="logout.php" class="btn btn-secondary">ออกจากระบบ</a>
    </div>
</body>
</html>