<?= $this->extend('template/index') ?>

<?= $this->section('content')  ?>
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
            <div class="timeline-date first">Janvier 2022</div>
            <div class="row">
                <div class="col-lg-6 col-md-6 timeline left">
                    <article class="article yellow wow fadeInUpBig">
                        <span class="article-timeline-date" data-bs-toggle="tooltip" data-bg-placement="top" title="15 Janvier 2022"></span>
                        <figure class="article-media-container">
                            <a href="#">
                                <img src="images/services/habitation.jpg" alt="post 1">
                            </a>
                        </figure><!-- End .article-media-container -->
                        <div class="article-meta-container">
                            <h2><a href="#" title="Lorem ipsum dolor sit amet.">Lorem ipsum dolor sit amet.</a></h2>
                            <p>Omnis officia, quibusdam tempore. Aspernatur dolores quibusdam, illo fuga similique rem itaque molestiae labore omnis, rerum ullam debitis, alias adipisci corporis. Quidem, ea nemo aperiam minus! Qui, vero sed. Laborum. <a href="#" class="readmore" title="Lorem ipsum dolor sit amet.">Readmore</a></p>
                            <div class="article-meta clearfix">
                                <div class="article-meta-box article-author">15 Janvier 2022</div>
                                <!-- <div class="article-meta-box article-comments">
                                    <a href="#" title="21 Comment(s)">21 Comment(s)</a>
                                </div> -->
                            </div><!-- End .article-meta -->
                        </div><!-- End .article-meta-container -->
                    </article><!-- End .article -->
                </div><!-- End .timeline -->

                <div class="col-lg-6 col-md-6 timeline right top">
                    <article class="article yellow wow fadeInUpBig">
                        <span class="article-timeline-date" data-bs-toggle="tooltip" data-bg-placement="top" title="08 Janvier 2022"></span>
                        <figure class="article-media-container">
                            <a href="#">
                                <img src="images/services/scolaire.jpg" alt="post 1">
                            </a>
                        </figure><!-- End .article-media-container -->
                        <div class="article-meta-container">
                            <h2><a href="#" title="Lorem ipsum dolor sit amet.">Lorem ipsum dolor sit amet.</a></h2>
                            <p>Omnis officia, quibusdam tempore. Aspernatur dolores quibusdam, illo fuga similique rem itaque molestiae labore omnis, rerum ullam debitis, alias adipisci corporis. Quidem, ea nemo aperiam minus! Qui, vero sed. Laborum. <a href="#" class="readmore" title="Lorem ipsum dolor sit amet.">Readmore</a></p>
                            <div class="article-meta clearfix">
                                <div class="article-meta-box article-author">08 Janvier 2022</div>
                                <!-- <div class="article-meta-box article-comments">
                                    <a href="#" title="33 Comment(s)">33 Comment(s)</a>
                                </div> -->
                            </div><!-- End .article-meta -->
                        </div><!-- End .article-meta-container -->
                    </article><!-- End .article -->
                </div><!-- End .timeline -->
                
            </div><!-- End .row -->

            <div class="text-center">
                <a href="#" class="btn btn-lg btn-yellow">TOUS NOS ACTUALITÉS</a>
            </div>
        </div><!-- End .articles-container -->
    </div><!-- End .container -->
</section>
<!-- #End Home Actualités -->

<?= $this->endSection();  ?>