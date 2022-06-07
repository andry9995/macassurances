<div class="page-header parallax bg-mac">
    <div class="container">
        <div class="page-header-wrapper">
            <h1 class="page-title"><?php echo $actualite->titre ?></h1>
            <span class="breadcrumb-mac">
                <a class="text-white" href="<?php echo base_url(); ?>">Accueil</a> 
                <span class="text-white"><i class="fa fa-angle-right"></i></span> 
                <a class="text-white" href="<?php echo site_url('actualites'); ?>">Nos actualités</a> 
                <span class="text-white"><i class="fa fa-angle-right"></i></span> 
                <span><?php echo $actualite->titre ?></span>
            </span>
        </div>
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
</div>

<div class="md-margin2x"></div><!-- space -->

<main id="content">
    <div class="container">
        <div class="xlg-margin2x"></div><!-- space -->
                
        <div class="row single-portfolio">
            <div class="col-lg-7">
                <img src="<?php echo $actualite->img ?>" class="img-responsive" alt="portfolio 1">

                <div class="md-margin d-lg-none"></div><!-- space -->
            </div><!-- End .col-lg-7 -->

            <div class="col-lg-5">
                <div class="portfolio-item-details">
                    <h2 class="portfolio-title"><?php echo $actualite->titre ?></h2>
                    <p>
                    	<?php echo $actualite->description ?>
                    </p>

                    <ul class="portfolio-details-list">
                        <li><span>Date:</span><?php echo $actualite->date ?></li>
                    </ul>
                </div><!-- End .portfolio-item-details -->
            </div><!-- End .col-lg-5 -->
        </div><!-- End .row -->

        <div class="lg-margin d-none d-lg-block"></div><!-- space -->
    </div><!-- End .container -->

    <div class="md-margin"></div><!-- space -->
</main>