<section class="section brands">
	<header class="container text-center">
        <h1 class="section-title">Elles nous fait confiance</h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="brands_slider_container">
                    <div class="owl-carousel owl-theme brands_slider">
                        <?php foreach ($customers as $customer): ?>
                        	<div class="owl-item">
	                            <div class="brands_item d-flex flex-column justify-content-center">
	                            	<img src="<?php echo $customer->img ?>" alt="">
	                            </div>
	                        </div>
                        <?php endforeach ?>
                    </div> <!-- Brands Slider Navigation -->
                    <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                    <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>