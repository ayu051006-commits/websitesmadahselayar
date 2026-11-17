<?php
$halaman = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Visi & Misi - SMADAH Selayar</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    font-family: Arial, sans-serif;
    background:#f5f7fb;
}

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

.section{
    padding:60px 0;
}

.title{
    text-align:center;
    color:#0d6efd;
    font-weight:bold;
    margin-bottom:30px;
}

.box{
    background:white;
    padding:25px;
    border-radius:12px;
    box-shadow:0 3px 10px rgba(0,0,0,0.1);
    height:100%;
}

/* LIST */
.box ul{
    padding-left:20px;
}

.box li{
    margin-bottom:10px;
}

/* ICON */
.icon{
    font-size:40px;
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
<h1>Visi, Misi & Tujuan</h1>
<p>SMA Muhammadiyah Kepulauan Selayar</p>
</div>
</section>

<!-- PENJELASAN -->
<section class="section">
<div class="container text-center">

<p class="lead">
SMA Muhammadiyah Kepulauan Selayar berkomitmen untuk mencetak generasi Islami yang unggul dan siap menghadapi tantangan global.
</p>

</div>
</section>

<!-- VISI -->
<section class="section bg-light">
<div class="container">

<h2 class="title">Visi</h2>

<div class="box text-center">
<p class="fs-5">
<strong>
"Terwujudnya peserta didik yang berakhlak mulia, unggul dalam prestasi, berjiwa kepemimpinan, dan berwawasan global berdasarkan nilai-nilai Islam dan Kemuhammadiyahan."
</strong>
</p>
</div>

</div>
</section>

<!-- MISI -->
<section class="section">
<div class="container">

<h2 class="title">Misi</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="box">
<div class="icon">🕌</div>
<p>Menciptakan suasana sekolah religius dan bermartabat.</p>
</div>
</div>

<div class="col-md-4">
<div class="box">
<div class="icon">📚</div>
<p>Meningkatkan prestasi akademik dan non akademik.</p>
</div>
</div>

<div class="col-md-4">
<div class="box">
<div class="icon">😊</div>
<p>Membudayakan 5S: Senyum, Salam, Sapa, Sopan, Santun.</p>
</div>
</div>

<div class="col-md-4">
<div class="box">
<div class="icon">🌱</div>
<p>Menciptakan lingkungan sekolah sehat, nyaman dan aman.</p>
</div>
</div>

<div class="col-md-4">
<div class="box">
<div class="icon">🇮🇩</div>
<p>Mengembangkan profil pelajar Pancasila.</p>
</div>
</div>

<div class="col-md-4">
<div class="box">
<div class="icon">📖</div>
<p>Mengembangkan gerakan literasi sekolah.</p>
</div>
</div>

<div class="col-md-4">
<div class="box">
<div class="icon">🤝</div>
<p>Menjalin kerja sama dengan orang tua dan masyarakat.</p>
</div>
</div>

</div>

</div>
</section>

<!-- TUJUAN -->
<section class="section bg-light">
<div class="container">

<h2 class="title">Tujuan</h2>

<div class="box">
<ul>
<li>Menghasilkan lulusan yang beriman, bertakwa, dan berakhlak mulia.</li>
<li>Mempersiapkan peserta didik melanjutkan pendidikan ke jenjang lebih tinggi.</li>
<li>Menumbuhkan kemandirian, tanggung jawab, dan kepemimpinan.</li>
<li>Membekali siswa dengan pengetahuan dan keterampilan sesuai zaman.</li>
<li>Membentuk budaya sekolah religius, disiplin, peduli lingkungan, dan cinta tanah air.</li>
<li>Meningkatkan peran warga sekolah dalam mewujudkan visi dan misi.</li>
<li>Menjadikan sekolah unggul, inklusif, dan berbasis nilai Islam.</li>
</ul>
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
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>