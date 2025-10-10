<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Smkn 4 tasikmalaya </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<body>

    <?php include 'navbar.php'; ?>

    <!-- Background -->
    <div class="hero">
        <div>
            <h2 class="fw-bold animate-title">Selamat Datang Di Website</h2>
            <h4 class="animate-subtitle">SMKN 4 TASIKMALAYA </h4>
        </div>
    </div>

    <!--  Sambutan -->
    <div class="container ">
        <div class="card custom-card p-4 mb-5">
            <div class="row align-items-center">
                <div class="col-md-6 d-flex">
                    <img src="galeri/kepala sekolah.png" alt="Kepala Sekolah" class="profile-img me-3">
                    <div>
                        <h6 class="fw-bold mb-1">Sambutan Kepala Sekolah</h6>
                        <p class="mb-1"><strong>Kurniawan Spd.mpd</strong></p>
                        <p class="text-muted small">
                            Segala puji dan syukur kita panjatkan kehadirat Allah SWT, semoga kita semua ada dalam lindungan-Nya.
                            Dan atas perkenan-Nya pula kami dapat menghadirkan website SMK Negeri 4 Tasikmalaya ini.
                        </p>
                        <a href="sambutan.php" class="btn btn-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <h6 class="fw-bold mb-3">Statistik Data Sekolah</h6>
                    <div class="row">
                        <div class="col-4">
                            <div class="stat-number">82</div>
                            <div class="stat-label">Guru</div>
                        </div>
                        <div class="col-4">
                            <div class="stat-number">1500</div>
                            <div class="stat-label">Siswa</div>
                        </div>
                        <div class="col-4">
                            <div class="stat-number">10</div>
                            <div class="stat-label">Staf</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!-- SECTION BERITA -->
        <div class="container py-5 ">
            <!-- Judul dan Deskripsi -->
            <div class="mb-4">
                <h2 class="berita-title">Berita <span>Terbaru</span></h2>
                <p>
                    Berita terbaru, cerita inspiratif dan informasi terkini seputar kegiatan sekolah kami.
                </p>
            </div>

            <!-- Kartu Berita -->
            <div class="row g-4">
                <!-- Berita 1 -->
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm rounded-4">
                        <img src="galeri/beritaa 1.jpg" class="card-img-top" alt="Berita 1">
                        <div class="card-body">
                            <p class="card-text-date mb-1">Senin, 07 Oktober 2024</p>
                            <h5 class="card-title">Kapolsek Cibeureum AKP Nurrozi memberikan penyuluhan kepada siswa SMKN 4 Tasikmalaya
                                terkait larangan knalpot brong dan aksi geng motor.</h5>
                             <a href="https://newstasikmalaya.com/tag/smkn-4-kota-tasikmalaya" class="btn-baca">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </div>

                <!-- Berita 2 -->
                <div class="col-md-6"> 
                    <div class="card h-100 shadow-sm rounded-4">
                        <img src="galeri/honda.jpeg" class="card-img-top" alt="Berita 2">
                        <div class="card-body">
                            <p class="card-text-date mb-1">Senin, 20 Mei 2024</p>
                            <h5 class="card-title">Honda Resmikan Safety Riding Lab di SMKN 4 Tasikmalaya, Ciptakan Bibit Keselamatan di Jawa Barat</h5>
                             <a href="https://www.pikiran-rakyat.com/otomotif/pr-018109177/honda-resmikan-safety-riding-lab-di-smkn-4-tasikmalaya-ciptakan-bibit-keselamatan-pada-gen-z?page=all" class="btn-baca">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- SECTION GALERI -->
    <div class="container mb-5">
        <h2 class="text-center mb-4">Galeri</h2>
        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <div class="card  shadow-sm ">
                    <img src="galeri/galeri.JPG" alt="Galeri 1" class="card-img-top img-fluid rounded">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card shadow-sm">
                    <img src="galeri/galerii2.jpg" alt="Galeri 2" class="card-img-top img-fluid rounded">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card  shadow-sm">
                    <img src="galeri/galeri3.JPG" alt="Galeri 3" class="card-img-top img-fluid rounded">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card  shadow-sm">
                    <img src="galeri/galeri4.jpg" alt="Galeri 4" class="card-img-top img-fluid rounded">
                </div>
            </div>
        </div>
    </div>

    <!-- TUTUP GALERI -->


    <?php include 'footer.php'; ?>

</body>

</html>