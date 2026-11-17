<?php
$halaman = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>SMADAH Selayar</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
 body{
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .topbar{
            background: #0d6efd;
            color: white;
            padding: 8px 0;
            font-size: 14px;
        }

        .navbar{
            box-shadow: 0 2px 10px rgba(0,0,0,.1);
        }

        .hero{
            background: linear-gradient(rgba(0,0,0,.65),rgba(0,0,0,.65)),
                        url('Image/foto1.jpg');
            background-size: cover;
            background-position: center;
            min-height: 45vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero h1{
            font-size: 48px;
            font-weight: bold;
        }

        .section-title{
            color: #0d6efd;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .table{
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 12px rgba(0,0,0,.08);
        }

        .table thead{
            background: #0d6efd;
            color: white;
        }

        footer{
            background: #1f2937;
            color: white;
            padding: 50px 0 20px;
            margin-top: 50px;
        }

        footer a{
            color: #ddd;
            text-decoration: none;
        }

        footer a:hover{
            color: white;
        }

</style>
</head>

<body>

<nav class="navbar navbar-expand-lg sticky-top">
<div class="container">
<a class="navbar-brand fw-bold text-primary " href="index.php">
<img src="Image/Logosmadah.png" width="60" class="me-2">
SMADAH SELAYAR
</a>
<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<a class="nav-link active link-primary fw-bold <?= ($halaman=='index.php') ? 'active' : ''; ?>" href="index.php">
BERANDA
</a>
</li>
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
<li class="nav-item">
<a class="nav-link <?= ($halaman=='program.php') ? 'active' : ''; ?>" href="program.php">
PROGRAM UNGGULAN
</a>
</li>
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
<li class="nav-item">
<a class="nav-link <?= ($halaman=='kontak.php') ? 'active' : ''; ?>" href="kontak.php">
KONTAK
</a>
</li>
</ul>
</div>
</div>
</nav>
<section class="hero">
<div class="container">
<h1>SMADAH SELAYAR</h1>
<p>Generasi Islami, Cerdas, Berprestasi, dan Berakhlak Mulia</p>
<a href="sejarah.php" class="btn btn-primary btn-lg mt-3">Tentang Kami</a>
</div>
</section>
<section class="py-5">
<div class="container">
<h2 class="title">Tentang Sekolah</h2>
<p class="text-center">
SMA Muhammadiyah Kepulauan Selayar adalah lembaga pendidikan Islam yang berkomitmen mencetak generasi unggul, beriman, dan berilmu.
</p>
</div>
</section>
<section class="stats">
<div class="container">
<div class="row">
<div class="col-md-3">
<h2>1985</h2>
<p>Tahun Berdiri</p>
</div>
<div class="col-md-3">
<h2>500+</h2>
<p>Siswa</p>
</div>
<div class="col-md-3">
<h2>30+</h2>
<p>Guru</p>
</div>
<div class="col-md-3">
<h2>50+</h2>
<p>Prestasi</p>
</div>
</div>
</div>
</section>
<section class="py-5">
<div class="container">
<h2 class="title">Berita Terbaru</h2>
<div class="row g-4">
<div class="col-md-4">
<div class="card p-3">
<h5>PPDB Dibuka</h5>
<p>Penerimaan siswa baru SMA Muhammadiyah telah dibuka.</p>
</div>
</div>
<div class="col-md-4">
<div class="card p-3">
<h5>Prestasi Siswa</h5>
<p>Siswa meraih juara lomba tingkat provinsi.</p>
</div>
</div>

<div class="col-md-4">
<div class="card p-3">
<h5>Kegiatan PMR</h5>
<p>PMR melakukan aksi sosial di masyarakat.</p>
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
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>