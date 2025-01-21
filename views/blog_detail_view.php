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

    <div class="card">
        <div class="card-body" style="display: flex; justify-content: space-between; text-align: center; align-items: center">

            <button type="button" class="btn btn-primary"><a href="<?= PATH ?>blog" style="color: white;"><i class="bi bi-arrow-left me-1"></i>Back</a></button>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-12">

                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">

                        <article class="article">

                            <div class="post-img">
                                <img src="<?=PATH ?><?= $blog['photoBlog'] ?>" alt="" class="img-fluid">
                            </div>

                            <h2 class="title"><?= $blog['titreBlog'] ?></h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="<?= $blog['dateBlog'] ?>"><?= $blog['dateBlog'] ?></time></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">

                                <blockquote>
                                    <p>
                                        <?= $blog['contenuBlog'] ?>
                                    </p>
                                </blockquote>

                            </div><!-- End post content -->

                        </article>

                    </div>
                </section><!-- /Blog Details Section -->

            </div>

        </div>
    </div>

</main>

<!-- ======= FOOTER ======= -->
<?php include 'includes/footer.php';?>

</body>

</html>