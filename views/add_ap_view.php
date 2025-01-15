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
            <h1>ADD AP</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= PATH ?>dashboard">Home</a></li>
                    <li class="breadcrumb-item">AP</li>
                    <li class="breadcrumb-item active">ADD AP</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <?php
            if (isset($infos)){
                if ($req == "Success") {
                    echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>' . $req . '</strong>' . $infos . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    ';
                }
                else {
                    echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>' . $req . '</strong>' . $infos . '
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
                            <h5 class="card-title">Ajouter un nouveau Animateur Pedagogique</h5>

                            <!-- General Form Elements -->
                            <form method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nom AP</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nom" class="form-control" id="" required="required">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Departement AP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="depart" required="required">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Image AP</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control" id="" accept="image/*" required="required">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
                                    <div class="col-sm-10">
                                        <input type="submit" value="Valider" class="btn btn-primary" name="submit">
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

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