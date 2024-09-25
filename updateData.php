<?php
    require('dbconnect.php');
    $id = $_POST["id"];
    $fname = $_POST['fname'];
    $ID	 = $_POST['ID'];
    $aaddress = $_POST['aaddress'];
    $DDate = $_POST['DDate'];

    
    $sql = "UPDATE employees SET fname = '$fname', ID = '$ID', aaddress = '$aaddress', DDate = '$DDate' WHERE empid = '$id'";
    $result = mysqli_query($connect,$sql);

    if($result){
        header("location: showdata.php");
    }
?>