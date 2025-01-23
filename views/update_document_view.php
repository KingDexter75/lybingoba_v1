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
            <h1>UPDATE Document</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= PATH ?>dashboard">Home</a></li>
                    <li class="breadcrumb-item">Document</li>
                    <li class="breadcrumb-item active">UPDATE Document</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!--  ======= AFFICHAGE DES ERREURS ======  -->
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

        <div class="card">
            <div class="card-body" style="display: flex; justify-content: space-between; text-align: center; align-items: center">

                <button type="button" class="btn btn-primary"><a href="<?= PATH ?>see_Document" style="color: white;"><i class="bi bi-arrow-left me-1"></i>Back</a></button>
                <h5 class="card-title">Retour</h5>
            </div>
        </div>

        <section class="section profile">
            <div class="row">

                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">File</label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="pt-2">
                                                    <label class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"><input type="file" name="file" id="" accept="pdf,doc, docx"></i></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">nom du document</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="nom" type="text" class="form-control" id="fullName" value="<?= $infos_document['titreDocument']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Trimestre du document</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" name="trimestre" id="trimestre" aria-label="Default select example">
                                                <?php if($infos_document['trimestreDocument'] == 1){ ?>
                                                    <option value="<?= $infos_document['trimestreDocument'] ?>">Premier Trimestre</option>
                                                    <option value="2">Deuxieme Trimestre</option>
                                                    <option value="3">Troisieme Trimestre</option>
                                                <?php }elseif($infos_document['trimestreDocument'] == 2){ ?>
                                                    <option value="<?= $infos_document['trimestreDocument'] ?>">Deuxieme Trimestre</option>
                                                    <option value="1">Premier Trimestre</option>
                                                    <option value="3">Troisieme Trimestre</option>
                                                <?php }else { ?>
                                                    <option value="<?= $infos_document['trimestreDocument'] ?>">Troisieme Trimestre</option>
                                                    <option value="1">Premier Trimestre</option>
                                                    <option value="2">Deuxieme Trimestre</option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <input type="submit" class="btn btn-primary" value="Sauvegarder" name="update">
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

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