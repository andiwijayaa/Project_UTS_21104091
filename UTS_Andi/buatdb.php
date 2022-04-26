<?php
include_once("koneksidb.php");
$sql = "CREATE DATABASE penjualan_Jaket;";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "Pembuatan database berhasil";
}else{
    echo "Pembuatan database bermasalah";
}
mysqli_close($cnn);