<div class="page-header parallax bg-mac">
    <div class="container">
        <div class="page-header-wrapper">
            <h1 class="page-title">Nos actualités</h1>
            <span class="breadcrumb-mac">
                <a class="text-white" href="<?php echo base_url(); ?>">Accueil</a> 
                <span class="text-white"><i class="fa fa-angle-right"></i></span> 
                <span>Nos actualités</span>
            </span>
        </div>
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
</div>

<section class="section bg-lightgray">
	<div class="container">
		<div class="row">
			<?php foreach ($actualites as $actualite): ?>
				<div class="col-lg-6 col-md-6 timeline left">
		            <article class="article yellow wow fadeInLeftBig">
		                <figure class="article-media-container">
		                    <a href="<?php echo site_url('actualites/show/' . $actualite->id) ?>">
		                        <img src="<?php echo $actualite->img ?>" alt="post 1">
		                    </a>
		                </figure><!-- End .article-media-container -->
		                <div class="article-meta-container">
		                    <h2><a href="<?php echo site_url('actualites/show/' . $actualite->id) ?>" title="Lorem ipsum dolor sit amet."><?php echo $actualite->titre ?></a></h2>
		                    <p>
		                    	<?= substr($actualite->description, 0, 140); ?> [...]
                                <a href="<?php echo site_url('actualites/show/' . $actualite->id) ?>" class="readmore" title="">Voir plus</a>
		                    </p>
		                    <div class="article-meta clearfix">
		                        <div class="article-meta-box article-author"><?php echo $actualite->date ?></div>
		                        <div class="article-meta-box article-comments">
                                    <a href="<?php echo site_url('actualites/show/' . $actualite->id) ?>" title="">Afficher</a>
                                </div>
		                    </div><!-- End .article-meta -->
		                </div><!-- End .article-meta-container -->
		            </article><!-- End .article -->
		        </div>
			<?php endforeach ?>
		</div>
	</div>
	</section>