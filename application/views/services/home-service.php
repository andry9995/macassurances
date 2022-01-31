<!-- Begin Home Produit -->
<section id="portfolio" class="section bg-lightgray">
    <header class="container text-center">
        <h1 class="section-title">Nos Produits</h1>
    </header>

    <div class="container">
        <div id="portfolio-wrapper">
            <ul id="portfolio-item-container" class="clearfix" data-maxcolumn="4" data-animationclass="fadeInUpBig">
                <?php foreach ($APIServices as $service) : ?>
                <li class="portfolio-item animate-item photography" data-animate-time="80">
                    <div class="portfolio-item-wrapper">
                        <img src="<?= $service->img; ?>" alt="Image de : <?= $service->nom; ?>">
                        <div class="portfolio-overlay overlay-yellow">
                            <a href="<?= site_url('services/signleservice'); ?>" title="Plus d'informations sur : <?= $service->nom; ?>" class="open-btn"></a>
                            <h2 class="portfolio-title"><a href="<?= site_url('services/signleservice'); ?>" title="<?= $service->nom; ?>"><?= $service->nom; ?></a></h2>
                        </div><!-- End .portfolio-overlay -->
                    </div><!-- End .portfolio-item-wrapper -->
                    <div class="portfolio-item-title">
                        <h4>
                            <a href="single-service.html"><?= $service->nom; ?></a>
                        </h4>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul><!-- End #portfolio-item-container -->

            
        </div><!-- End .portfolio-wrapper -->
    </div>
</section>
<!-- #End Home Produit -->