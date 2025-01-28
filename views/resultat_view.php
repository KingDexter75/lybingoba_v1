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
                <h1>Nos Resultats</h1>
                <p>Presentation des differents Resultats aux examens officiels.</p>
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
                            <h4>Telecharger la liste des Resultats</h4>
                            <div class="services-list">
                                <?php foreach ($examens as $examen): ?>
                                    <a href="<?= PATH ?><?= $examen['fichierExamen'] ?>"><i class="bi bi-arrow-right-circle"></i><span><?= $examen['typeExamen'] ?></span></a>
                                <?php endforeach; ?>
                            </div>
                        </div><!-- End Services List -->

                        <div class="help-box d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-headset help-icon"></i>
                            <h4>Question?</h4>
                            <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>237 656 47 66 05</span></p>
                            <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="<?= PATH ?>#contact">Contacter Nous</a></p>
                        </div>

                    </div>

                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                        <h3>Voici une présentation synthétique des résultats des examens au LYBINGOBA pour l'année académique en cours, incluant le nombre de candidats inscrits, le nombre de candidats présentés,
                             le nombre de candidats admis, ainsi que les pourcentages de réussite </h3>
                        <p>
                            <label for="" style="font-weight: bolder;">Concours d'entrée en 6e :</label>
                            • Candidats inscrits : 150
                            • Candidats présentés : 145
                            • Candidats admis : 130
                            • Taux de réussite : 89,66%
                        </p>
                        <label for="" style="font-weight: bolder;">Concours d'entrée en 6e :</label>
                        Interview :
                            • Candidats inscrits : 100
                            • Candidats présentés : 95
                            • Candidats admis : 85
                            • Taux de réussite : 89,47%
                        <p>
                        <label for="" style="font-weight: bolder;">Concours d'entrée en 6e :</label>
                        BEPC Espagnol :
                            • Candidats inscrits : 80
                            • Candidats présentés : 75
                            • Candidats admis : 70
                            • Taux de réussite : 93,33%
                        </p>
                        <p>
                        <label for="" style="font-weight: bolder;">Concours d'entrée en 6e :</label>
                        BEPC Allemand :
                            • Candidats inscrits : 60
                            • Candidats présentés : 58
                            • Candidats admis : 45
                            • Taux de réussite : 77,59%
                        </p>
                        <p>
                        <label for="" style="font-weight: bolder;"> O Level Science:</label>
                        Number of registered candidates: 
                         Number of candidates presented: 
                         Number of candidates admitted: 
                         Admission percentage: 
                        </p>
                        <label for="" style="font-weight: bolder;"> O Level Art:</label>
                        Number of registered candidates: 
                         Number of candidates presented: 
                         Number of candidates admitted: 
                         Admission percentage: 
                        </p>
                        <p>
                        <label for="" style="font-weight: bolder;">Concours d'entrée en 6e :</label>
                         Probatoire A4 Espagnol :
                            • Candidats inscrits : 70
                            • Candidats présentés : 68
                            • Candidats admis : 65
                            • Taux de réussite : 95,59%
                        </p>
                        <p>
                        <label for="" style="font-weight: bolder;">Concours d'entrée en 6e :</label>
                         Probatoire A4 Allemand :
                            • Candidats inscrits : 50
                            • Candidats présentés : 48
                            • Candidats admis : 35
                            • Taux de réussite : 72,92%
                        </p>
                        <p>
                        <label for="" style="font-weight: bolder;">Concours d'entrée en 6e :</label>
                         Probatoire D :
                            • Candidats inscrits : 70
                            • Candidats présentés : 68
                            • Candidats admis : 65
                            • Taux de réussite : 95,59%
                        </p>
                        <p>
                        <label for="" style="font-weight: bolder;">Concours d'entrée en 6e :</label>
                         Probatoire C :
                            • Candidats inscrits : 50
                            • Candidats présentés : 48
                            • Candidats admis : 35
                            • Taux de réussite : 72,92%
                        </p>
                        <p>
                        <label for="" style="font-weight: bolder;">Concours d'entrée en 6e :</label>
                         Probatoire TI :
                            • Candidats inscrits : 70
                            • Candidats présentés : 68
                            • Candidats admis : 65
                            • Taux de réussite : 95,59%
                        </p>
                        <label for="" style="font-weight: bolder;"> O Level Science:</label>
                        Number of registered candidates: 
                         Number of candidates presented: 
                         Number of candidates admitted: 
                         Admission percentage: 
                        </p>
                        <label for="" style="font-weight: bolder;"> O Level Art:</label>
                        Number of registered candidates: 
                         Number of candidates presented: 
                         Number of candidates admitted: 
                         Admission percentage: 
                        </p>
                        <p>
                        <label for="" style="font-weight: bolder;">Concours d'entrée en 6e :</label>
                         Baccalaureat A4 Espagnol :
                            • Candidats inscrits : 70
                            • Candidats présentés : 68
                            • Candidats admis : 65
                            • Taux de réussite : 95,59%
                        </p>
                        <p>
                        <label for="" style="font-weight: bolder;">Concours d'entrée en 6e :</label>
                         Baccalaureat A4 Allemand :
                            • Candidats inscrits : 50
                            • Candidats présentés : 48
                            • Candidats admis : 35
                            • Taux de réussite : 72,92%
                        </p>
                        <p>
                        <label for="" style="font-weight: bolder;">Concours d'entrée en 6e :</label>
                         Baccalaureat D :
                            • Candidats inscrits : 70
                            • Candidats présentés : 68
                            • Candidats admis : 65
                            • Taux de réussite : 95,59%
                        </p>
                        <p>
                        <label for="" style="font-weight: bolder;">Concours d'entrée en 6e :</label>
                         Baccalaureat C :
                            • Candidats inscrits : 50
                            • Candidats présentés : 48
                            • Candidats admis : 35
                            • Taux de réussite : 72,92%
                        </p>
                        <p>
                        <label for="" style="font-weight: bolder;">Concours d'entrée en 6e :</label>
                         Baccalaureat TI :
                            • Candidats inscrits : 70
                            • Candidats présentés : 68
                            • Candidats admis : 65
                            • Taux de réussite : 95,59%
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