<?php
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