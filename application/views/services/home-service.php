<!-- Begin Home Produit -->
<section id="portfolio" class="section bg-lightgray section-pd">
    <header class="container text-center">
        <h1 class="section-title">Nos Produits</h1>
    </header>

    <div class="container">
        <div id="portfolio-wrapper">
            <ul id="portfolio-item-container" class="clearfix" data-maxcolumn="4" data-animationclass="fadeInUpBig">
                <?php foreach ($APIServices as $key => $service) : ?>
                        <li class="portfolio-item animate-item photography" data-animate-time="80">
                            <div class="portfolio-item-wrapper">

                                <div class=" d-flex justify-content-center">
                                    <img style="width: 125px;padding: 25px;" src="<?php echo $service->icon ?>" alt="Image de : <?= $service->nom; ?>">
                                </div>

                                <div class="portfolio-overlay overlay-yellow">
                                    <a href="<?php echo site_url('services/show/' . $service->id) ?>" title="Plus d'informations sur : <?= $service->nom; ?>" class="open-btn"></a>
                                    <h2 class="portfolio-title"><a href="<?php echo site_url('services/show/' . $service->id) ?>" title="<?= $service->nom; ?>"><?= $service->nom; ?></a></h2>
                                </div><!-- End .portfolio-overlay -->
                            </div><!-- End .portfolio-item-wrapper -->
                            <div class="portfolio-item-title">
                                <h4>
                                    <a href="<?php echo site_url('services/show/' . $service->id) ?>"><?= $service->nom; ?></a>
                                </h4>
                            </div>
                        </li>
                <?php endforeach; ?>
            </ul><!-- End #portfolio-item-container -->
        </div><!-- End .portfolio-wrapper -->
    </div>
</section>
<!-- #End Home Produit -->