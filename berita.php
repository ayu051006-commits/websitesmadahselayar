<?php
$berita = [
    [
        "judul" => "PMR SMA Muhammadiyah Benteng Bakti Lingkungan",
        "tanggal" => "2025-07-03",
        "isi" => "Anggota PMR SMA Muhammadiyah Benteng menggelar kegiatan bakti lingkungan di sekitar kota Benteng sebagai bentuk kepedulian terhadap kebersihan lingkungan."
    ],
    [
        "judul" => "Siswa Mengikuti Kemah Latgab PMR Selayar",
        "tanggal" => "2025-07-03",
        "isi" => "Siswa SMA Muhammadiyah Benteng ikut serta dalam kegiatan Kemah Latihan Gabungan (Latgab) PMR Kepulauan Selayar."
    ],
    [
        "judul" => "PPDB SMA Muhammadiyah Telah Dibuka",
        "tanggal" => "2025-07-03",
        "isi" => "Pendaftaran peserta didik baru tahun ajaran 2024/2025 resmi dibuka dan mulai disosialisasikan kepada masyarakat."
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Sekolah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">SMA Muhammadiyah</a>
    <div class="navbar-nav ms-auto">
        <a class="nav-link" href="index.php">Beranda</a>
        <a class="nav-link active" href="berita.php">Berita</a>
    </div>
  </div>
</nav>
<!-- HEADER -->
<div class="bg-primary text-white text-center py-5">
    <h2>Berita Sekolah</h2>
    <p>Informasi terbaru kegiatan sekolah</p>
</div>
<!-- LIST BERITA -->
<div class="container py-5">
    <div class="row">
        <?php foreach ($berita as $b) : ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h6 class="text-primary"><?= $b['tanggal']; ?></h6>
                    <h5><?= $b['judul']; ?></h5>
                    <p><?= substr($b['isi'], 0, 100); ?>...</p>

                    <a href="#" class="btn btn-sm btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
    © 2025 SMA Muhammadiyah Kepulauan Selayar
</footer>

</body>
</html>