<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerita Pribadi Saya</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
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
    <header>
        <div class="container">
            <h1 class="site-title">Cerita Pribadi Saya</h1>
            <nav>
                <ul>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#story">Cerita Saya</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="about" class="section">
        <div class="container">
            <h2>Tentang Saya</h2>
            <p>Saya adalah seseorang yang suka music baik itu music pop,dan religi. salah satu judul music yang sangat saya sukai adalah langit tak seharusnya biru. Melalui website ini, saya ingin berbagi kisah pribadi yang penuh pelajaran dan inspirasi.</p>
        </div>
    </section>

    <section id="story" class="section">
        <div class="container">
            <h2>Cerita Saya</h2>
            <article>
                <h3>Awal Perjalanan Saya</h3>
                <p>Pada suatu hari yang cerah, saya memulai perjalanan yang tak terlupakan. Hidup ini penuh dengan tantangan dan kejutan, tetapi saya yakin setiap langkah membawa pelajaran berharga. Pada awalnya, saya ragu, tetapi kemudian saya belajar untuk lebih percaya diri...</p>
                <h3>Pelajaran yang Diperoleh</h3>
                <p>Salah satu pelajaran terbesar yang saya pelajari adalah bahwa kegagalan bukanlah akhir dari segalanya. Sebaliknya, kegagalan adalah bagian dari proses menuju keberhasilan. Setiap kali saya jatuh, saya selalu bangkit dan menjadi lebih kuat...</p>
            </article>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="container">
            <h2>Kontak Saya</h2>
            <p>Jika Anda ingin berbagi cerita atau sekedar bertanya, Anda bisa menghubungi saya melalui link <a href="wa.me/">ini</a></p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 Cerita Pribadi Saya. Semua hak dilindungi. jangan lupa untuk mendengarkan music the jansen lagit tak seharusnya biru</p>
        </div>
    </footer>
</body>
</html>
<?php
include 'fot.php';