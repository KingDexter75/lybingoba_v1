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

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ajouter un nouveau Animateur Pedagogique</h5>

                            <!-- General Form Elements -->
                            <form method="POST">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nom AP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nom">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Departement AP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="depart">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Image AP</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="formFile" name="image">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary" name="submit">Valider</button>
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