<?php
$halaman = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Fasilitas Sekolah - SMADAH Selayar</title>

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

.nav-link.active{
    color:#0d6efd !important;
    font-weight:bold;
    border-bottom:2px solid #0d6efd;
}

.dropdown-item.active{
    background:#0d6efd;
    color:white !important;
}

/* HEADER */
.header{
    background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),
    url('Image/foto1.jpg');
    background-size:cover;
    background-position:center;
    color:white;
    padding:90px 0;
    text-align:center;
}

.header h1{
    font-size:45px;
    font-weight:bold;
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
.facility-card{
    background:white;
    border-radius:15px;
    padding:25px;
    box-shadow:0 3px 12px rgba(0,0,0,0.1);
    transition:0.3s;
    height:100%;
}

.facility-card:hover{
    transform:translateY(-6px);
}

.icon{
    font-size:40px;
    margin-bottom:10px;
    color:#0d6efd;
}

h5{
    font-weight:bold;
}

footer{
    background:#0b1f3a;
    color:white;
    padding:40px 0;
    text-align:center;
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
<!-- HEADER -->
<section class="header">
<div class="container">
<h1>Fasilitas Sekolah</h1>
<p>Fasilitas lengkap untuk mendukung pembelajaran modern</p>
</div>
</section>

<!-- CONTENT -->
<section class="section">
<div class="container">

<h2 class="title">Fasilitas Sekolah SMADAH</h2>

<div class="row g-4">

<!-- LABORATORIUM -->
<div class="col-md-4">
<div class="facility-card">
<div class="icon">🔬</div>
<h5>Laboratorium</h5>
<p>Laboratorium lengkap untuk mendukung pembelajaran praktikum siswa.</p>
</div>
</div>

<!-- LAPANGAN OLAHRAGA -->
<div class="col-md-4">
<div class="facility-card">
<div class="icon">🏃‍♂️</div>
<h5>Lapangan Olahraga</h5>
<p>Lapangan olahraga di sekolah kami bukan hanya tempat berolahraga, tetapi juga wadah siswa untuk tumbuh, 
berkompetisi secara sehat, dan meraih prestasi.</p>
</div>
</div>

<!-- PERPUSTAKAAN -->
<div class="col-md-4">
<div class="facility-card">
<div class="icon">📚</div>
<h5>Perpustakaan</h5>
<p>Koleksi buku fisik dan e-book dengan sistem peminjaman digital terintegrasi.</p>
</div>
</div>

<!-- RUANG KELAS -->
<div class="col-md-4">
<div class="facility-card">
<div class="icon">🏫</div>
<h5>Ruang Kelas Nyaman</h5>
<p>Fasilitas ruang kelas yang nyaman untuk menunjang proses belajar mengajar.</p>
</div>
</div>

<!-- LAB KOMPUTER -->
<div class="col-md-4">
<div class="facility-card">
<div class="icon">💻</div>
<h5>Lab Komputer</h5>
<p>Lab komputer modern untuk pembelajaran coding, desain grafis, spreadsheet, dan multimedia.</p>
</div>
</div>

<!-- LAB IPA -->
<div class="col-md-4">
<div class="facility-card">
<div class="icon">⚗️</div>
<h5>Laboratorium IPA</h5>
<p>Laboratorium IPA untuk mendukung pembelajaran Fisika, Kimia, dan Biologi.</p>
</div>
</div>

<!-- UKS -->
<div class="col-md-4">
<div class="facility-card">
<div class="icon">🏥</div>
<h5>Ruang UKS</h5>
<p>Ruang kesehatan siswa untuk pertolongan pertama dan layanan kesehatan ringan.</p>
</div>
</div>

<!-- MUSHOLA -->
<div class="col-md-4">
<div class="facility-card">
<div class="icon">🕌</div>
<h5>Mushola</h5>
<p>Tempat ibadah yang nyaman dan digunakan untuk kegiatan rohani siswa.</p>
</div>
</div>

</div>

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