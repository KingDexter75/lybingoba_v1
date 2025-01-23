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
        <h1>See Examen</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= PATH ?>dashboard">Home</a></li>
                <li class="breadcrumb-item">Examen</li>
                <li class="breadcrumb-item active">See Examen</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <?php
    if ($_GET['req'] && $_GET['infos']){
        $req = $_GET['req'];
        $infos = $_GET['infos'];
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

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Examen</h5>
                        <p>Information sur les examens</p>

                        <!-- Table with stripped rows -->
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Examen</th>
                                <th>Session</th>
                                <th>Nombres Admis</th>
                                <th>Nombres Echoue</th>
                                <th>Pourcentage</th>
                                <th>Operations</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($examens as $examen): ?>
                                <tr>
                                    <td><?= $examen['typeExamen'] ?></td>
                                    <td><?= $examen['sessionExamen'] ?></td>
                                    <td><?= $examen['nombreAdmis'] ?></td>
                                    <td><?= $examen['nombreEchoue'] ?></td>
                                    <td><?= $examen['pourcentage'] ?></td>
                                    <td>
                                        <a href="<?= PATH ?>update_examen?modifier=<?= $examen['idExamen'] ?>" class="btn btn-success" title="modifier"><i class="bi bi-pen"></i></a>
                                        <a href="<?= PATH ?>see_examen?delete=<?= $examen['idExamen'] ?>" class="btn btn-danger" title="delete"><i class="bi bi-trash3"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
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