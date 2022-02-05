<section class="section brands section">
    <header class="container text-center p-0 mb-0">
        <br>
        <h1 class="section-title">Elles nous font confiance</h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mac_slider_container p-50">
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