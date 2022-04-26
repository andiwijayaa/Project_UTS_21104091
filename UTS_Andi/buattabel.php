<?php
include_once("koneksidb.php");
$sql = "CREATE TABLE Penjualan_Jaket(
    KodeJaket Varchar(6) PRIMARY KEY,
    JumlahPesanan Varchar(15),
    NamaPembeli Varchar(40),
    Ukuran Varchar(48),
    Alamat Varchar(50)
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "tabel sukses";
}else{
    echo "tabel gagal";
}