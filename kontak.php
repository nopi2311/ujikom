<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Smkn 4 tasikmalaya </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-color: #f8f9fa;
    }
    .contact-section {
      padding: 60px 0;
    }
    .breadcrumb {
      background: transparent;
    }
    .contact-card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      padding: 20px;
      text-align: center;
      transition: all 0.3s ease;
    }
    .contact-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 16px rgba(0,0,0,0.12);
    }
    .contact-icon {
      font-size: 28px;
      color: #6c63ff;
      margin-bottom: 10px;
    }
    .contact-title {
      font-weight: 600;
      margin-bottom: 5px;
    }
  </style>
</head>
<body>
 <?php include 'navbar.php'; ?>


  <!-- Hero Section -->
  <section class="bg-dark text-white text-center py-5" style="background: url('https://via.placeholder.com/1200x400') center/cover no-repeat;">
    <div class="container">
      <h1 class="fw-bold">Kontak Kami</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center mt-3">
          <li class="breadcrumb-item active text-white" aria-current="page">Kontak Kami</li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="container">
      <div class="row g-4 justify-content-center">
        
        <!-- Telepon -->
        <div class="col-md-4">
          <div class="contact-card">
            <i class="bi bi-telephone contact-icon"></i>
            <div class="contact-title">02657528981</div>
            <small class="text-muted">Telepon</small>
          </div>
        </div>

        <!-- Email -->
        <div class="col-md-4">
          <div class="contact-card">
            <i class="bi bi-envelope contact-icon"></i>
            <div class="contact-title">Info@smkn4-tsm.sch.id</div>
            <small class="text-muted">Email</small>
          </div>
        </div>

        <!-- Alamat -->
        <div class="col-md-8">
          <div class="contact-card">
            <i class="bi bi-geo-alt contact-icon"></i>
            <div class="contact-title">
              Jl Depok Kel. Sukamenak Kec. Purbaratu
              Kota Tasikmalaya 46196.

            </div>
            <small class="text-muted">Alamat</small>
          </div>
        </div>

      </div>
    </div>
  </section>




  <?php include 'footer.php';?>
</body>
</html>