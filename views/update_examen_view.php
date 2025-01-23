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
            <h1>Update Examen</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= PATH ?>dashboard">Home</a></li>
                    <li class="breadcrumb-item">Examen</li>
                    <li class="breadcrumb-item active">Update Examen</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <?php
        if (isset($infos)) {
            if ($req == "Success") {
                echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>' . $req . ' </strong>' . $infos . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    ';
            } else {
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
                            <h5 class="card-title">Modifier les informations sur l'examen</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3" method="POST" enctype="multipart/form-data">
                            
                                <div class="col-md-6">
                                    <label for="inputName5" class="form-label">Session</label>
                                    <input type="month" class="form-control" name="session" value="<?= $infos_examen['sessionExamen'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Fichier des admis</label>
                                    <input class="form-control" type="file" id="formFile" name="file" accept=".pdf,.doc,.docx">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputCity" class="form-label">Nombres presentes</label>
                                    <input type="number" class="form-control" name="nbPres" value="<?= $infos_examen['nombrePresentes'] ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Nombres Admis</label>
                                    <input type="number" class="form-control" name="nbAdmis" value="<?= $infos_examen['nombreAdmis'] ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputZip" class="form-label">Nombres Echoues</label>
                                    <input type="number" class="form-control" name="nbEchoue" value="<?= $infos_examen['nombreEchoue'] ?>">
                                </div>
                                <div class="col-12">
                                    <label for="inputZip" class="form-label">Pourcentage de reussite</label>
                                    <input type="text" class="form-control" name="pourcentage" value="<?= $infos_examen['pourcentage'] ?>">
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="update" value="Mettre a jour" class="btn btn-primary">
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'includes/footer_dashboard.php'; ?>

</body>

</html>