<section class="section brands section section-pd" id="portfolio">
    <header class="container text-center">
        <h1 class="section-title">Nos produits</h1>
    </header>
    <div class="container">
        <div class="service-container">
            <?php foreach ($APIServices as $service): ?>
                <div class="service-item d-click" data-href="<?php echo site_url('services/show/' . $service->id) ?>">
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