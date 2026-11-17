<?php
$halaman = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Kontak - SMA Muhammadiyah Selayar</title>

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
    url('Image/lapangan.jpeg');
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

/* GALERI */
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
<h1>Hubungi Kami</h1>
<p>Kami siap membantu Anda. Jangan ragu untuk menghubungi kami.</p>
</div>
</section>

<!-- KONTAK -->
<section class="section">
<div class="container">

<h2 class="title">Hubungi Kami</h2>

<div class="row g-4">

<!-- ALAMAT -->
<div class="col-md-4">
<div class="card-box text-center">

<h5 class="fw-bold text-primary">📍 Alamat</h5>
<p class="mt-3">
Jl. R.A Kartini, Benteng,<br>
Kepulauan Selayar,<br>
Sulawesi Selatan 92861
</p>

</div>
</div>

<!-- TELEPON -->
<div class="col-md-4">
<div class="card-box text-center">

<h5 class="fw-bold text-primary">📞 Telepon</h5>
<p class="mt-3">
Kantor: (0414) 123456<br>
Admin: +62 852-9920-4348
</p>

<a href="https://wa.me/6285299204348" target="_blank" class="wa-btn">
💬 Chat WhatsApp
</a>

</div>
</div>

<!-- EMAIL -->
<div class="col-md-4">
<div class="card-box text-center">

<h5 class="fw-bold text-primary">✉️ Email</h5>
<p class="mt-3">
sma.muhselayar@gmail.com<br>
smamuhammadiyahbenteng.sch.id
</p>

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