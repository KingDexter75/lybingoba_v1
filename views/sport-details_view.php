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
            <h1>Service Sport</h1>
            <p>Presentation du service de sport .</p>
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
                            <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Éducation Physique et Sportive (EPS).</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Activités sportives extra-scolaires</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Compétitions inter-lycées </span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Accès aux installations sportives</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Gestion des Événements sportifs</span></a>
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
                    <h3>Voici quelques aspects clés des services sportifs dans un lycée : </h3>
                    <p>
                        L'EPS est une matière obligatoire dans de nombreux systèmes éducatifs.
                        Elle vise à développer les compétences physiques des élèves,
                        à leur enseigner les règles des sports et à promouvoir l'esprit d'équipe et le fair-play.
                    </p>
                    Les lycées proposent souvent des clubs ou des équipes sportives où les élèves peuvent pratiquer différents sports
                    (football, basketball, natation, athlétisme, etc.) en dehors des heures de cours.
                    Ces activités favorisent l'engagement,
                    la camaraderie et le développement de compétences spécifiques.
                    <p>
                        De nombreux lycées participent à des compétitions sportives régionales ou nationales.
                        Cela permet aux élèves de se mesurer à d'autres établissements,
                        de développer leur esprit compétitif et de vivre des expériences enrichissantes.
                    </p>
                    <p>
                        Les lycées organisent souvent des événements sportifs, tels que des journées sportives ou des tournois,
                        qui permettent aux élèves de se rassembler,
                        de s'amuser et de renforcer les liens au sein de la communauté scolaire.
                    </p>
                    <p>
                        les services sportifs dans un lycée sont essentiels pour favoriser le développement global des élèves,
                        en leur offrant des opportunités de pratiquer des activités physiques, d'apprendre des valeurs
                        importantes telles que le travail d'équipe et le respect, et d'améliorer leur bien-être général.
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