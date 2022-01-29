<?= $this->extend('template/index') ?>

<?= $this->section('content')  ?>
<section class="section bg-lightgray">
	<header class="container text-center">
        <h1 class="section-title">MAC actualités</h1>
    </header>
    <div class="container">
    	<div class="row">
    		<?php foreach ($APIActualites as $actualite) : ?>
    		<div class="col-lg-6 col-md-6 timeline left">
                <article class="article yellow wow fadeInLeftBig">
                    <figure class="article-media-container">
                        <a href="#">
                            <img src="<?= $actualite->img; ?>" alt="Image MAC Assurances : <?= $actualite->titre; ?>">
                        </a>
                    </figure><!-- End .article-media-container -->
                    <div class="article-meta-container">
                        <h2><a href="#" title="<?= $actualite->titre; ?>"><?= $actualite->titre; ?></a></h2>
                        <p>
                        	<?= $actualite->description; ?>. 
                        	<a href="#" class="readmore" title="Plus de détails sur : <?= $actualite->titre; ?>">Plus d'informations</a>
                        </p>
                        <div class="article-meta clearfix">
                            <div class="article-meta-box article-author"><?= $actualite->date; ?></div>
                            <div class="article-meta-box article-comments">
                                <a href="#" title="21 Comment(s)">21 Comment(s)</a>
                            </div>
                        </div><!-- End .article-meta -->
                    </div><!-- End .article-meta-container -->
                </article><!-- End .article -->
            </div>
        	<?php endforeach; ?>
    	</div>
    </div>
</section>
<?= $this->endSection();  ?>