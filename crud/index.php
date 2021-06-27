<?php
session_start();

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
	exit;
}


?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

      <nav>
        <ul class="kiri">
          <li><a href="index.php">Halaman admin</a></li>
        </ul>
        <ul class="kanan">
          <li><a href="logout.php">Loguot</a></li>
          <li><a href="galeri.php">Galeri</a></li>
          <li></li>

        </ul>
      </nav>

</body>
</html>
