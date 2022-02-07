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

<section class="section">
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

<section id="aboutus" class="section">
    <header class="container text-center">
        <h1 class="section-title text-center">Notre Équipe</h1>
    </header>

    <div class="container">
    	<div class="row">
    		<div class="col">
    			<div class="slider responsive">
                    <?php foreach ($membres as $membre): ?>
                        <div class="mac_slider_item">
                            <div class="mac_slider_img ">
                                <img src="<?php echo $membre->img ?>" alt="">
                                <div class="member-desc text-center">
                                    <h2><?php echo $membre->nom ?></h2>
                                    <h3><?php echo $membre->poste ?></h3>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
    		</div>
    	</div>
    </div>
    <div class="md-margin d-md-none"></div><!-- space -->
    
</section>