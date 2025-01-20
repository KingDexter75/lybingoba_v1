<!DOCTYPE html>
<html lang="en">

<head>

  <!-- ======= HEAD ======= -->
  <?php include 'includes/head.php'; ?>

  <title><?= ucfirst($page) ?></title>

    <link href="<?= PATH ?>assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <!-- ======= HEADER ======= -->
  <?php include 'includes/header.php'; ?>

  <main class="main">
      <div class="page-title dark-background">
          <div class="container position-relative">
              <h1>Animateur Pedagogique</h1>
              <p>Les animateurs Pedagogiques du Lycee de NgodiBakoko</p>
              <nav class="breadcrumbs">
                  <ol>
                      <li><a href="<?= PATH ?>home">Accueil</a></li>
                      <li class="current">Animateur Pedagogique</li>
                  </ol>
              </nav>
          </div>
      </div><!-- End Page Title -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Les AP</h2>
        <p>Les Animateurs Pedagogies du LYBINGOBA</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

            <?php foreach ($APS as $AP) ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="<?= PATH ?><?= $AP['photoAP'] ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4><?= $AP['nomAP'] ?></h4>
                            <span><?= $AP['departementAP'] ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>

      </div>

    </section><!-- /Team Section -->

  </main>

  <!-- ======= FOOTER ======= -->
   <?php include 'includes/footer.php'; ?>

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