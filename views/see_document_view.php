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
        <h1>See Document</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= PATH ?>dashboard">Home</a></li>
                <li class="breadcrumb-item">Document</li>
                <li class="breadcrumb-item active">See Document</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

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

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Documents trimestriels</h5>
                        <p>Information sur les documents trimestriels</p>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th>Nom Document</th>
                                <th>Numero du Trimestre</th>
                                <th>Operations</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($docs as $doc): ?>
                                <tr>
                                    <td><?= $doc['titreDocument'] ?></td>
                                    <td><?= $doc['trimestreDocument'] ?></td>
                                    <td>
                                        <a href="<?= PATH ?>update_document?modifier=<?= $doc['idDocument'] ?>" class="btn btn-success" title="modifier"><i class="bi bi-pen"></i></a>
                                        <a href="<?= PATH ?>see_document?delete=<?= $doc['idDocument'] ?>" class="btn btn-danger" title="delete"><i class="bi bi-trash3"></i></a>
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