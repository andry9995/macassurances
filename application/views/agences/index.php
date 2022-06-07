<!-- Begin Home Produit -->
<div class="page-header parallax bg-mac">
    <div class="container">
        <div class="page-header-wrapper">
            <h1 class="page-title">Réseaux & contact</h1>
            <span class="breadcrumb-mac">
                <a class="text-white" href="<?php echo base_url(); ?>">Accueil</a> 
                <span class="text-white"><i class="fa fa-angle-right"></i></span> 
                <span>Réseaux & contact</span>
            </span>
        </div>
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
</div>

<section class="section bg-lightgray">
    <div class="container">
    	<div class="row g-0">
            <div class="col-lg-3">
                <!-- Tab nav -->
                <ul class="nav nav-tabs flex-column nav-tabs-left" role="tablist">
                    <?php foreach ($bureaux as $key => $bureau): ?>
                    	<li class="nav-item" role="presentation">
	                        <button class="nav-link <?php if ($key == 0) : ?> active <?php endif; ?> " id="description-tab<?php echo $bureau->id ?>" data-bs-toggle="tab" data-bs-target="#description<?php echo $bureau->id ?>" type="button" role="tab" aria-controls="description" aria-selected="true"><?php echo $bureau->nom ?></button>
	                    </li>
                    <?php endforeach ?>
                </ul>
            </div><!-- End .col-lg-3 -->

            <div class="col-lg-9">
                <!-- Tab panes -->
                <div class="tab-content tab-content-border">
                    
                    <?php foreach ($bureaux as $key => $bureau): ?>
                    	<div class="tab-pane fade show <?php if ($key == 0) : ?> active <?php endif; ?> " id="description<?php echo $bureau->id ?>" role="tabpanel" aria-labelledby="description-tab<?php echo $bureau->id ?>">
                    		<div class="row">
                    			<div class="col-lg-6">
                    				<h5><?php echo $bureau->nom ?></h5>
			                        <ul class="list-style list-square">
			                        	<li> Adresse : <?php echo $bureau->adresse ?> </li>
			                        	<li> Tél : <?php echo $bureau->tel ?> </li>
			                        	<li> Email : <?php echo $bureau->email ?> </li>
			                        </ul>
                    			</div>
                    			<div class="col-lg-6">
                    				<div class="bureau-img">
                    					<img src="<?php echo $bureau->img ?>">
                    				</div>
                    			</div>
                    		</div>
	                    </div><!-- End .tab-pane -->
                    <?php endforeach ?>
                    
                </div><!-- End .tab-content -->
            </div><!-- End .col-lg-9 -->
        </div><!-- End .row -->
    </div>
</section>