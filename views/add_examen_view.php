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
            <h1>ADD Examen</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= PATH ?>dashboard">Home</a></li>
                    <li class="breadcrumb-item">Examen</li>
                    <li class="breadcrumb-item active">ADD Examen</li>
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
                            <h5 class="card-title">Ajouter un nouveau Examen</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3" method="POST" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Examen</label>
                                    <select name="examen" id="section" class="form-select" aria-label="Default select example">
                                        <option selected>Choisir l'examen</option>
                                        <option value="BEPC ESP">BEPC Espagnol</option>
                                        <option value="BEPC ALL">BEPC Allemand</option>
                                        <option value="GCE ORDINARY">GCE Ordinary Level</option>
                                        <option value="PROBATOIRE ESP">Probatoire A4 Espagnol</option>
                                        <option value="PROBATOIRE ALL">Probatoire A4 Allemand</option>
                                        <option value="PROBATOIRE D">Probatoire D</option>
                                        <option value="PROBATOIRE C">Probatoire C</option>
                                        <option value="BACC ESP">Baccalaureat A4 Espagnol</option>
                                        <option value="BACC ALL">Baccalaureat A4 Allemand</option>
                                        <option value="BACC D">Baccalaureat D</option>
                                        <option value="BACC C">Baccalaureat C</option>
                                        <option value="GCE Hight">GCE Hight Level</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputName5" class="form-label">Session</label>
                                    <input type="month" class="form-control" name="session">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Fichier des admis</label>
                                    <input class="form-control" type="file" id="formFile" name="file" accept=".pdf,.doc,.docx">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputCity" class="form-label">Nombres presentes</label>
                                    <input type="number" class="form-control" name="nbPres">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Nombres Admis</label>
                                    <input type="number" class="form-control" name="nbAdmis">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputZip" class="form-label">Nombres Echoues</label>
                                    <input type="number" class="form-control" name="nbEchoue">
                                </div>
                                <div class="col-12">
                                    <label for="inputZip" class="form-label">Pourcentage de reussite</label>
                                    <input type="text" class="form-control" name="pourcentage">
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="submit" value="Enregistrer" class="btn btn-primary">
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