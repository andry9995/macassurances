<section class="section brands section bg-lightgray section-pd" id="portfolio">
    <header class="container text-center">
        <h1 class="section-title">Nos produits</h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mac_slider_container">
                    <div class="owl-carousel owl-theme service_slider">
                        <?php foreach ($APIServices as $service): ?>
                            <div class="owl-item">
                                <div class="mac_slider_item">
                                    <a href="<?php echo site_url('services/show/' . $service->id) ?>">
                                        <div class="mac_slider_img">
                                            <img src="<?php echo $service->icon ?>" alt="">
                                        </div>
                                        <div class="portfolio-item-title mac_slider_title">
                                            <h4>
                                                <a href="<?php echo site_url('services/show/' . $service->id) ?>"><?= $service->nom; ?></a>
                                            </h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div> <!-- Brands Slider Navigation -->
                </div>
            </div>
        </div>
    </div>
</section>