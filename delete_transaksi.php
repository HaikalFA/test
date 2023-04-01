<?php

require "koneksi.php";

$id_transaksi = $_GET["id_transaksi"];
$sql = "DELETE FROM tb_transaksi WHERE id_transaksi='$id_transaksi'";
$result = mysqli_query($conn, $sql);
if(!$result) {
    echo "gagal";
} else{
header("location:data_transaksi.php");
}
?>