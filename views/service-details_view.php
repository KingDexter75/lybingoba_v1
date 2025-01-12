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
            <h1>Service Scolarité</h1>
            <p>Presentation du service de scolarite scolaire du LYBINGOBA.</p>
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
                            <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Gestion des dossiers d'inscription.</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Gestion des payements des frais de dossiers</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Gestion des solvabilites des eleves</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Gestion du personnels d'appui</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Gestion </span></a>
                        </div>
                    </div><!-- End Services List -->

                    <div class="service-box">
                        <h4>Download Catalog</h4>
                        <div class="download-catalog">
                            <a href="#"><i class="bi bi-filetype-pdf"></i><span>liste des insolvables</span></a>
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
                    <h3>Bienvenue a l'espace scolaire ici vous trouverez tous les renseignements sur la scolarite et frais de dossiers </h3>
                    <p>
                        Le service de la scolarité au lycée Bilingue de Ngodi-bakoko, sur l'aspect financier,
                        est responsable de la gestion des frais de scolarité et des autres contributions financières des élèves.
                        Cela inclut la collecte des paiements,
                        le suivi des impayés et l'établissement de relevés financiers pour chaque élève.
                        les differents etapes de payement dde la scolarite se font chez l'un de ces servives :
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>la CCA banque pour les frais d'APEE .</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>EXPRESS UNION frais exigibles .</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Economat frais de dossiers et la certification des reçus .</span></li>
                    </ul>
                    <p>
                        pour un travail plus rapide et efficase le passage a l'economat se fait selon ce planing:
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Les Lundis les from1 & 6eme.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Les Mardis les from2 & from3 & 5eme & 4eme.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>les Mercredis from4 & 3eme .</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>les Mercredis from5 & 3eme .</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>les Mercredis from4 & 2nd .</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>les Mercredis from5 & tous les premiers.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>les Mercredis upperxisth et lowerxisth & tous les Tles .</span></li>
                    </ul>
                    <p>
                        bien vouloir recupere le matricule de l'enfant avant toute translation financière
                    </p>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->

</main>

<!-- ======= FOOTER ======= -->
<?php include 'includes/footer.php'; ?>

</body>

</html>