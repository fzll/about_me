<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kuliah Teknik Informatika</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
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
        <header>
            <h1>Jadwal Kuliah Teknik Informatika</h1>
            <p>Semester Genap 2025</p>
        </header>

        <table class="schedule-table">
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Waktu</th>
                    <th>Mata Kuliah</th>
                    <th>Dosen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Senin</td>
                    <td>08:00 - 10:00</td>
                    <td>Algoritma dan Pemrograman</td>
                    <td>Dr. Agus</td>
                </tr>
                <tr>
                    <td>Senin</td>
                    <td>10:30 - 12:30</td>
                    <td>Matematika Diskrit</td>
                    <td>Prof. Ika</td>
                </tr>
                <tr>
                    <td>Selasa</td>
                    <td>08:00 - 10:00</td>
                    <td>Struktur Data</td>
                    <td>Dr. Rudi</td>
                </tr>
                <tr>
                    <td>Rabu</td>
                    <td>08:00 - 10:00</td>
                    <td>Sistem Operasi</td>
                    <td>Prof. Budi</td>
                </tr>
                <tr>
                    <td>Kamis</td>
                    <td>08:00 - 10:00</td>
                    <td>Jaringan Komputer</td>
                    <td>Dr. Nani</td>
                </tr>
                <tr>
                    <td>Jumat</td>
                    <td>08:00 - 10:00</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>Dr. Irfan</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
include 'fot.php';