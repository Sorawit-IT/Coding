<?php
    require('dbconnect.php');

    $fname = $_POST["fname"];
    $ID = $_POST["ID"];
    $aaddress = $_POST["aaddress"];
    $DDate = $_POST["DDate"];
    
    $sql = "INSERT INTO employees(fname,ID,aaddress,DDate) VALUES ('$fname','$ID','$aaddress','$DDate')";
    $result = mysqli_query($connect,$sql);

    if ($result){
        header("location:showdata.php");
        exit(0);
    }else{
        echo mysql_error($connect);
    }

?>