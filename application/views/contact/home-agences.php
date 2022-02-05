<section id="aboutus" class="section bg-mac">
    <header class="container text-center">
        <h1 class="section-title text-white"><?php echo count($bureaux) ?> Agences à travers Comores</h1>
    </header>

    <div class="container">
        <div class="row">

            <?php foreach ($bureaux as $key => $bureau): ?>
                <div class="col-sm-6 col-lg-3 member-container">
                    <div class="member left">
                        <div class="member-wrapper">
                            <figure class="front">
                                <img src="<?php echo $bureau->img ?>" alt="eric" class="img-responsive">
                                <h4 class="member-name"><?php echo $bureau->nom ?></h4>
                            </figure>
                            <div class="back">
                                <div class="vcenter-container">
                                    <div class="vcenter">
                                        <h2><?php echo $bureau->nom ?></h2>
                                        <hr>
                                        <div class="socials socials-small">
                                            <ul>
                                                <li><i class="fa fa-map-marked-alt"></i> <?php echo $bureau->adresse ?></li>
                                                <li><i class="fa fa-phone"></i> <?php echo $bureau->tel ?></li>
                                                <li><i class="fa fa-envelope"></i> <?php echo $bureau->email ?></li>
                                            </ul>
                                        </div><!-- End .socials -->
                                    </div><!-- End .vcenter -->
                                </div><!-- End .vcenter-container -->

                            </div><!-- End .back -->
                        </div><!-- End .member-wrapper -->
                    </div><!-- End .member -->
                </div>
            <?php endforeach ?>

        </div><!-- End .row -->
    </div><!-- End .container -->
</section>