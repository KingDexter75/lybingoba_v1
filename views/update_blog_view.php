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
        <h1>Update Blog</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= PATH ?>dashboard">Home</a></li>
                <li class="breadcrumb-item">Blog</li>
                <li class="breadcrumb-item active">Update Blog</li>
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
                        <h5 class="card-title">Modifier les informations sur le blog</h5>

                        <!-- General Form Elements -->
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Titre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="titre" required="required" value="<?= $infos_blog['titreBlog'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Image du blog</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" accept="image/*" name="image" value="<?= $infos_blog['photoBlog'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date" required="required" value="<?= $infos_blog['dateBlog'] ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Contenu</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" name="contenu"><?= $infos_blog['contenuBlog'] ?></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Submit Button</label>
                                <div class="col-sm-10">
                                    <input type="submit" value="Enregistrer" class="btn btn-primary" name="update">
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