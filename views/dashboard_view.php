<!DOCTYPE html>
<html lang="en">

<head>
  
  <title><?= ucfirst($page) ?></title>

  <!-- ======= Head ======= -->
  <?php include 'includes/head.php'; ?>

  <link rel="stylesheet" href="<?= PATH ?>assets/css/dashboard.css">

</head>

<body>

  <!-- ======= Header ======= -->
  <?php include 'includes/header_dashboard.php'; ?>

  <!-- ======= Sidebar ======= -->
  <?php include 'includes/aside.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1><?= ucfirst($page) ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= PATH ?>dashboard">Home</a></li>
          <li class="breadcrumb-item active"><?= ucfirst($page) ?></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <h1 style="display: flex; align-items: center; justify-content: center; text-align: center;">Bienvenue dans l'interface administrateur du LYBINGOBA</h1>

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'includes/footer_dashboard.php'; ?>

</body>

</html>