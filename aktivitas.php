<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
  
</head>
<body> 
<div class="wrapper">
  <svg>
    <text x="50%" y="50%" dy=".35em" text-anchor="middle">
      私の活動
    </text>
  </svg>
</div>
  <hr>
    <!-- menu anj -->
<nav id='menu'>
  <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
  <ul>
    <li><a href='index.php'>Home</a></li>
 	<li><a href="pdd.php">PENDIDIKAN</a>
    </li>
    <li><a href='klh.php'>Jadwal Kuliah</a></li>
    <li><a href='aktivitas.php'>Aktivitas</a>
    </li>
    <li><a href='cerita.php'>Pengalaman Pribadi</a></li>
  </ul>
</nav>
<!-- rampung -->
    <div class="error-container">
        <div class="error-content">
            <h1 class="error-code">404</h1>
            <p class="error-message">Oops! Halaman Tidak Ditemukan</p>
            <p class="error-description">Halaman yang Anda cari tidak tersedia. Mungkin URL yang dimasukkan salah, atau halaman tersebut telah dipindahkan.</p>
            <a href="#" class="back-home">Kembali ke Halaman Utama</a>
        </div>
    </div>
</body>
</html>
<?php
include 'fot.php';