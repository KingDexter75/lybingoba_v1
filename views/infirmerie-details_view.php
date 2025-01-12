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
                <h1>Infirmerie</h1>
                <p>Presentation de l'infirmerie du LYBINGOBA.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Accueil</a></li>
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
                                <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Soins de santé.</span></a>
                                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Prévention et éducation à la santé </span></a>
                                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Soutien psychologique</span></a>
                                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Gestion des urgences médicales </span></a>
                                <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Confidentialité et écoute </span></a>
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
                        <h3>voici un aperçu des fonctions et des services généralement offerts par l'infirmerie scolaire : </h3>
                        <p>
                            L'infirmière scolaire est responsable de fournir des soins de santé de base aux élèves,
                            y compris le traitement des blessures mineures, la gestion des maladies courantes
                            (comme les rhumes ou les maux de tête) et l'administration de médicaments prescrits.
                        </p>
                        L'infirmière joue un rôle important dans l'éducation des élèves sur des sujets de santé tels que l'hygiène,
                        la nutrition, la santé mentale, la sexualité, et les comportements à risque.
                        Des ateliers ou des sessions d'information peuvent être organisés pour sensibiliser les élèves.
                        <p>
                            Bien que ce ne soit pas le rôle principal, l'infirmière peut offrir un soutien émotionnel
                            aux élèves qui traversent des difficultés personnelles ou psychologiques. Elle peut également orienter
                            les élèves vers des ressources supplémentaires,
                            comme des conseillers scolaires.
                        </p>
                        <p>
                            L'infirmière peut être impliquée dans le suivi des vaccinations requises pour
                            les élèves et peut organiser des bilans de santé périodiques pour détecter d'éventuels problèmes de santé.
                        </p>
                        <p>
                            L'infirmière scolaire travaille souvent en collaboration avec d'autres membres du personnel éducatif,
                            tels que les enseignants, les conseillers d'orientation et les psychologues scolaires,
                            pour assurer une approche globale du bien-être des élèves.
                        </p>
                        <p>
                            le service d'infirmerie dans un lycée est un élément clé du soutien à la santé physique et mentale des élèves.
                            Il contribue à créer un environnement scolaire sain et
                            favorable à l'apprentissage en s'assurant que les besoins de santé des élèves sont pris en compte.
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