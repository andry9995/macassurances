<?= $this->extend('template/index') ?>

<?= $this->section('content')  ?>
<!-- Begin Home Produit -->
<section id="portfolio" class="section bg-lightgray">
    <header class="container text-center">
        <h1 class="section-title">Nos Produits</h1>
    </header>

    <div class="container">
        <div id="portfolio-wrapper">
            <ul id="portfolio-item-container" class="clearfix" data-maxcolumn="4" data-animationclass="fadeInUpBig">
                <li class="portfolio-item animate-item photography" data-animate-time="80">
                    <div class="portfolio-item-wrapper">
                        <img src="/assets/images/services/auto.jpg" alt="item 1">
                        <div class="portfolio-overlay overlay-yellow">
                            <a href="single-service.html" title="Nam facilisis condimentum" class="open-btn"></a>
                            <h2 class="portfolio-title"><a href="single-service.html" title="Single Portfoli Page">Automobile</a></h2>
                        </div><!-- End .portfolio-overlay -->
                    </div><!-- End .portfolio-item-wrapper -->
                    <div class="portfolio-item-title">
                        <h4>
                            <a href="single-service.html">Automobile</a>
                        </h4>
                    </div>
                </li>
                <li class="portfolio-item animate-item photography" data-animate-time="80">
                    <div class="portfolio-item-wrapper">
                        <img src="/assets/images/services/habitation.jpg" alt="item 1">
                        <div class="portfolio-overlay overlay-yellow">
                            <a href="single-service.html" title="Nam facilisis condimentum" class="open-btn"></a>
                            <h2 class="portfolio-title"><a href="single-service.html" title="Single Portfoli Page">Habitation</a></h2>
                        </div><!-- End .portfolio-overlay -->
                    </div><!-- End .portfolio-item-wrapper -->
                    <div class="portfolio-item-title">
                        <h4>
                            <a href="single-service.html">Habitation</a>
                        </h4>
                    </div>
                </li>
                <li class="portfolio-item animate-item photography" data-animate-time="80">
                    <div class="portfolio-item-wrapper">
                        <img src="/assets/images/services/scolaire.jpg" alt="item 1">
                        <div class="portfolio-overlay overlay-yellow">
                            <a href="single-service.html" title="Nam facilisis condimentum" class="open-btn"></a>
                            <h2 class="portfolio-title"><a href="single-service.html" title="Single Portfoli Page">Scolaire</a></h2>
                        </div><!-- End .portfolio-overlay -->
                    </div><!-- End .portfolio-item-wrapper -->
                    <div class="portfolio-item-title">
                        <h4>
                            <a href="single-service.html">Scolaire</a>
                        </h4>
                    </div>
                </li>
                <li class="portfolio-item animate-item photography" data-animate-time="80">
                    <div class="portfolio-item-wrapper">
                        <img src="/assets/images/services/assurances.jpg" alt="item 1">
                        <div class="portfolio-overlay overlay-yellow">
                            <a href="single-service.html" title="Nam facilisis condimentum" class="open-btn"></a>
                            <h2 class="portfolio-title"><a href="single-service.html" title="Single Portfoli Page">Assurances</a></h2>
                        </div><!-- End .portfolio-overlay -->
                    </div><!-- End .portfolio-item-wrapper -->
                    <div class="portfolio-item-title bg-mac">
                        <h4>
                            <a href="single-service.html" class="text-white">
                                Tous nos produits
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </h4>
                    </div>
                </li>
            </ul><!-- End #portfolio-item-container -->

            
        </div><!-- End .portfolio-wrapper -->
    </div>
</section>
<!-- #End Home Produit -->
<?= $this->endSection();  ?>