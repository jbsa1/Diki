<?php
session_start();
include 'koneksi.php';
$id = $_GET['no']; 
$table = $_SESSION['page'];
echo $table;
echo $id;
session_destroy();

if($table == "inputCont"){
    // mysqli_query($koneksi,"DELETE FROM $table WHERE idcontainer='$id'");
    header("location:dataInputCon.php");
}else{
    mysqli_query($koneksi,"DELETE FROM $table WHERE no='$id'");
    if($table == "plugging"){
        header("location:dataPlugging.php");
    }else if($table == "stuffingcon"){
        header("location:dataStuffingCon.php");
    }else if($table == "stuffing"){
        header("location:dataStuffing.php");
    }else if($table == "striping"){
        header("location:dataStriping.php");
    }else{
        header("location:index.html");
    }
}
?> 