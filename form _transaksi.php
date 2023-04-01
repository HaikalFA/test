<!DOCTYPE html>
<head>
    <title>Transaksi </title>
</head>
<body>
    <form action="tambah_transaksi.php" method="post">
       <input type="hidden" name="id_transaksi">
       <label for="tanggal">tanggal</label>
       <input type="date" id="tanggal" name="tanggal">
       <br>
       <label for="harga">harga</label>
       <input type="number" id="harga" name="harga">
       <br>
       <label for="jumlah">jumlah</label>
       <input type="number" id="jumlah" name="jumlah">
       <br>
       <laber for="total_pembayaran">Total Pembayaran</label>
       <input type="number" id="total_pembayaran" nama="total_pembayaran">
        <br>
        <br>
       <input type="submit" value="Simpan">
    </form>

</body>
</html>