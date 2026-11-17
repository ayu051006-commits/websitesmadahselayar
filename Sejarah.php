<?php
$halaman = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sejarah - SMA Muhammadiyah Selayar</title>

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
}
.timeline{
    position:relative;
    max-width:900px;
    margin:auto;
}
.timeline::after{
    content:'';
    position:absolute;
    width:4px;
    background:#0d6efd;
    top:0;
    bottom:0;
    left:50%;
    margin-left:-2px;
}
.item{
    padding:20px;
    position:relative;
    width:50%;
}
.left{
    left:0;
}
.right{
    left:50%;
}
.content{
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 3px 10px rgba(0,0,0,0.1);
}
.year{
    font-size:22px;
    font-weight:bold;
    color:#0d6efd;
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
<nav class="navbar navbar-expand-lg sticky-top">
<div class="container">
<a class="navbar-brand fw-bold text-primary" href="index.php">
<img src="Image/Logosmadah.png" width="60" class="me-2">
SMADAH SELAYAR
</a>
<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<a class="nav-link <?= ($halaman=='index.php') ? 'active' : ''; ?>" href="index.php">
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
<section class="header">
<div class="container">
<h1>Sejarah SMADAH Selayar</h1>
<p>Perjalanan panjang penuh perjuangan & prestasi</p>
</div>
</section>
<section class="section">
<div class="container">
<h2 class="title">Api Semangat dari Muhammadiyah</h2>
<div class="box">
<p>
Sejarah SMA Muhammadiyah Kepulauan Selayar adalah kisah tentang visi, dedikasi, dan semangat pantang menyerah yang tak pernah padam. Berawal dari cita-cita luhur Pimpinan Daerah Muhammadiyah Kepulauan Selayar pada tahun 1985, sekolah ini didirikan untuk menjawab kebutuhan akan pendidikan berkualitas yang berlandaskan nilai-nilai Islam di tengah masyarakat. Saat itu, fasilitas pendidikan mungkin masih sederhana, namun tekad untuk mencerdaskan generasi muda sangatlah kuat.
</p>
<p>
Para tokoh perintis dan ulama setempat bergerak bersama, menggalang dukungan dari berbagai lapisan masyarakat. Dengan segala keterbatasan, mereka memulai langkah pertama, membuka pintu bagi siswa-siswi yang haus akan ilmu.
</p>
</div>
</div>
</section>
<section class="section bg-light">
<div class="container">
<h2 class="title">Lika-Liku Perjalanan</h2>
<div class="box">
<p>
Perjalanan SMA Muhammadiyah Kepulauan Selayar tidak selalu mulus. Ada banyak tantangan seperti keterbatasan fasilitas, perubahan kurikulum, hingga dinamika zaman. Namun semangat guru, siswa, dan masyarakat membuat sekolah ini terus berkembang.
</p>
<p>
Pada tahun 1995, sekolah berhasil meraih Akreditasi “B” sebagai bukti peningkatan kualitas pendidikan. Fasilitas terus berkembang mulai dari ruang kelas, laboratorium, hingga perpustakaan modern.
</p>
</div>
</div>
</section>
<section class="section">
<div class="container">
<h2 class="title">Prestasi dan Perkembangan</h2>
<div class="box">
<p>
Siswa SMA Muhammadiyah Kepulauan Selayar telah meraih berbagai prestasi di bidang akademik maupun non-akademik seperti olimpiade sains, olahraga, seni, dan tilawah Al-Qur’an.
</p>
</div>
</div>
</section>
<section class="section bg-light">
<div class="container">
<h2 class="title">Linimasa Sejarah</h2>
<div class="timeline">
<div class="item left">
<div class="content">
<div class="year">1985</div>
<p>Berdirinya SMA Muhammadiyah Selayar oleh tokoh Muhammadiyah.</p>
</div>
</div>
<div class="item right">
<div class="content">
<div class="year">1990</div>
<p>Perkembangan jumlah siswa dan kegiatan ekstrakurikuler.</p>
</div>
</div>
<div class="item left">
<div class="content">
<div class="year">1995</div>
<p>Meraih akreditasi “B” sebagai pengakuan mutu pendidikan.</p>
</div>
</div>
<div class="item right">
<div class="content">
<div class="year">2005</div>
<p>Pengembangan fasilitas laboratorium dan perpustakaan.</p>
</div>
</div>
<div class="item left">
<div class="content">
<div class="year">2015</div>
<p>Integrasi teknologi dalam pembelajaran.</p>
</div>
</div>
<div class="item right">
<div class="content">
<div class="year">2020</div>
<p>Pembelajaran digital dan sistem daring.</p>
</div>
</div>
<div class="item left">
<div class="content">
<div class="year">2025</div>
<p>Menjadi sekolah unggulan Islami berdaya saing global.</p>
</div>
</div>
</div>
</div>
</section>
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