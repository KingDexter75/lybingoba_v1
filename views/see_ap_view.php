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
<?php include "includes/header_dashboard.php"; ?>

<!-- ======= Sidebar ======= -->
<?php include "includes/aside.php"; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>See AP</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= PATH ?>dashboard">Home</a></li>
                <li class="breadcrumb-item">AP</li>
                <li class="breadcrumb-item active">See AP</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Animateur Pedagogique</h5>
                        <p>Information sur les animateurs pedagogiques</p>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Nom AP</th>
                                <th>Departement</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="<?= PATH ?>assets/img/WhatsApp Image 2024-10-06 à 19.45.59_f32fda1d.jpg" alt="Profile" class="rounded-circle" style="width: 50px; height: 50px;"></td>
                                <td>9958</td>
                                <td>Curicó</td>
                            </tr>
                            <tr>
                                <td><img src="<?= PATH ?>assets/img/WhatsApp Image 2024-10-06 à 19.45.59_f32fda1d.jpg" alt="Profile" class="rounded-circle" style="width: 50px; height: 50px;"></td>
                                <td>9958</td>
                                <td>Curicó</td>
                            </tr>
                            <tr>
                                <td><img src="<?= PATH ?>assets/img/WhatsApp Image 2024-10-06 à 19.45.59_f32fda1d.jpg" alt="Profile" class="rounded-circle" style="width: 50px; height: 50px;"></td>
                                <td>9958</td>
                                <td>Curicó</td>
                            </tr>
                            <tr>
                                <td><img src="<?= PATH ?>assets/img/WhatsApp Image 2024-10-06 à 19.45.59_f32fda1d.jpg" alt="Profile" class="rounded-circle" style="width: 50px; height: 50px;"></td>
                                <td>9958</td>
                                <td>Curicó</td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include "includes/footer_dashboard.php"; ?>

</body>

</html>