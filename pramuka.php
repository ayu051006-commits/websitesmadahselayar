<?php
$halaman = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pramuka - SMA Muhammadiyah Selayar</title>

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
    url('Image/pramuka.jpeg');
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
<h1>Ekstrakurikuler Pramuka</h1>
<p>Pramuka bukan hanya kegiatan, tapi pembentukan karakter, kepemimpinan, dan rasa cinta tanah air</p>
</div>
</section>

<!-- INTRO -->
<section class="section">
<div class="container">

<h2 class="title">Kegiatan Pramuka</h2>

<div class="row align-items-center">

<div class="col-md-6">
<img src="Image/pramuka.jpeg" class="img-fluid rounded shadow">
</div>

<div class="col-md-6">

<h4>Membentuk Generasi Tangguh dan Mandiri</h4>

<p>
Pramuka di SMA Muhammadiyah Kepulauan Selayar adalah kegiatan ekstrakurikuler unggulan yang membentuk karakter disiplin, mandiri,
 dan bertanggung jawab.
</p>

<p>
Siswa belajar di alam terbuka, mengasah keterampilan hidup, serta mengembangkan jiwa kepemimpinan.
</p>

<p>
Pramuka juga menanamkan nilai kebangsaan, cinta tanah air, dan kepedulian sosial.
</p>

</div>

</div>

</div>
</section>

<!-- ACTIVITIES -->
<section class="section bg-light">
<div class="container">

<h2 class="title">Kegiatan Pramuka</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="card-box text-center">
<div class="icon">🏕️</div>
<h5>Pelatihan & Lomba</h5>
<p>PBB, pionering, semaphore, dan jelajah alam yang menantang.</p>
</div>
</div>

<div class="col-md-4">
<div class="card-box text-center">
<div class="icon">🤝</div>
<h5>Kegiatan Sosial</h5>
<p>Bakti sosial, donor darah, dan aksi kemanusiaan di masyarakat.</p>
</div>
</div>

<div class="col-md-4">
<div class="card-box text-center">
<div class="icon">🌿</div>
<h5>Cinta Alam</h5>
<p>Camping, hiking, dan eksplorasi lingkungan sekitar sekolah.</p>
</div>
</div>

</div>

</div>
</section>

<!-- GALLERY -->
<section class="section">
<div class="container">

<h2 class="title">Galeri Kegiatan Pramuka</h2>

<div class="row g-4 gallery">

<div class="col-md-4">
<img src="Image/pramuka1.jpeg" alt="Foto Pramuka 1">
</div>

<div class="col-md-4">
<img src="Image/pramuka2.jpeg" alt="Foto Pramuka 2">
</div>

<div class="col-md-4">
<img src="Image/pramuka3.jpeg" alt="Foto Pramuka 3">
</div>

</div>

</div>
</section>

<!-- CTA -->
<section class="cta">
<div class="container">
<h2>Siap Menjadi Pramuka Tangguh?</h2>
<p>Bergabunglah dan bentuk karakter terbaikmu bersama Pramuka SMADAH Selayar</p>
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