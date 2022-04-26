<?php
    if(isset($_POST['txKodeJaket'])){
    include_once ("koneksidb.php");
    $KodeJaket =$_POST['txKodeJaket'];
    $JumlahPesanan =$_POST["txJumlahPesanan"];
    $NamaPembeli =$_POST["txNamaPembeli"];
    $Ukuran = $_POST["txUkuran"];
    $Alamat = $_POST["txAlamat"];

    $sql = "INSERT INTO Penjualan_Jaket(KodeJaket,JumlahPesanan,NamaPembeli,Ukuran,Alamat) Values('$KodeJaket','$JumlahPesanan','$NamaPembeli','$Ukuran','$Alamat');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "insert datagagal<br>";
    }
}else{
    
    header("location: Insertdatapenjualan.php");
    
   // echo '<script>window.location.href="index.php"</script>';
}

