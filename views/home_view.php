<!DOCTYPE html>
<html lang="fr">

<head>
  
  <title><?= ucfirst($page) ?></title>

  <!-- ======= Head ======= -->
  <?php include 'includes/head.php'; ?>

    <link href="<?= PATH ?>assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <!-- ======= Header ======= -->
  <?php include 'includes/header.php'; ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">bienvenue au <span >LYCEE BILINGUE DE NGODI-BAKOKO</span></h2>
            <p class="animate__animated animate__fadeInUp">le LYBINGOBA est un Etablissement d'enseignement secondaire Bilingue, située dans la zone de village, plus précisément au village ngodi-bakoko non loin du carrefour Ari.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Section Francophone</h2>
            <p class="animate__animated animate__fadeInUp">Nos différents Résultats aux examens Officier sont disponibles ...</p>
            <a href="<?= PATH ?>resultat" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Section Anglophone</h2>
            <p class="animate__animated animate__fadeInUp">Our various results in the Official exams are available...</p>
            <a href="<?= PATH ?>resultat" class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus</a>
          </div>
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Apropos </h2>
        <p>Qui Sommes Nous ?</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              LE LYBINGOBA (LYCEE BILINGUE DE NGODI-BAKOKO), est un établissement secondaire public. situé dans la zone de DOUALA 3e non loin de la chefferie du village NGODI-BAKOKO.
               Le Recrutement des élèves se fait juste après leur obtention du CEP ou First shcool leaving certificate (FSLC) et leur offrent à la fin du cursus des baccalauréats pour les francophone et GCE Advanced 
               level pour la section anglophone. 
               Créer en 2007 comme CES, est devenu LYCEE en fin d’année 2012.
               Ce lycée compte à son actif 5 administrateurs parmi les quelles deux directeurs et quatre proviseurs.
               Chacun a tour de rôle ayant œuvré dans l’évolution du dit LYCEE, qui est devenu un très grand concurrent aux examen nationaux et forment aujourd’hui des élèves qui 
               accèdent sans difficulté aux grand écoles nationale et internationale.
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Premier cycle Francophone de la 6e en 3e All, Esp et Bilingue.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Second cycle Francophone de La 2nd A4 All et Esp en Tle A4.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Second cycle Francophone de La 2nd C et Esp en Tle C, D et TI.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Premier cycle Anglophone de La From 1 en From V .</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Second cycle Anglophone de La lower sixth Art and upper sixth Art.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Second cycle Anglophone de La lower sixth Science and upper sixth Science.</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
              <!-- <div class="parallax-bg" style="background-image: url(assets/img/services.jpg);" data-swiper-parallax="-23%"></div> -->
              <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(assets/img/provi\ diko1.jpg); width:30vh;">
                  <div class="title" data-swiper-parallax="-300">2007 - 2011</div>
                  <div class="subtitle" data-swiper-parallax="-200">DIKOUME EBELLE EITEL</div>
                  <div class="text" data-swiper-parallax="-100">
                    <p>
                      Directeur CES Bilingue
                    </p>
                  </div>
                </div>
                <div class="swiper-slide" style="background-image: url(assets/img/provi\ kamsu.jpg); width:30vh;">
                  <div class="title" data-swiper-parallax="-300">2011 - 2012</div>
                  <div class="subtitle" data-swiper-parallax="-200">KAMSU CECILE</div>
                  <div class="text" data-swiper-parallax="-100">
                    <p>
                      Directrice CES Bilingue
                    </p>
                  </div>
                </div>
                <div class="swiper-slide" style="background-image: url(assets/img/provi\ kamsu.jpg); width:30vh;">
                  <div class="title" data-swiper-parallax="-300">2012 - 2013</div>
                  <div class="subtitle" data-swiper-parallax="-200">KAMSU CECILE</div>
                  <div class="text" data-swiper-parallax="-100">
                    <p>
                      Proviseur
                    </p>
                  </div>
                </div>
                <div class="swiper-slide" style="background-image: url(assets/img/provi\ ngo.jpg); width:30vh;">
                  <div class="title" data-swiper-parallax="-300">2013 - 2016</div>
                  <div class="subtitle" data-swiper-parallax="-200">NGO LOE LOUISE ROSINE</div>
                  <div class="text" data-swiper-parallax="-100">
                    <p>
                      Proviseur
                    </p>
                  </div>
                </div>
                <div class="swiper-slide" style="background-image: url(assets/img/provi\ makem.jpg); width:30vh;">
                  <div class="title" data-swiper-parallax="-300">2016 - 2019</div>
                  <div class="subtitle" data-swiper-parallax="-200">MAKEMBE FRANCOIS</div>
                  <div class="text" data-swiper-parallax="-100">
                    <p>
                      Proviseur
                    </p>
                  </div>
                </div>
                <div  class="swiper-slide" style="background-image: url(assets/img/proviseu.jpg);">
                  <div class="title" data-swiper-parallax="-300">2019 - </div>
                  <div class="subtitle" data-swiper-parallax="-200">ETA JAMES NJOCK</div>
                  <div class="text" data-swiper-parallax="-100">
                    <p>
                      Proviseur
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
              <i class="bi bi-pc-display-horizontal"></i>
              <h4 class="d-none d-lg-block">Salle Multimedia</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
              <i class="bi bi-eyedropper"></i>
              <h4 class="d-none d-lg-block">Salle de Laboratoire</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
              <i class="bi bi-book"></i>
              <h4 class="d-none d-lg-block">Bibliothèque</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
              <i class="bi bi-staduim"></i>
              <h4 class="d-none d-lg-block">Air des Jeux</h4>
            </a>
          </li>
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Bienvenue en Salle MULTIMEDIA du LYBINGOBA.</h3>
                <p class="fst-italic">
                  Bienvenue en salle Multimedia, un espase favorable a l'apprentissage pratique des scienes informatiques
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>
                    <spab>De nombreux kits de digitalisation.</spab>
                  </li>
                  <li><i class="bi bi-check2-all"></i> <span>plus d'une centaines de machine disponibles</span>.</li>
                  <li><i class="bi bi-check2-all"></i> <span>Salle equipes selon les normmes.</span></li>
                </ul>
                <p>
                  Les salles informatique du LYBINGOBA sont équipées de plusieurs ordinateurs connectés à Internet, 
                  avec un mobilier ergonomique pour le travail individuel et en groupe. Elles disposent d'un projecteur chacun et
                   d'un tableau interactif pour les présentations. Les élèves y apprennent à utiliser divers logiciels éducatifs et 
                   travaillent sur des projets collaboratifs. L'environnement est stimulant et propice à l'apprentissage des
                    technologies numériques.
                   Des ressources pédagogiques sont également disponibles pour enrichir l'expérience d'apprentissage.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/pratiqu exam.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Bienvenue en salle de LABORATOIRE du LYBINGOBA</h3>
                <p>
                  La salle de laboratoire des sciences du lycée est un espace lumineux et bien équipé, avec des tables de travail en acier inoxydable et des chaises confortables.
                   Elle dispose de nombreux appareils scientifiques,
                   tels que des microscopes, des béchers et des pipettes, pour réaliser des expériences pratiques. Des équipements de sécurité, 
                   comme des lunettes et des gants, sont également fournis pour garantir la sécurité des élèves.
                    Les murs sont ornés de posters éducatifs sur les concepts scientifiques clés.
                  
                </p>
                <p class="fst-italic">
                  Cet environnement favorise l'exploration et la découverte dans les domaines de la biologie, de la chimie et de la physique.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>De nombreux Équipements de base.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Matériel de sécurité disponible.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Plusieurs Instruments de mesure.</span></li>
                  <!-- <li><i class="bi bi-check2-all"></i> <span> .</span></li> -->
                </ul>
              </div>
              <!-- ici la modi -->
               
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/TP biolog.jpg " alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3> Ici Notre BIBLIOTHEQUE Scolaire</h3>
                <p>
                  La bibliothèque du lycée est un espace lumineux et accueillant, conçu pour favoriser la lecture et l'étude. 
                  Elle dispose d'un large éventail de livres, manuels scolaires et ressources numériques, adaptés à tous les niveaux d'enseignement.
                   Des zones de travail individuelles et en groupe sont aménagées pour encourager la concentration et la collaboration entre élèves.
                   Des ordinateurs et des tablettes sont également disponibles pour faciliter la recherche en ligne.
                   
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Une grande collection des livres.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span> Services aux élèves.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span> Zones de travail.</span></li>
                </ul>
                <p class="fst-italic">
                 des animations et ateliers sont régulièrement organisés pour promouvoir la culture et l'amour des livres..
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/photo en plein bibiotheque.jpg " style=" height: 65vh; width:80vh;" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>L'espace réservé aux activités sportives du lycée </h3>
                <p>
                  L'espace réservé au sport du lycée est équipé de terrains pour le football, handball et le volleyball.
                 une piste d'athlétisme offrent des installations pour diverses activités sportives.  
                Cet espace est conçu pour favoriser l'esprit d'équipe et encourager les élèves à pratiquer régulièrement une activité physique.
                </p>
                <p class="fst-italic">
                  Les horaires sont flexibles, 
                  permettant aux élèves de s'entraîner après les cours ou de participer à des compétitions inter-lycées.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Kits de premiers secours  .</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Tapis de sol ou de fitness .</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>De nombreux Ballons.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/eps.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Education</h2>
        <p>les differents Resultats  aux examens</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-cash-stack" style="color: #0dcaf0;"></i>
              </div>
              <a href="<?= PATH ?>resultat" class="stretched-link">
                <h3> POURCENTAGE AUX EXAMENS: 2023-2024</h3>
              </a>
              <p>
                <ul>
                  <?php foreach ($examens as $examen): ?>
                    <li><i class="bi bi-check2-all"></i> <span><?= $examen['typeExamen'] ?>: <?= $examen['pourcentage'] ?>%</span></li>
                  <?php endforeach; ?>
                </ul>
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week" style="color: #fd7e14;"></i>
              </div>
              <a href="<?= PATH ?>service-details" class="stretched-link">
                <h3>Scolarité</h3>
              </a>
              <p>Le service de la scolarité au lycée de Ngodi-bakoko,  est chargé de la gestion administrative des élèves, 
                incluant les inscriptions, les dossiers académiques et les résultats.
                 Il assure également le suivi des absences et des sanctions disciplinaires.
                  </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-text" style="color: #20c997;"></i>
              </div>
              <a href="<?= PATH ?>co-details" class="stretched-link">
                <h3>Conseillèrs d'orientation</h3>
              </a>
              <p>Les services d'orientation sont des dispositifs mis en place pour accompagner les individus,
                 notamment les élèves , les enseignants et l'administration , tous personnels du lycee ,
                 dans leur parcours éducatif et professionnel .</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-credit-card-2-front" style="color: #df1529;"></i>
              </div>
              <a href="<?= PATH ?>sport-details" class="stretched-link">
                <h3>Service Sport</h3>
              </a>
              <p>Les services sportifs dans un lycée jouent un rôle essentiel dans le développement physique,
                 social et émotionnel des élèves Ils offrent une variété d'activités et 
                 de programmes qui encouragent la pratique du sport et la promotion d'un mode de vie sain.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-globe" style="color: #6610f2;"></i>
              </div>
              <a href="<?= PATH ?>infirmerie-details" class="stretched-link">
                <h3>Infirmerie</h3>
              </a>
              <p>Le service d'infirmerie au lycée Bilingue de Ngodi-bakoko joue un rôle crucial dans 
                la santé et le bien-être des élèves.Il contribue à créer un environnement scolaire sain 
                et favorable à l'apprentissage en s'assurant que les besoins de santé des élèves sont pris en compte. </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-clock" style="color: #f3268c;"></i>
              </div>
              <a href="<?= PATH ?>biblio-details" class="stretched-link">
                <h3>Bibliothèque</h3>
              </a>
              <p>lieu clé pour l'apprentissage, la recherche et le développement personnel des élèves.
                Il favorise l'accès à l'information, encourage la lecture et soutient les projets éducatifs 
                tout en créant un environnement propice à l'étude et à la collaboration.
                </p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up" id="ap">
        <h2>Administration</h2>
        <p>Les membres de l'administration du LYBINGOBA</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 10
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <?php foreach ($staffs as $staff): ?>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="<?= PATH ?><?= $staff['photoStaff'] ?>" class="testimonial-img" alt="">
                        <h3><?= $staff['nomStaff'] ?></h3>
                        <h4><?= $staff['gradeStaff'] ?></h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span><?= $staff['descriptionStaff'] ?></span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->
            <?php endforeach; ?>


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>
    <!-- /Testimonials Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up" id="cooperative">
        <h2>Cooperative</h2>
        <p>Les differents projets de la cooperative scolaire</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-3">

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <span class="advanced">2024-2025</span>
              <h3>Realisation </h3>
              <h4>du mât du lycee</h4>
              <div class="divimg">
                <img src="assets/img/project cooper.jpg " alt="" class="imgcoopera1">
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <!-- <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <span class="advanced">2023-2024</span>
              <h3></h3>
              <h4>Realisation de la carte du cameroun</h4>
              <div class="divimg">
                <img src="assets/img/working-4.jpg" alt="" class="imgcoopera1">
              </div>
            </div>
          </div>-->
          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item">
              <span class="advanced">2023-2024</span>
              <h3>Realisation </h3>
              <h4>la carte du cameroun</h4>
              <div class="divimg">
                <img src="assets/img/projet coope.jpg " alt="" class="imgcoopera1">
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="pricing-item">
              <span class="advanced">2022-2023</span>
              <h3>Realisation</h3>
              <h4>lorem inptuinme</h4>
              <div class="divimg">
                <img src="assets/img/project cooper.jpg" alt="" class="imgcoopera1">
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="pricing-item">
              <span class="advanced">2021-2022</span>
              <h3>Realisation</h3>
              <h4>lorem iput jriejs</h4>
              <div class="divimg">
                <img src="assets/img/projet coope.jpg " alt="" class="imgcoopera1">
              </div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Recent Posts Section -->
    
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contactez-nous</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>2PW6+8GX, Douala</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Appelez-nous</h3>
                <p>6 56 47 66 05</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-whatsapp flex-shrink-0"></i>
              <div>
                  <a href="https://api.whatsapp.com/send?phone=237656476605&text=Bonjour, j'aimerais plus d'information" target="_blank">
                      <h3>Message Whatsapp</h3>
                      <p>Contacter Nous</p>
                  </a>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Envoyez </button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <!-- ======= Footer ======= -->
  <?php include 'includes/footer.php' ?>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      speed: 600,
      parallax: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>