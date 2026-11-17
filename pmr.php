<?php
$halaman = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>PMR - SMA Muhammadiyah Selayar</title>

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

/* 🔵 ACTIVE BIRU */
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
    url('Image/pmr.jpeg');
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
.pmr-card{
    background:white;
    border-radius:15px;
    padding:25px;
    box-shadow:0 3px 12px rgba(0,0,0,0.1);
    transition:0.3s;
    height:100%;
}

.pmr-card:hover{
    transform:translateY(-7px);
}

.icon{
    font-size:40px;
    margin-bottom:10px;
    color:#0d6efd;
}

/* CTA */
.cta{
    background:#0d6efd;
    color:white;
    padding:60px 20px;
    text-align:center;
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



<!-- HERO -->
<section class="hero">
<div class="container">
<h1>Palang Merah Remaja (PMR)</h1>
<p>Siap sedia, peduli sesama, dan berjiwa kemanusiaan</p>
<p>Bersama PMR, kita menjadi agen kebaikan di sekolah dan masyarakat</p>
</div>
</section>

<!-- CONTENT (tetap sama) -->
<section class="section">
<div class="container">

<h2 class="title">Tentang PMR</h2>

<div class="row align-items-center">

<div class="col-md-6">
<img src="Image/pmr.jpeg" class="img-fluid rounded shadow">
<p class="text-center mt-2">Anggota PMR sedang latihan</p>
</div>

<div class="col-md-6">
<p>
PMR adalah ekstrakurikuler yang membentuk siswa menjadi pribadi peduli kemanusiaan dan kesehatan.
</p>
<p>
Kegiatan meliputi pertolongan pertama, bakti sosial, dan edukasi kesehatan.
</p>
<p>
Siswa belajar langsung melalui praktik dan simulasi lapangan.
</p>
</div>

</div>

</div>
</section>

<!-- PILLAR -->
<section class="section bg-light">
<div class="container">

<h2 class="title">Pilar Kegiatan PMR</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="pmr-card text-center">
<div class="icon">🏥</div>
<h5>Pertolongan Pertama</h5>
<p>Pelatihan penanganan luka dan kondisi darurat.</p>
</div>
</div>

<div class="col-md-4">
<div class="pmr-card text-center">
<div class="icon">🤝</div>
<h5>Kemanusiaan</h5>
<p>Bakti sosial dan kegiatan peduli masyarakat.</p>
</div>
</div>

<div class="col-md-4">
<div class="pmr-card text-center">
<div class="icon">🧠</div>
<h5>Kesehatan Remaja</h5>
<p>Edukasi hidup sehat dan kebersihan diri.</p>
</div>
</div>

</div>

</div>
</section>

<!-- CTA -->
<section class="cta">
<div class="container">
<h2>Siap Beraksi dan Menjadi Pahlawan Muda?</h2>
<p>Bergabunglah dengan PMR SMADAH Selayar sekarang!</p>
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