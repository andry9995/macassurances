<!-- Begin Home Produit -->
<div class="page-header parallax bg-mac">
    <div class="container">
        <div class="page-header-wrapper">
            <h1 class="page-title">Nos Produits</h1>
            <span class="breadcrumb-mac">
                <a class="text-white" href="<?php echo base_url(); ?>">Accueil</a> 
                <span class="text-white"><i class="fa fa-angle-right"></i></span> 
                <span>Nos produits</span>
            </span>
        </div>
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
</div>

</section>
<section id="portfolio" class="section bg-lightgray">
    <div class="container">
        <header class="text-secondary text-center">
            <h2>Nous disposons d'une large panel d'assurances</h2>
        </header>
        <div id="portfolio-wrapper">
            <ul id="portfolio-item-container" class="clearfix" data-maxcolumn="4" data-animationclass="fadeInUpBig">
                <?php foreach ($APIServices as $service) : ?>
                <li class="portfolio-item animate-item photography" data-animate-time="80">
                    <div class="portfolio-item-wrapper">
                        <img src="<?= $service->img; ?>" alt="Image de : <?= $service->nom; ?>">
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