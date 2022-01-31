<?= $this->extend('template/index') ?>

<?= $this->section('content')  ?>
<!-- Begin Home Produit -->
<section id="portfolio" class="section bg-lightgray">
    <header class="container text-center">
        <h1 class="section-title">Détails du service</h1>
    </header>

    <div class="container">
        <div id="portfolio-wrapper">
            <ul id="portfolio-item-container" class="clearfix" data-maxcolumn="4" data-animationclass="fadeInUpBig">
                <?php foreach ($APIServices as $service) : ?>
                <li class="portfolio-item animate-item photography" data-animate-time="80">
                    <div class="portfolio-item-wrapper">
                        <img src="<?= $service->img; ?>" alt="Image de : <?= $service->titre; ?>">
                        <div class="portfolio-overlay overlay-yellow">
                            <a href="<?= site_url('services/singleservice'); ?>" title="Plus d'informations sur : <?= $service->titre; ?>" class="open-btn"></a>
                            <h2 class="portfolio-title"><a href="<?= site_url('services/singleservice'); ?>" title="<?= $service->titre; ?>"><?= $service->titre; ?></a></h2>
                        </div><!-- End .portfolio-overlay -->
                    </div><!-- End .portfolio-item-wrapper -->
                    <div class="portfolio-item-title">
                        <h4>
                            <a href="<?= site_url('services/singleservice'); ?>"><?= $service->titre; ?></a>
                        </h4>
                    </div>
                </li>
                <?php endforeach; ?>
                <li class="portfolio-item animate-item photography" data-animate-time="80">
                    <div class="portfolio-item-wrapper">
                        <img src="/assets/images/services/habitation.jpg" alt="item 1">
                        <div class="portfolio-overlay overlay-yellow">
                            <a href="single-service.html" title="Nam facilisis condimentum" class="open-btn"></a>
                            <h2 class="portfolio-title"><a href="single-service.html" title="Single Portfoli Page">Habitation</a></h2>
                        </div><!-- End .portfolio-overlay -->
                    </div><!-- End .portfolio-item-wrapper -->
                    <div class="portfolio-item-title">
                        <h4>
                            <a href="single-service.html">Habitation</a>
                        </h4>
                    </div>
                </li>
            </ul><!-- End #portfolio-item-container -->

            
        </div><!-- End .portfolio-wrapper -->
    </div>
</section>
<!-- #End Home Produit -->
<?= $this->endSection();  ?>