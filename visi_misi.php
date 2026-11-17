<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi - SMA Muhammadiyah Kepulauan Selayar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            font-family: Arial, sans-serif;
            background: #f8f9fa;
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
            min-height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
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
            margin-bottom: 20px;
        }

        .content-card{
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 3px 12px rgba(0,0,0,.08);
            margin-bottom: 30px;
        }

        .content-card ul{
            padding-left: 20px;
        }

        .content-card li{
            margin-bottom: 12px;
            text-align: justify;
        }

        footer{
            background: #1f2937;
            color: white;
            padding: 50px 0 20px;
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
<!-- TOPBAR -->
<div class="topbar">
    <div class="container d-flex justify-content-between">
        <div>📞 (+62) 0852-9920-4348</div>
        <div>✉️ Smas.Muhammadiyah.selayar@gmail.com</div>
    </div>
</div>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="beranda.php">
            <img src="Image/logo SMADAH.png" width="45" class="me-2">
            SMA Muhammadiyah Selayar
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="beranda.php" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="profil.php" class="nav-link active">Profil Sekolah</a></li>
                <li class="nav-item"><a href="program.php" class="nav-link">Program Unggulan</a></li>
                <li class="nav-item"><a href="ekstrakurikuler.php" class="nav-link">Ekstrakurikuler</a></li>
                <li class="nav-item"><a href="galeri.php" class="nav-link">Galeri</a></li>
                <li class="nav-item"><a href="berita.php" class="nav-link">Berita</a></li>
                <li class="nav-item"><a href="kontak.php" class="nav-link">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- HERO -->
<section class="hero">
    <div class="container">
        <h1>Visi, Misi, dan Tujuan</h1>
        <p class="lead">
            SMA Muhammadiyah Kepulauan Selayar berkomitmen untuk mencetak generasi Islami yang unggul dan siap menghadapi tantangan global.
        </p>
    </div>
</section>
<!-- VISI MISI -->
<section class="py-5">
    <div class="container">
        <!-- VISI -->
        <div class="content-card">
            <h2 class="section-title text-center">Visi</h2>
            <p class="text-center fs-5">
                <i>
                "Terwujudnya peserta didik yang berakhlak mulia, unggul dalam prestasi,
                berjiwa kepemimpinan, dan berwawasan global berdasarkan nilai-nilai Islam
                dan Kemuhammadiyahan."
                </i>
            </p>
        </div>
        <!-- MISI -->
        <div class="content-card">
            <h2 class="section-title text-center">Misi</h2>
            <ul>
                <li>Menciptakan suasana kehidupan sekolah yang menjunjung tinggi nilai budaya religius dan bermartabat.</li>
                <li>Meningkatkan mutu prestasi baik akademik maupun non akademik.</li>
                <li>Membudayakan kegiatan 5S yaitu Senyum, Salam, Sapa, Sopan, dan Santun untuk mewujudkan pribadi yang berakhlakul karimah.</li>
                <li>Menciptakan lingkungan sekolah yang sehat, nyaman, dan aman sebagai wahana kegiatan belajar bagi seluruh warga sekolah.</li>
                <li>Menumbuhkan karakter Profil Pelajar Pancasila untuk mendorong peserta didik menggali potensi diri sehingga mampu meraih cita-citanya.</li>
                <li>Mengembangkan gerakan literasi sekolah sebagai upaya strategis dalam memperluas pengetahuan peserta didik.</li>
                <li>Menjalin kerja sama yang harmonis dengan orang tua, masyarakat, dan berbagai lembaga untuk mendukung kemajuan sekolah.</li>
            </ul>
        </div>
        <!-- TUJUAN -->
        <div class="content-card">
            <h2 class="section-title text-center">Tujuan</h2>
            <ul>
                <li>Menghasilkan lulusan yang beriman, bertakwa, dan berakhlak mulia.</li>
                <li>Mempersiapkan peserta didik untuk melanjutkan pendidikan ke jenjang yang lebih tinggi.</li>
                <li>Menumbuhkan semangat kemandirian, tanggung jawab, dan kepemimpinan di kalangan siswa.</li>
                <li>Membekali peserta didik dengan pengetahuan, keterampilan, dan sikap yang relevan dengan perkembangan zaman.</li>
                <li>Membentuk budaya sekolah yang religius, disiplin, peduli lingkungan, dan cinta tanah air.</li>
                <li>Meningkatkan peran serta seluruh warga sekolah dalam mewujudkan visi dan misi bersama.</li>
                <li>Menjadikan sekolah sebagai pusat pembelajaran yang unggul, inklusif, dan berbasis nilai-nilai Islam.</li>
            </ul>
        </div>
    </div>
</section>
<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="Image/logo SMADAH.png" width="70" class="mb-3">
                <h4>SMA Muhammadiyah Selayar</h4>
                <p>
                    Mencetak generasi Islami, cerdas, dan berprestasi untuk masa depan Indonesia yang lebih baik.
                </p>
            </div>
            <div class="col-md-2 mb-4">
                <h5>Profil Sekolah</h5>
                <ul class="list-unstyled">
                    <li><a href="sejarah.php">Sejarah</a></li>
                    <li><a href="visi_misi.php">Visi & Misi</a></li>
                    <li><a href="struktur.php">Struktur Organisasi</a></li>
                    <li><a href="guru.php">Guru & Staff</a></li>
                </ul>
            </div>
            <div class="col-md-2 mb-4">
                <h5>Ekstrakurikuler</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Pramuka</a></li>
                    <li><a href="#">PMR</a></li>
                    <li><a href="#">Tapak Suci</a></li>
                    <li><a href="#">Komputer Club</a></li>
                </ul>
            </div>
            <div class="col-md-2 mb-4">
                <h5>Informasi</h5>
                <ul class="list-unstyled">
                    <li><a href="#">PPDB</a></li>
                    <li><a href="galeri.php">Galeri</a></li>
                    <li><a href="berita.php">Berita</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                </ul>
            </div>
            <div class="col-md-2 mb-4">
                <h5>Hubungi Kami</h5>
                <p>Benteng, Kepulauan Selayar</p>
                <p>✉️ sma.muhselayar@gmail.com</p>
                <p>📞 0852-9920-4348</p>
            </div>
        </div>
        <hr class="border-light">
        <div class="text-center">
            © 2025 SMA Muhammadiyah Kepulauan Selayar. All rights reserved.
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>