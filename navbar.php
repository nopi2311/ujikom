<style>
    .hero {
        background: url(galeri/gerbanngg.png);
        height: 450px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #fff;
        position: relative;
    }

    .hero::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.5);
    }

    .hero div {
        position: relative;
        z-index: 1;
    }

    .animate-title {
        font-size: 48px;
        animation: fadeInDown 2s;
    }

    .animate-subtitle {
        font-size: 26px;
        animation: fadeInUp 2s;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .custom-card {
        margin-top: -80px;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, .1);
    }

    .profile-img {
        width: 90px;
        height: 90px;
        object-fit: cover;
        border-radius: 50%;
    }

    .stat-number {
        font-size: 28px;
        font-weight: bold;
    }

    .stat-label {
        font-size: 12px;
        color: #666;
        text-transform: uppercase;
    }

    .welcome-card {
        background: rgba(0, 0, 0, 0.5);
    }

    .welcome-text {
        font-size: 40px;
        text-transform: uppercase;
        animation: fadeInUp 2s;
    }
</style>
</head>

<body>

    <!-- Top Header -->
    <div class="container-fluid top-bar">
        <div class="container d-flex justify-content-between align-items-center ">
            <div class="d-flex align-items-center">
                <img src="galeri/Logo.png" alt="Logo" width="60" class="me-2">
                <div class="logo-text">
                    <small>SMKN 4</small>
                    <small>TASIKMALAYA</small>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="me-3">
                    <i class="fa-solid fa-envelope text-primary"></i>
                    <span class="ms-1">info@smkn4-tsm.sch.id</span>
                </div>
                <div class="social-icons">
                    <a href="https://www.facebook.com/4smkn"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/smkn4tasikmalaya/#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@SMKN4Tasikmalaya"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.tiktok.com/@smkn4tasikmalaya"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary-primary  bg-primary sticky-top navbar-dark ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Profil Kami</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                            <li><a class="dropdown-item" href="identitas.php">Identitas</a></li>
                            <li><a class="dropdown-item" href="visi&misi.php">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href=" keahlian.php">Konsentrasi Keahlian</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="eksul.php">Ekstrakurikuler</a></li>
                    <li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>




</body>

</html>