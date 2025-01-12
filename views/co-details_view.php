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
            <h1>Service CO</h1>
            <p>Presentation du service des conseillers d'orientation .</p>
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
                            <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Évaluation et diagnostic .</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Conseil personnalisé.</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span> Ateliers et formations </span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Accompagnement dans les démarches administratives </span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Suivi et évaluation continue</span></a>
                        </div>
                    </div><!-- End Services List -->

                    <div class="service-box">
                        <h4>Download Catalog</h4>
                        <div class="download-catalog">
                            <a href="#"><i class="bi bi-filetype-pdf"></i><span>planing des activites internes</span></a>
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
                    <h3>Voici quelques aspects clés des services d'orientation :</h3>
                    <p>
                        Évaluation et diagnostic : Le service d'orientation propos des outils et des méthodes pour évaluer
                        les compétences, les intérêts et les valeurs des individus. Cela peut inclure des tests psychométriques,
                        des entretiens individuels et des bilans de compétences.
                    </p>
                    Conseil personnalisé : Les conseillers d'orientation offrent un accompagnement sur mesure,
                    en tenant compte des spécificités de chaque individu.
                    Ils aident à explorer les différentes options de formation et de carrière disponibles.
                    <p>
                        les horaires de Visite
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
                        es services d'orientation jouent un rôle crucial dans l'accompagnement des individus vers un parcours
                        éducatif et professionnel épanouissant,
                        en leur offrant des outils, des conseils et un soutien adaptés à leurs besoins.
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