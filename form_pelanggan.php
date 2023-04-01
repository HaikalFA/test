<?php
require "koneksi.php";

$id_pelanggan = $_GET["id_pelanggan"] ?? 0 ;

if ($id_pelanggan > 0 ) {
    $sql = "SELECT * FROM tb_pelanggan WHERE id_pelanggan = '$id_pelanggan'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)):
        $id_pelanggan = $row['id_pelanggan'];
        $nama_pelanggan = $row['nama_pelanggan'];
        $alamat = $row['alamat'];
        $email = $row['email'];
    endwhile;
    $form_action = 'edit_pelanggan.php';
    $title = "Edit Data Pelanggan";
}
else{
    $id_pelanggan = '';
    $nama_pelanggan = '';
    $alamat = '';
    $email = '';
    $form_action = 'tambah_pelanggan.php';
    $title = "Tambah Data Pelanggan";
}
?>

<!DOCTYPE html>
<head>
    <title> Pelanggan </title>
</head>
<body>
<nav>
    <ul>
        <li><a href="welcome.php">Beranda </a></li>
        <li><a href="data_buku.php">Data Buku </a></li>
        <li><a href="data_pelanggan.php">Data Pelanggan </a></li>
        <li><a href="data_transaksi.php">Data Transaksi </a></li>
    </ul>
</nav>
    <h2 style="margin-bottom:20px"><?=$title; ?></h2>
    <form action="<?=$form_action?>" method="post">
       <input type="hidden" name="id_pelanggan" value="<?=$id_pelanggan?>">

       <label for="nama_pelanggan">Nama Pelanggan</label>
       <input type="text" id="nama_pelanggan" name="nama_pelanggan" value="<?=$nama_pelanggan?>">
       <br>
       <label for="alamat">Alamat</label>
       <input type="text" id="alamat" name="alamat" value="<?=$alamat?>">
       <br>
       <label for="email">Email</label>
       <input type="text" id="email" name="email" value="<?=$email?>">
       <br>
       <br>
       <input type="submit" value="Edit">
    </form>
    </form>

</body>
</html>