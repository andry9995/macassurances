<!-- Begin Home Produit -->
<div class="position-relative overflow-hidden p-3 p-md-5 text-center text-light bg-mac">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal text-light">Nos services</h1>
    <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.
        
        <p>
            <a class="btn px-auto btn-primary" href="<?php echo base_url(); ?>">Home</a> <span class="px-3">/</span> <a class="btn px-auto btn-primary active" href="<?php echo site_url('services'); ?>">Services</a>
        </p>
    </p>
    <a class="btn btn-primary rounded-circle mt-4" href="#"><i class="fa fa-arrow-down"></i></a>
  </div>
  <div class="product-device box-shadow d-none d-md-block"></div>
  <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
</div>

</section>
<section id="portfolio" class="section bg-lightgray">
    <div class="container">
        <header class="text-secondary text-center">
            <h2>Nous disposons d'une large panel d'assurances</h2>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore minima sunt praesentium ipsa adipisci mollitia nulla voluptates illo nisi nemo iure commodi, ad, possimus,</p>
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