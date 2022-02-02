<!-- Begin Home Actualités-->
<section id="blog" class="section">
    <header class="container text-center">
        <h1 class="section-title">Nos actualités récentes</h1>
        <!-- <p class="section-desc">
            Follow our blog. Read our latest news and do not miss the new features. Stay in touch and share your comments with us...
        </p> -->
    </header>

    <div class="container">
        <div class="articles-container timeline-container">

            <?php if (!empty($APIActualites)): ?>
                <div class="timeline-date first">
                    <?php echo mdate('%d/%m/%Y'); ?>
                </div>
                <div class="row">
                    <?php $i=1; $j=-1; foreach ($APIActualites as $actualite) : ?>
                    <div class="col-lg-6 col-md-6 timeline <?php echo $i = ($i < 0) ? 'right top' : 'left'; $i = -1*1;?> ">
                        <article class="article yellow wow fadeInUpBig">
                            <span class="article-timeline-date" data-bs-toggle="tooltip" data-bg-placement="top" title="<?= $actualite->date; ?>"></span>
                            <figure class="article-media-container">
                                <a href="<?php echo site_url('actualites/show/' . $actualite->id) ?>">
                                    <img src="<?= $actualite->img; ?>" alt="<?= $actualite->titre; ?>">
                                </a>
                            </figure><!-- End .article-media-container -->
                            <div class="article-meta-container">
                                <h2><a href="<?php echo site_url('actualites/show/' . $actualite->id) ?>" title=""><?= $actualite->titre; ?></a></h2>
                                <p>
                                    <?= substr($actualite->description, 0, 140); ?> [...]
                                    <a href="<?php echo site_url('actualites/show/' . $actualite->id) ?>" class="readmore" title="">Voir plus</a>
                                </p>
                                <div class="article-meta clearfix">
                                    <div class="article-meta-box article-author"><?= $actualite->date; ?></div>
                                    <div class="article-meta-box article-comments">
                                        <a href="<?php echo site_url('actualites/show/' . $actualite->id) ?>" title="">Afficher</a>
                                    </div>
                                </div><!-- End .article-meta -->
                            </div><!-- End .article-meta-container -->
                        </article><!-- End .article -->
                    </div><!-- End .timeline -->
                    <?php endforeach; ?>
                </div><!-- End .row -->
            <?php endif ?>


            <div class="text-center">
                <a href="<?= site_url('home/actualites') ?>" class="btn btn-lg btn-yellow">TOUS NOS ACTUALITÉS</a>
            </div>

        </div><!-- End .articles-container -->
    </div><!-- End .container -->
</section>
<!-- #End Home Actualités -->