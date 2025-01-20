<!DOCTYPE html>
<html lang="en">

<head>

    <title><?= ucfirst($page) ?></title>

    <!-- ======= Head ======= -->
    <?php include 'includes/head.php'; ?>

    <link href="<?= PATH ?>assets/css/main.css" rel="stylesheet">

</head>

<body class="blog-page">

<!-- ======= HEADER ======= -->
<?php include "includes/header.php"; ?>

<main class="main">

    <div class="page-title dark-background">
        <div class="container position-relative">
            <h1>Actualites</h1>
            <p>Suivez l'actualite du Lycee de NgodiBakoko</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?= PATH ?>home">Accueil</a></li>
                    <li class="current">Actualite</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

        <div class="container">
            <div class="row gy-4">

                <?php foreach ($blogs as $blog): ?>
                    <div class="col-lg-4">
                        <article>

                            <div class="post-img">
                                <img src="<?= PATH ?><?= $blog['photoBlog'] ?>" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Lybingoba</p>

                            <h2 class="title">
                                <a href="blog-details.html"><?= $blog['titreBlog'] ?></a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <div class="post-meta">
                                    <p class="post-date">
                                        <time datetime="<?= $blog['dateBlog'] ?>"><?= $blog['dateBlog'] ?></time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->
                <?php endforeach; ?>


            </div>
        </div>

    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

        <div class="container">
            <div class="d-flex justify-content-center">
                <ul>
                    <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#" class="active">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                    <li>...</li>
                    <li><a href="#">20</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>

    </section><!-- /Blog Pagination Section -->

</main>

<!-- ======= FOOTER ======= -->
<?php include 'includes/footer.php';?>

</body>

</html>