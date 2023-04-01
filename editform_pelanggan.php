<?php
require "koneksi.php";

$id_pelanggan = $_GET["id_pelanggan"];
$query = mysqli_query($conn, "SELECT * FROM tb_pelanggan WHERE id_pelanggan = '$id_pelanggan'");
while ($row = mysqli_fetch_assoc($query)):
?>


<!DOCTYPE html>
<head>
    <title>Pelanggan</title>
</head>
<body>
    <form action="edit_pelanggan.php" method="post">
       <input type="hidden" name="id_pelanggan" value="<?=$row['id_pelanggan']?>">

       <label for="nama_pelanggan">Nama Pelanggan</label>
       <input type="text" id="nama_pelanggan" name="nama_pelanggan" value="<?=$row['nama_pelanggan']?>">
       <br>
       <label for="alamat">Alamat</label>
       <input type="text" id="alamat" name="alamat" value="<?=$row['alamat']?>">
       <br>
       <label for="email">Email</label>
       <input type="text" id="email" name="email" value="<?=$row['email']?>">
       <br>
       <br>
       <input type="submit" value="Edit">
    </form>

</body>
</html>
<?php endwhile; ?>