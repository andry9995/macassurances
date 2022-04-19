<section class="section brands section section-pd bg-lightgray" id="portfolio">
    <header class="container text-center">
        <h1 class="section-title">Nos Produits</h1>
    </header>
    <div class="container">
        <!-- <div class="service-container"> -->
        <!-- <div class="row justify-content-center wow fadeInUpBig"> -->
        <div class="row justify-content-center">
            <?php foreach ($APIServices as $service): ?>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 service-item d-click" data-href="<?php echo site_url('services/show/' . $service->id) ?>">
                    <div class="service-item-img">
                        <img src="<?php echo $service->icon ?>">
                    </div>
                    <div class="service-item-title no-bg">
                        <h4>
                            <a href="<?php echo site_url('services/show/' . $service->id) ?>"><?= $service->nom; ?></a>
                        </h4>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>