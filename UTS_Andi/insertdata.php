<?php
    include_once ("koneksidb.php");
    $KodeJaket ="55555";
    $JumlahPesanan ="5";
    $NamaPembeli ="Dhiva";
    $Ukuran ="L";
    $Alamat ="Jalan Gatsu Barat No.05";

    $sql = "INSERT INTO Penjualan_Jaket(Kodejaket,JumlahPesanan,NamaPembeli,Ukuran,Alamat) Values('$KodeJaket','$JumlahPesanan','$NamaPembeli','$Ukuran','$Alamat');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "insert data gagal<br>";
    }
