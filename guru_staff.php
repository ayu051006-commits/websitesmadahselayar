<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guru dan Staf - SMA Muhammadiyah Kepulauan Selayar</title>

    <!-- Bootstrap CSS -->
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
            <img src="Image/Logosmadah.png" width="60" class="me-2">
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
        <h1>Guru dan Staf</h1>
        <p class="lead">
            Tenaga pendidik dan kependidikan yang profesional, berdedikasi, dan berkomitmen membentuk generasi Islami yang unggul.
        </p>
    </div>
</section>

<!-- TABEL GURU DAN STAF -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="section-title">Daftar Guru dan Staf</h2>
            <p>SMA Muhammadiyah Kepulauan Selayar</p>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Jabatan</th>
                        <th>Mata Pelajaran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>MUSLIM RAZAK, S.Sos</td>
                        <td>Kepala Sekolah</td>
                        <td class="text-center">-</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>ARSYI ANTI, S.Pd</td>
                        <td>Wakil Kurikulum</td>
                        <td>Pendidikan Pancasila</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>ANDI JUMRIANA PALALOI, S.Ag</td>
                        <td>Guru</td>
                        <td>PAI</td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>ANDI AWING, S.Pd</td>
                        <td>Guru</td>
                        <td>Sosiologi</td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>ANDI WARNA ARIF, S.E</td>
                        <td>Staf TU</td>
                        <td class="text-center">-</td>
                    </tr>
                    <tr>
                        <td class="text-center">6</td>
                        <td>RUKMINI, S.Pd, Gr.</td>
                        <td>Guru</td>
                        <td>Matematika</td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td>WISI ASTUTI, S.Pd</td>
                        <td>Guru</td>
                        <td>Sejarah</td>
                    </tr>
                    <tr>
                        <td class="text-center">8</td>
                        <td>ZULFIANA, S.Pd</td>
                        <td>Guru</td>
                        <td>Fisika</td>
                    </tr>
                    <tr>
                        <td class="text-center">9</td>
                        <td>ANDI SAWAL, S.Pd</td>
                        <td>Guru</td>
                        <td>Ekonomi</td>
                    </tr>
                    <tr>
                        <td class="text-center">10</td>
                        <td>HARIS, S.Pd.I, Gr.</td>
                        <td>Guru</td>
                        <td>Bimbingan Konseling</td>
                    </tr>
                    <tr>
                        <td class="text-center">11</td>
                        <td>NUR ASNI ERVINA, S.Pd.I, Gr.</td>
                        <td>Guru</td>
                        <td>Geografi</td>
                    </tr>
                    <tr>
                        <td class="text-center">12</td>
                        <td>DAENG MAKLASSA, S.Pd</td>
                        <td>Guru</td>
                        <td>Kimia</td>
                    </tr>
                    <tr>
                        <td class="text-center">13</td>
                        <td>ANCHI TENRI, S.Pd</td>
                        <td>Guru</td>
                        <td>Biologi</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="container text-center">
        <img src="Image/logo SMADAH.png" width="70" class="mb-3">
        <h4>SMA Muhammadiyah Selayar</h4>
        <p>
            Mencetak generasi Islami, cerdas, dan berprestasi untuk masa depan Indonesia yang lebih baik.
        </p>

        <hr class="border-light">

        <p>📍 Benteng, Kepulauan Selayar</p>
        <p>✉️ sma.muhselayar@gmail.com</p>
        <p>📞 0852-9920-4348</p>

        <div class="mt-3">
            © 2025 SMA Muhammadiyah Kepulauan Selayar. All rights reserved.
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>