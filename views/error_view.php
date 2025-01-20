<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= ucfirst($page) ?></title>
    <?php include "includes/head.php"; ?>
    <link rel="stylesheet" href="<?= PATH ?>assets/css/dashboard.css">
</head>

<body>

<main>
    <div class="container">

        <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
            <h1>404</h1>
            <h2>The page you are looking for doesn't exist.</h2>
            <a class="btn" href="<?= PATH ?>index">Back to home</a>
            <img src="<?= PATH ?>assets/img/not-found.svg" class="img-fluid py-5" alt="Page Not Found">
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