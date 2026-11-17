<?php
$halaman = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Program Unggulan - SMA Muhammadiyah Selayar</title>

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

.header p{
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
    margin-bottom:10px;
}

.subtitle{
    text-align:center;
    margin-bottom:40px;
    color:#555;
}

/* CARD */
.program-card{
    background:white;
    border-radius:15px;
    padding:25px;
    box-shadow:0 3px 12px rgba(0,0,0,0.1);
    transition:0.3s;
    height:100%;
}

.program-card:hover{
    transform:translateY(-7px);
}

.icon{
    font-size:40px;
    color:#0d6efd;
    margin-bottom:10px;
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
<h1>Program Unggulan SMADAH</h1>
<p>Membentuk Generasi Berakhlak Mulia, Cerdas, dan Berdaya Saing Global</p>
</div>
</section>

<!-- CONTENT -->
<section class="section">
<div class="container">

<h2 class="title">Mengembangkan Potensi Terbaik Setiap Siswa</h2>
<p class="subtitle">Program pendidikan unggulan berbasis Islam, akademik, dan keterampilan abad 21</p>

<div class="row g-4">

<!-- Tahfidz -->
<div class="col-md-4">
<div class="program-card">
<div class="icon">📖</div>
<h5>Program Tahfidz & Kajian Islam</h5>
<p>Mengintegrasikan pendidikan Al-Qur'an dan kajian Islam mendalam sebagai fondasi akhlak mulia. Siswa dibimbing 
    menghafal Al-Qur'an dan memahami penerapannya dalam kehidupan.</p>
</div>
</div>

<!-- Olimpiade -->
<div class="col-md-4">
<div class="program-card">
<div class="icon">🧪</div>
<h5>Kelas Olimpiade & Sains</h5>
<p>Persiapan kompetisi sains (Matematika, Fisika, Kimia, Biologi, Komputer) dengan bimbingan guru berpengalaman dan laboratorium lengkap.</p>
</div>
</div>

<!-- Karir -->
<div class="col-md-4">
<div class="program-card">
<div class="icon">💼</div>
<h5>Pembinaan Karir & Kewirausahaan</h5>
<p>Melatih keterampilan abad 21 melalui workshop, mentorship, dan pengembangan proyek kewirausahaan siswa.</p>
</div>
</div>

<!-- English -->
<div class="col-md-4">
<div class="program-card">
<div class="icon">🗣️</div>
<h5>Bahasa Inggris & Debate Club</h5>
<p>Program peningkatan bahasa Inggris melalui percakapan aktif dan kompetisi debat untuk melatih komunikasi dan berpikir kritis.</p>
</div>
</div>

<!-- Komputer -->
<div class="col-md-4">
<div class="program-card">
<div class="icon">💻</div>
<h5>Program Komputer & Teknologi</h5>
<p>Pengenalan coding, desain, dan teknologi digital untuk menyiapkan siswa menghadapi dunia kerja modern.</p>
</div>
</div>

<!-- Lingkungan -->
<div class="col-md-4">
<div class="program-card">
<div class="icon">🌱</div>
<h5>Lingkungan & Keberlanjutan</h5>
<p>Mendidik siswa peduli lingkungan melalui proyek nyata tentang pengelolaan sampah dan keberlanjutan.</p>
</div>
</div>

</div>

<!-- CTA -->
<div class="text-center mt-5">
<h4>Siap Menjadi Bagian dari Kami?</h4>
<p>Bergabunglah dengan SMA Muhammadiyah Kepulauan Selayar dan temukan potensi terbaik Anda.</p>
<a href="kontak.php" class="btn btn-primary btn-lg">Daftar Sekarang</a>
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