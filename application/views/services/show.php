<section id="our-values">
	<!-- <header class="container text-center">
        <h1 class="section-title">Assurance automobile</h1>
    </header> -->
    <div class="row">
        <div class="col-lg-6">
            <div class="values-img wow fadeInLeftBig">
                <img src="<?php echo $service->img; ?>">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="values-desc wow fadeInRightBig">
                <header class="container">
                    <h1 class="section-title text-white"><?php echo $service->nom ?></h1>
                </header>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-white">
                            <?php echo $service->description ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>