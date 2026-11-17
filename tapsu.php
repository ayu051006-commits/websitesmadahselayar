<?php
$halaman = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tapak Suci - SMA Muhammadiyah Selayar</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    font-family: Arial, sans-serif;
    background:#f5f7fb;
}

/* NAVBAR */
.navbar{
    background:white;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

/* ACTIVE BIRU */
.nav-link.active{
    color:#0d6efd !important;
    font-weight:bold;
    border-bottom:2px solid #0d6efd;
}

.dropdown-item.active{
    background:#0d6efd;
    color:white !important;
}

/* HERO */
.hero{
    background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),
    url('Image/tapaksuci.jpg');
    background-size:cover;
    background-position:center;
    color:white;
    padding:100px 0;
    text-align:center;
}

.hero h1{
    font-size:45px;
    font-weight:bold;
}

.hero p{
    font-size:18px;
}

/* SECTION */
.section{
    padding:60px 0;
}

.title{
    text-align:center;
    color:#0d6efd;
    font-weight:bold;
    margin-bottom:40px;
}

/* CARD */
.card-box{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 3px 12px rgba(0,0,0,0.1);
    height:100%;
    transition:0.3s;
}

.card-box:hover{
    transform:translateY(-7px);
}

.icon{
    font-size:40px;
    color:#0d6efd;
    margin-bottom:10px;
}

/* HERO BOX */
.hero-box{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 3px 12px rgba(0,0,0,0.1);
}

/* GALLERY */
.gallery img{
    width:100%;
    border-radius:12px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
    transition:0.3s;
}

.gallery img:hover{
    transform:scale(1.03);
}

/* CTA */
.cta{
    background:#0d6efd;
    color:white;
    text-align:center;
    padding:60px 20px;
}

footer{
    background:#0b1f3a;
    color:white;
    text-align:center;
    padding:40px;
}

</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top">
<div class="container">

<!-- LOGO -->
<a class="navbar-brand fw-bold text-primary" href="index.php">
<img src="Image/Logosmadah.png" width="60" class="me-2">
SMADAH SELAYAR
</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<!-- BERANDA -->
<li class="nav-item">
<a class="nav-link <?= ($halaman=='index.php') ? 'active' : ''; ?>" href="index.php">
BERANDA
</a>
</li>

<!-- PROFIL -->
<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle
<?= in_array($halaman,['sejarah.php','visi.php','staff.php','fasilitas.php']) ? 'active' : ''; ?>"
data-bs-toggle="dropdown">
PROFIL SEKOLAH
</a>

<ul class="dropdown-menu">

<li>
<a class="dropdown-item <?= ($halaman=='sejarah.php') ? 'active' : ''; ?>" href="sejarah.php">
SEJARAH
</a>
</li>

<li>
<a class="dropdown-item <?= ($halaman=='visi.php') ? 'active' : ''; ?>" href="visi.php">
VISI DAN MISI
</a>
</li>

<li>
<a class="dropdown-item <?= ($halaman=='staff.php') ? 'active' : ''; ?>" href="staff.php">
STAFF DAN GURU
</a>
</li>

<li>
<a class="dropdown-item <?= ($halaman=='fasilitas.php') ? 'active' : ''; ?>" href="fasilitas.php">
FASILITAS
</a>
</li>

</ul>
</li>

<!-- PROGRAM -->
<li class="nav-item">
<a class="nav-link <?= ($halaman=='program.php') ? 'active' : ''; ?>" href="program.php">
PROGRAM UNGGULAN
</a>
</li>

<!-- EKSTRA -->
<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle
<?= in_array($halaman,['pmr.php','pramuka.php','tapsu.php']) ? 'active' : ''; ?>"
data-bs-toggle="dropdown">
EKSTRAKURIKUREL
</a>

<ul class="dropdown-menu">

<li>
<a class="dropdown-item <?= ($halaman=='pmr.php') ? 'active' : ''; ?>" href="pmr.php">
PMR
</a>
</li>

<li>
<a class="dropdown-item <?= ($halaman=='pramuka.php') ? 'active' : ''; ?>" href="pramuka.php">
PRAMUKA
</a>
</li>

<li>
<a class="dropdown-item <?= ($halaman=='tapsu.php') ? 'active' : ''; ?>" href="tapsu.php">
TAPAK SUCI
</a>
</li>

</ul>
</li>

<!-- KONTAK -->
<li class="nav-item">
<a class="nav-link <?= ($halaman=='kontak.php') ? 'active' : ''; ?>" href="kontak.php">
KONTAK
</a>
</li>

</ul>

</div>
</div>
</nav>

<!-- HERO -->
<section class="hero">
<div class="container">
<h1>Tapak Suci Putra Muhammadiyah</h1>
<p>Mengembangkan potensi diri, melestarikan budaya bangsa, dan membentuk generasi berakhlak mulia</p>
</div>
</section>

<!-- INTRO -->
<section class="section">
<div class="container">

<h2 class="title">Mengenal Tapak Suci</h2>

<div class="row align-items-center">

<div class="col-md-6">
<img src="Image/tapaksuci.jpg" class="img-fluid rounded shadow">
</div>

<div class="col-md-6 hero-box">

<p>
Tapak Suci Putra Muhammadiyah adalah seni bela diri pencak silat yang melatih fisik, mental, dan spiritual berdasarkan ajaran Islam.
</p>

<p><b>Pembentukan Karakter</b> — Disiplin, sportivitas, dan akhlak mulia.</p>
<p><b>Keahlian Bela Diri</b> — Penguasaan teknik dan jurus pencak silat.</p>
<p><b>Pengembangan Prestasi</b> — Persiapan kompetisi tingkat daerah dan nasional.</p>

</div>

</div>

</div>
</section>

<!-- SCHEDULE -->
<section class="section bg-light">
<div class="container">

<h2 class="title">Jadwal & Pembina</h2>

<div class="row g-4">

<div class="col-md-6">
<div class="card-box">
<h5>📅 Jadwal Latihan</h5>
<p>
Latihan rutin setiap <b>Selasa & Jumat</b> pukul <b>15.30 - 17.00 WITA</b><br>
Bertempat di <b>Aula Serbaguna Sekolah</b>.
</p>
<p>Anggota wajib datang tepat waktu dengan seragam latihan.</p>
</div>
</div>

<div class="col-md-6">
<div class="card-box">
<h5>👨‍🏫 Pembina & Pelatih</h5>
<p><b>[Nama Pembina]</b> (Pembina Ekstrakurikuler)</p>
<p><b>[Nama Pelatih]</b> (Pelatih Utama Tapak Suci)</p>
<p>Mereka siap membimbing siswa menjadi pesilat berkarakter Islami.</p>
</div>
</div>

</div>

</div>
</section>

<!-- DOCUMENTATION -->
<section class="section">
<div class="container">

<h2 class="title">Dokumentasi Kegiatan</h2>

<div class="row g-4 gallery">

<div class="col-md-6">
<img src="Image/tapaksuci.jpg" alt="Kegiatan Tapak Suci 1">
</div>

<div class="col-md-6">
<img src="Image/tapaksuci2.jpeg" alt="Kegiatan Tapak Suci 2">
</div>

</div>

<p class="text-center mt-4">
Lihat lebih banyak foto kegiatan kami di halaman Galeri!
</p>

</div>
</section>

<!-- CTA -->
<section class="cta">
<div class="container">
<h2>Mari Bergabung dengan Tapak Suci!</h2>
<p>Kembangkan bakat bela diri, disiplin, dan karakter Islami</p>
<a href="kontak.php" class="btn btn-light btn-lg">Gabung Sekarang</a>
</div>
</section>
<!-- FOOTER -->
<footer>
<div class="container text-center">
<h5>SMADAH Selayar</h5>
<p>📍 Benteng, Kepulauan Selayar</p>
<p>✉️ sma.muhselayar@gmail.com</p>
<p>📞 0852-9920-4348</p>
<hr>
<p>© 2026 SMADAH Selayar</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>