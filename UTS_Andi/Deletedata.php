<?php
    
    include_once("koneksidb.php");
    $Kodejaket = "54545";
    $sql = "DELETE FROM Penjualan_Jaket WHERE KodeJaket='$Kodejaket';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "delete data sukses<br>";
    }else{
        echo "delete data gagal";
    }