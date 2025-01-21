<?php
$documents = Document::getAllDocument();
?>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="<?= PATH ?>home" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="<?= PATH ?>assets/img/WhatsApp Image 2024-10-06 à 19.45.59_f32fda1d.jpg" alt="" class="imglogo">
            <h1 class="sitename">LYBINGOBA</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?= PATH ?>#hero" class="active">Accueill</a></li>
                <li><a href="<?= PATH ?>#about">A propos</a></li>
                <li><a href="<?= PATH ?>team">Les AP</a></li>
                <li><a href="<?= PATH ?>blog">Blog</a></li>
                <li><a href="<?= PATH ?>#cooperative">Cooperative</a></li>
                <li class="dropdown"><a href="#"><span>Trimestre</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Trimestre 1</a></li>
                        <li class="dropdown"><a href="#"><span>Documentation</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                        <?php foreach ($documents as $document):
                            if ($document['trimestreDocument'] == 1){
                                ?>
                                        <li><a href="<?= PATH ?><?= $document['nomDocument'] ?>" download="" target="_blank">
                                                <i class="bi bi-filetype-pdf"><?= $document['titreDocument'] ?></i><span></span></a></li>
                                </li>
                                <?php
                            } ?>
                        <?php endforeach; ?>
                    </ul>

                        <li><a href="#">Trimestre 2</a></li>
                        <li class="dropdown"><a href="#"><span>Documentation</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>

                            <ul>
                                <?php foreach ($documents as $document):
                                if ($document['trimestreDocument'] == 2){
                                ?>
                                <li><a href="<?= PATH ?><?= $document['nomDocument'] ?>" download="" target="_blank">
                                        <i class="bi bi-filetype-pdf"><?= $document['titreDocument'] ?></i><span></span></a></li>
                        </li>
                <?php
                } ?>
                <?php endforeach; ?>
            </ul>

                        <li><a href="#">Trimestre 3</a></li>
                        <li class="dropdown"><a href="#"><span>Documentation</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>

                            <ul>
                                <?php foreach ($documents as $document):
                                if ($document['trimestreDocument'] == 3){
                                ?>
                                <li><a href="<?= PATH ?><?= $document['nomDocument'] ?>" download="" target="_blank">
                                        <i class="bi bi-filetype-pdf"><?= $document['titreDocument'] ?></i><span></span></a></li>
                        </li>
            <?php
            } ?>
            <?php endforeach; ?>
            </ul>
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>