<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jejak Pendidikan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            color: white;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1 {
            font-size: 2.5em;
        }
        .education {
            text-align: left;
            margin-top: 20px;
        }
        .education h2 {
            border-bottom: 2px solid white;
            padding-bottom: 5px;
        }
        .education p {
            font-size: 1.2em;
            line-height: 1.6;
        }
        footer {
            margin-top: 20px;
            font-size: 0.9em;
        }
    </style>
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
    <div class="container">
        <h1>Jejak Pendidikan</h1>
        <div class="education">
            <h2>Universitas Sains Alquran</h2>
            <p>Sarjana Teknik Informatika (2023 - Sekarang)</p>
            
            <h2>SMK Takhasus</h2>
            <p>Jurusan RPL (2020 - 2023)</p>
            
            <h2>SMPN 2 Sapuran</h2>
            <p>(2017 - 2020)</p>
            
            <h2>SDN 1 Rimpak</h2>
            <p>(2010 - 2017)</p>
        </div>
        <footer>
            <p>&copy; 2025 Jejak Pendidikan. Semua Hak Dilindungi.</p>
        </footer>
    </div>
</body>
</html>
<?php
include 'fot.php';