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
        <h1>UPDATE AP</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= PATH ?>dashboard">Home</a></li>
                <li class="breadcrumb-item">AP</li>
                <li class="breadcrumb-item active">UPDATE AP</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body" style="display: flex; justify-content: space-between; text-align: center; align-items: center">

            <button type="button" class="btn btn-primary"><i class="bi bi-arrow-left me-1"></i><a href="<?= PATH ?>see_ap" style="color: white;">Back</a></button>
            <h5 class="card-title">Retour</h5>
        </div>
    </div>

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

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="<?= PATH ?><?= $infos_ap['photoAP']; ?>" alt="Profile" class="rounded-circle">
                        <h2><?= $infos_ap['nomAP']; ?></h2>
                        <h3><?= $infos_ap['departementAP']; ?></h3>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

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
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                        <div class="col-md-8 col-lg-9">
                                            <img src="<?= PATH ?><?= $infos_ap['photoAP']; ?>" alt="Profile">
                                            <div class="pt-2">
                                                <label class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"><input type="file" name="image" id="" accept="image/*"></i></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="nom" type="text" class="form-control" id="fullName" value="<?= $infos_ap['nomAP']; ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Departement</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="depart" type="text" class="form-control" id="Phone" value="<?= $infos_ap['departementAP']; ?>">
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