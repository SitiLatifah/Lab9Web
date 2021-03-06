<?php require('header.php'); ?>

<?php
error_reporting(E_ALL);
include_once 'konek.php';
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $kategori = $_POST['kategori'];
  $harga_jual = $_POST['harga_jual'];
  $harga_beli = $_POST['harga_beli'];
  $stok = $_POST['stok'];
  $file_gambar = $_FILES['file_gambar'];
  $gambar = null;
  if ($file_gambar['error'] == 0) {
    $filename = str_replace(' ', '_', $file_gambar['name']);
    $destination = dirname(__FILE__) . '/gambar/' . $filename;
    if (move_uploaded_file($file_gambar['tmp_name'], $destination)) {
      $gambar =  $filename;;
    }
  }
  $sql = 'INSERT INTO data_barang (nama, kategori,harga_jual, harga_beli, stok, gambar) ';
  $sql .= "VALUE ('{$nama}', '{$kategori}','{$harga_jual}', '{$harga_beli}', '{$stok}', '{$gambar}')";
  $result = mysqli_query($conn, $sql);
  
  header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style_tambah.css" rel="stylesheet" type="text/css" />
    <title>TAMBAH BARANG</title>
</head>
<body>
    <div class="container">
        <h3>TAMBAH BARANG</h3>
        <div class="main">
            <form method="post" action="tambah.php" enctype="multipart/form-data">
                <div class="input">
                    <label>Nama Barang</label>
                    <input class="nama" type="text" name="nama"/>
                </div>
                <div class="input">
                    <label>Kategori</label>
                    <select class="kategori" name="kategori">
                        <option value="Komputer">Komputer</option>
                        <option value="Elektronik">Elektronik</option>
                        <option value="Handphone">Handphone</option>
                    </select>
                </div>
                <div class="input">
                    <label>Harga Jual</label>
                    <input class="harga_jual" type="text" name="harga_jual"/>
                </div>
                <div class="input">
                    <label>Harga Beli</label>
                    <input class="harga_beli" type="text" name="harga_beli"/>
                </div>
                <div class="input">
                    <label>Stok</label>
                    <input class="stok" type="text" name="stok"/>
                </div>
                <div class="input">
                    <label>File Gambar</label>
                    <input class="file" type="file" name="file_gambar"/>
                </div>
                <div class="submit">
                    <input class="button" type="submit" name="submit" value="Simpan"/>
                </div>
            </form>
        </div>
    </div> 
</body>
</html>

<?php require('footer.php'); ?>