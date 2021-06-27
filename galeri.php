<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>
<?php include ("header.html") ?>

<main>

<article class="malasngoding-slider">
<h2>Sertifikat</h2>
<div class="isi-slider">
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  $query = "SELECT * FROM gambar"; // Tampilkan semua data gambar
  $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
  $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
  if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      echo "<img src='images/".$data['nama']."'></td>";
    }}?>
</div>

</main>

    <footer>
    <p><h3>Gilang Pramudya S &copy; 2021, Ta'uuk</h3></p>
    </footer>

  </body>
</html>
