<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ======= HEAD ======= -->
    <?php include 'includes/head.php'; ?>

    <title><?= ucfirst($page) ?></title>

    <link href="<?= PATH ?>assets/css/main.css" rel="stylesheet">
</head>

<body class="service-details-page">

<!-- ======= HEADER ======= -->
<?php include 'includes/header.php'; ?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
            <h1>Service Bibliothèque</h1>
            <p>Presentation de la bibliothèque du Lybingoba.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?= PATH ?>home">Accueil</a></li>
                    <li class="current">Service Details</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">

            <div class="row gy-5">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="service-box">
                        <h4>les services offerts </h4>
                        <div class="services-list">
                            <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Gestion des Emprunts.</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Gestion des retours</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Gestion des adherants</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Gestion des visiteurs</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Gestion </span></a>
                        </div>
                    </div><!-- End Services List -->

                    <div class="service-box">
                        <h4>Download Catalog</h4>
                        <div class="download-catalog">
                            <a href="#"><i class="bi bi-filetype-pdf"></i><span>liste des ouvrages disponible</span></a>
                            <a href="#"><i class="bi bi-filetype-pdf"></i><span>liste des classes</span></a>
                            <a href="#"><i class="bi bi-file-earmark-word"></i><span>liste......</span></a>
                        </div>
                    </div><!-- End Services List -->

                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-headset help-icon"></i>
                        <h4>Question?</h4>
                        <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>237 656 47 66 05</span></p>
                        <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="donaldleugoue@gmail.com">donaldleugoue@gmail.com</a></p>
                    </div>

                </div>

                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                    <h3>Bienvenue a l'espace Bibliothèque scolaire ici vous avez les regles de gestion de la bibliothèque </h3>
                    <p>
                        La bibliothèque  joue un rôle essentiel dans le soutien à l'apprentissage
                        et à la recherche des élèves.
                        Voici un aperçu des fonctions et des services généralement offerts par une bibliothèque scolaire :
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>vous pouvez exploiter les documents sur place.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>vous pouvez Emprunts des documents.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>vous propice pour les etudes aux heures libres .</span></li>
                    </ul>
                    <p>
                        Condition d'emprunt d'un document a la bibliothèque
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Etre eleve, enseignant ou personnel du lycee</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Etre en regles avec la scolarite pour les eleves.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Etre de bonne foi.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Ne peut emprunt plus d'un document simultanement.</span></li>

                    </ul>
                    <p>
                        regles a respect en bibliothèque
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>respect le silence</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>respect la proprete.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>ne peut manger a la bibliothèque.</span></li>
                    </ul>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->

</main>

<!-- ======= FOOTER ======= -->
<?php include 'includes/footer.php'; ?>

</body>

</html>