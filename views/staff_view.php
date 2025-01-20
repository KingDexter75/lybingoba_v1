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

      <div class="swiper-slide">

      <?php foreach ($STAFFS as $STAFF): ?>
        <div class="testimonial-item">
            <img src="<?= PATH ?><?= $STAFF['photoStaff'] ?>" class="testimonial-img" alt="">
          
          <h3><?= $STAFF['nomStaff']?></h3>
          <h4> <?= $STAFF['gradeStaff']?></h4>
          <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span><?= $STAFF['descriptionStaff']?></span>
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
        </div>
        <?php endforeach; ?>
      </div><!-- End testimonial item -->


    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>

</section><!-- /Testimonials Section -->

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