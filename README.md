# Lab9Web
**Nama	 : Siti Latifah** <br>
**NIM	   : 312010321** <br>
**Kelas	 : TI.20.A2** <br>
**Matkul : Pemrograman Web** <br>

# PHP MODULAR
## Langkah langkah praktikum
Buat file baru dengan nama header.php
``` php
<?php
$active = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Modularisasi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <nav>
            <a href="home.php" class="<?= $active == 'home' ? 'active' :''?>">Home</a>
            <a href="about.php" class="<?= $active == 'about' ? 'active' :''?>">Tentang</a>
            <a href="kontak.php" class="<?= $active == 'kontak' ? 'active' :''?>">Kontak</a>
        </nav>
        <header>
            <h1>Modularisasi menggunakan require</h1>
        </header>
```
Agar lebih bagus tampilannya buat file style.css seperti di bawah ini
``` css
* {
  padding: 0;
  margin: 0;
  font-family: 'Roboto', sans-serif;
}

nav {
  width: 100%;
  background-color: rgb(255, 183, 249);
  padding: 0px;
  display: flex;
  align-items: center;
  justify-content: center;
}

nav > a {
  text-decoration: none;
  color: rgb(1, 6, 8);
  padding: 10px;
  margin: 10px 5px;
  border-radius: 5px;
}

nav > a:hover,
nav > a.active {
  background-color: rgb(7, 255, 255);
}

header {
  text-align: center;
  padding: 30px;
}

header code {
  color: rgb(235, 84, 184);
}

.content {
  background-color: rgb(45, 241, 225);
  color: white;
  width: 90%;
  margin: auto;
  padding: 20px;
  border-radius: 5px;
}

.content h2 {
  margin-bottom: 20px;
}

footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  background-color: rgb(255, 97, 229);
  text-align: center;
  padding: 20px 0;
  color: white;
}
```

Buat file baru dengan nama footer.php
``` php
<footer>
            <p>&copy; 2022 - Informatika @ Universitas Pelita Bangsa</p>
        </footer>
    </div>
</body>

</html>
```
Buat file baru dengan nama home.php
``` php
<?php require "header.php"; ?>

<div class="content">
    <h2>Halaman Home</h2>
    <p>Selamat datang di halaman home.</p>
</div>

<?php require "footer.php"; ?>
```

Buat file baru dengan nama about.php
``` php
<?php require "header.php"; ?>

<div class="content">
    <h2>Halaman About</h2>
    <p>Selamat datang di halaman about.</p>
</div>

<?php require "footer.php"; ?>
```
Buat file baru dengan nama kontak.php
``` php
<?php require "header.php"; ?>

<div class="content">
    <h2>Halaman kontak</h2>
    <p>Selamat datang di halaman kontak.</p>
</div>

<?php require "footer.php"; ?>
```
## OUTPUT
![Screenshot (298)](https://user-images.githubusercontent.com/73010098/172177312-1840696d-bc76-4d0f-b72d-687564c7d6e3.png)

## PERTANYAAN DAN TUGAS
Implementasikan konsep modularisasi pada kode program praktikum 8 tentang database, sehingga setiap halamannya memiliki template yang sama.

Buat file baru dengan nama header.php
``` php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/stylesheet" media="screen" />
    <title>MODULAR</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>DATA ELEKTRONIK</h1>
        </header>
        <nav>
            <a href="home.php">HOME</a>
            <a href="tambah.php">TAMBAH</a>
        </nav>       
 ```

Membuat file baru dengan nama footer.php
``` php
<footer>
            <p>&copy; 2021, Informatika, Universitas Pelita Bangsa
        </footer>
    </div>
</body>
</html>   
```




