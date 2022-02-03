<div class="page-header parallax bg-mac">
    <div class="container">
        <div class="page-header-wrapper">
            <h1 class="page-title">Notre histoire</h1>
            <span class="breadcrumb-mac">
                <a class="text-white" href="<?php echo base_url(); ?>">Accueil</a> 
                <span class="text-white"><i class="fa fa-angle-right"></i></span> 
                <span>A Propos</span>
                <span class="text-white"><i class="fa fa-angle-right"></i></span> 
                <span>Notre histoire</span>
            </span>
        </div>
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
</div>

<section class="section bg-lightgray">
	<header class="container text-center">
        <h1 class="section-title"><?php echo $apropos->titre ?></h1>
    </header>
    <div class="container">
    	<div class="row">
    		<div class="col-lg-12">
    			<p>
    				<?php echo $apropos->apropos ?>
    			</p>
    		</div>
    	</div>
    </div>
</section>

<section id="aboutus" class="section bg-lightgray">
    <header class="container text-center">
        <h1 class="section-title text-left">Notre Équipe</h1>
    </header>

    <div class="container">
        <div class="row">
            <?php foreach ($membres as $membre): ?>
            	<div class="col-sm-6 col-lg-2 member-container">
	                <div class="member left">
	                    <div class="member-wrapper">
	                        <figure class="front">
	                            <img src="<?php echo $membre->img ?>" alt="<?php echo $membre->nom ?>" class="img-responsive">
	                        </figure>
	                        <div class="back">
	                            <div class="vcenter-container">
	                                <div class="vcenter">
	                                    <h2><?php echo $membre->nom ?></h2>
	                                    <p><?php echo $membre->poste ?></p>
	                                    <hr>
	                                    <!-- <div class="socials socials-small">
	                                        <a href="#" class="social facebook" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-custom-class="social-facebook" title="Follow me on Facebook"><i class="fab fa-facebook-f"></i></a>
	                                        <a href="#" class="social twitter" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-custom-class="social-twitter" title="Follow me on Twitter"><i class="fab fa-twitter"></i></a>
	                                        <a href="#" class="social instagram" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-custom-class="social-instagram" title="Follow me on Instagram"><i class="fab fa-instagram"></i></a>
	                                        <a href="#" class="social linkedin" data-bs-placement="top" data-bs-toggle="tooltip" data-bs-custom-class="social-linkedin" title="Find me on Linkedin"><i class="fab fa-linkedin"></i></a>
	                                    </div> -->
	                                </div><!-- End .vcenter -->
	                            </div><!-- End .vcenter-container -->

	                        </div><!-- End .back -->
	                    </div><!-- End .member-wrapper -->
	                </div><!-- End .member -->
	            </div><!-- End .col-lg-3 -->
            <?php endforeach ?>
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="md-margin d-md-none"></div><!-- space -->
    
</section>