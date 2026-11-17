<?php
$halaman = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Guru & Staf - SMADAH Selayar</title>

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
    margin-bottom:30px;
}

/* TABLE */
.table-box{
    background:white;
    padding:20px;
    border-radius:12px;
    box-shadow:0 3px 10px rgba(0,0,0,0.1);
}

table{
    font-size:14px;
}

th{
    background:#0d6efd !important;
    color:white;
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
<h1>Guru & Staf SMADAH</h1>
<p>Tenaga pendidik profesional & berdedikasi</p>
</div>
</section>

<!-- TABLE -->
<section class="section">
<div class="container">

<h2 class="title">Data Guru & Staf</h2>

<div class="table-box">

<div class="table-responsive">

<table class="table table-bordered table-striped text-center align-middle">

<thead>
<tr>
<th>No</th>
<th>Nama Lengkap</th>
<th>Jabatan</th>
<th>Mata Pelajaran</th>
</tr>
</thead>

<tbody>

<tr><td>1</td><td>MUSLIM RAZAK, S.Sos</td><td>Kepala Sekolah</td><td>-</td></tr>
<tr><td>2</td><td>ARSYI ANTI, S.Pd</td><td>Wakil Kurikulum</td><td>Pendidikan Pancasila</td></tr>
<tr><td>3</td><td>ANDI JUMRIANA PALALOI, S.Ag</td><td>Guru</td><td>PAI</td></tr>
<tr><td>4</td><td>ANDI AWING, S.Pd</td><td>Guru</td><td>Sosiologi</td></tr>
<tr><td>5</td><td>ANDI WARNA ARIF, S.E</td><td>Staf TU</td><td>-</td></tr>
<tr><td>6</td><td>RUKMINI, S.Pd, Gr.</td><td>Guru</td><td>Matematika</td></tr>
<tr><td>7</td><td>WISI ASTUTI, S.Pd</td><td>Guru</td><td>Sejarah</td></tr>
<tr><td>8</td><td>ZULFIANA, S.Pd</td><td>Guru</td><td>Fisika</td></tr>
<tr><td>9</td><td>ANDI SAWAL, S.Pd</td><td>Guru</td><td>Ekonomi</td></tr>
<tr><td>10</td><td>HARIS, S.Pd.I, Gr.</td><td>Guru</td><td>Bimbingan Konseling</td></tr>
<tr><td>11</td><td>NUR ASNI ERVINA, S.Pd.I, Gr.</td><td>Guru</td><td>Geografi</td></tr>
<tr><td>12</td><td>DAENG MAKLASSA, S.Pd</td><td>Guru</td><td>Kimia</td></tr>
<tr><td>13</td><td>ANCHI TENRI, S.Pd</td><td>Guru</td><td>Biologi</td></tr>

</tbody>

</table>

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
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>