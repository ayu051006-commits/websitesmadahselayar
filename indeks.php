<?php
$halaman = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Website Sekolah</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.navbar{
    background:#0d6efd;
}
.nav-link.active{
    font-weight:bold;
    color:yellow !important;
}
.topbar{
    background:#0b5ed7;
    color:white;
    font-size:14px;
    padding:6px 0;
}
</style>
</head>

<body>

<!-- TOPBAR -->
<div class="topbar">
<div class="container d-flex justify-content-between">
    <div>📞 (+62) 0852-9920-4348</div>
    <div>✉️ Smas.Muhammadiyah.selayar@gmail.com</div>
</div>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
<div class="container">

<a class="navbar-brand" href="index.php">
    Logo Sekolah
</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link <?= ($halaman=='index.php')?'active':''; ?>" href="index.php">Beranda</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($halaman=='sejarah.php')?'active':''; ?>" href="sejarah.php">Profil</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($halaman=='program.php')?'active':''; ?>" href="program.php">Program</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($halaman=='ekskul.php')?'active':''; ?>" href="ekskul.php">Ekstrakurikuler</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($halaman=='galeri.php')?'active':''; ?>" href="galeri.php">Galeri</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($halaman=='berita.php')?'active':''; ?>" href="berita.php">Berita</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($halaman=='kontak.php')?'active':''; ?>" href="kontak.php">Kontak</a>
</li>

</ul>

</div>
</div>
</nav>