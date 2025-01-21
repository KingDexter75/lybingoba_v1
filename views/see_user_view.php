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
        <h1>See user</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= PATH ?>dashboard">Home</a></li>
                <li class="breadcrumb-item">user</li>
                <li class="breadcrumb-item active">See user</li>
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
                        <h5 class="card-title">Administrateur du site</h5>
                        <p>Information sur les administrateur du site</p>

                        <!-- Table with stripped rows -->
                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Username</th>
                                <th>Operations</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $user['idUser'] ?></td>
                                    <td><?= $user['loginUser'] ?></td>
                                    <td>
                                        <a href="<?= PATH ?>update_user?modifier=<?= $user['idUser'] ?>" class="btn btn-success" title="modifier"><i class="bi bi-pen"></i></a>
                                        <a href="<?= PATH ?>see_user?delete=<?= $user['idUser'] ?>" class="btn btn-danger" title="delete"><i class="bi bi-trash3"></i></a>
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