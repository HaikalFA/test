<?php

    require "koneksi.php";
    
    $id_transaksi = $_POST ['id_transaksi'];
    $tanggal = $_POST ['tanggal'];
    $harga = $_POST ['harga'];
    $jumlah = $_POST ['jumlah'];
    $total_pembayaran = $_POST ['total_pembayaran']; 

$sql = "INSERT INTO tb_transaksi VALUES ('', '$id_transaksi', '$tanggal', '$harga', '$jumlah', '$total_pembayaran')";
// var_dump($sql);
mysqli_query($conn, $sql);
// header ("Location: data_transaksi.php");

?>