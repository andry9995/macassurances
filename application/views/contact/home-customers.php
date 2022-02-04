<section class="section brands section section-pd bg-mac">
    <header class="container text-center">
        <h1 class="section-title text-white">Elles nous fait confiance</h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mac_slider_container">
                    <div class="owl-carousel owl-theme customer_slider">
                        <?php foreach ($customers as $customer): ?>
                            <div class="owl-item">
                                <div class="mac_slider_item customer_item">
                                    <div class="mac_slider_img">
                                        <img src="<?php echo $customer->img ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div> <!-- Brands Slider Navigation -->
                </div>
            </div>
        </div>
    </div>
</section>