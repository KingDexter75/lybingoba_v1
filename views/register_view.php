<!DOCTYPE html>
<html lang="en">

<head>
  
  <title><?= ucfirst($page) ?></title>

  <!-- ======= Head ======= -->
  <?php include 'includes/head.php'; ?>

  <link rel="stylesheet" href="<?= PATH ?>assets/css/dashboard.css">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="<?= PATH ?>assets/img/WhatsApp Image 2024-10-06 à 19.45.59_f32fda1d.jpg" alt="" style="width: 30px; height: 90px;">
                  <span class="d-none d-lg-block">Admin Lybingoba</span>
                </a>
              </div><!-- End Logo -->

                <?php
                if (isset($infos)){
                    if ($req == "Success") {
                        echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>' . $req . ' </strong>' . $infos . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    ';
                    }
                    else{
                        echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>' . $req . ' </strong>' . $infos . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    ';
                    }
                }
                ?>

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate method="POST">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required="required">
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required="required">
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" value="Valider" class="btn btn-primary w-100" name="submit">
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="<?= PATH ?>login">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= PATH ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?= PATH ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= PATH ?>assets/vendor/chart.js/chart.umd.js"></script>
<script src="<?= PATH ?>assets/vendor/echarts/echarts.min.js"></script>
<script src="<?= PATH ?>assets/vendor/quill/quill.js"></script>
<script src="<?= PATH ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?= PATH ?>assets/vendor/tinymce/tinymce.min.js"></script>
<script src="<?= PATH ?>assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= PATH ?>assets/js/dashboard.js"></script>

</body>

</html>