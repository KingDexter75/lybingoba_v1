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
            <h1>ADD Document</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= PATH ?>dashboard">Home</a></li>
                    <li class="breadcrumb-item">Document</li>
                    <li class="breadcrumb-item active">ADD Document</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ajouter un nouveau Document</h5>

                            <!-- General Form Elements -->
                            <form method="POST">
                                <!-- <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nom Document</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div> -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Trimestre du document</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Choisir le trimestre auquel le document est rattacher</option>
                                            <option value="1">Premier Trimestre</option>
                                            <option value="2">Deuxieme Trimestre</option>
                                            <option value="3">Troisieme Trimestre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Choisir le Document</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="formFile" accept=".pdf,.doc,.docx">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
                                    <div class="col-sm-10">
                                        <input type="submit" value="Enregistrer" class="btn btn-primary" name="submit">
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