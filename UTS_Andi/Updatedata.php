<?php

    include_once("koneksidb.php");
    $KodeJaket = "55555";
    $NamaPembeli = "Doni";
    $sql = "UPDATE Penjualan_Jaket SET NamaPembeli='$NamaPembeli' WHERE KodeJaket='$KodeJaket';";

    $hsl = mysqli_query($cnn,$sql);

    if($hsl){
        echo "update data sukses<br>";
    }else{
        echo "update data gagal";
    }