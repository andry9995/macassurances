<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?php echo $titre; ?> | <?php echo $apropos ? $apropos->titre : '' ?></title>
    <meta name="description" content="MAC Mutuelle d'Assurances Comores">
    <meta name="author" content="mac assurances">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&amp;display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">

    <!-- Revolution Slider CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/settings.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navigation.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mac.css">
    <!-- Pace - page loading animation -->
    <!-- <script src="<?php echo base_url(); ?>assets/js/pace.min.js"></script> -->

    <!-- Favicon and Apple Icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.ico">

    <!-- carousel -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"> -->

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/preloader.css"/>


    <?php foreach ($css as $css) : ?>
        <link rel="stylesheet" href="<?php echo $css; ?>">
    <?php endforeach; ?>
</head>

<div id="preloader"> 
  <div id="loader-img">
    <div id="loader"></div> 
  </div>
  <div id="panel_left" class='loader-section section-left'></div>
  <div id="panel_right" class='loader-section section-right'></div>
</div>

<body data-spy="scroll" data-bs-spy="scroll" data-bs-target="#main-menu">
    <div id="wrapper">
        <header id="header">
            <nav class="navbar navbar-light navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand navbar-brand-img" href="index.html">
                        <img src="<?php echo $apropos ? $apropos->logo : ''; ?>" class="logo logo-dark" alt="logo">
                    </a>

                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar toggler-bar-top"></span>
                        <span class="navbar-toggler-text">Menu</span>
                        <span class="navbar-toggler-bar toggler-bar-bottom"></span>
                    </button>

                    <div class="collapse navbar-collapse flex-lg-grow-0 ms-lg-auto" id="main-menu">
                        <ul class="nav navbar-nav">
                            <?php foreach ($menu as $item): ?>
                                <?php if (empty($item['children'])): ?>
                                    <li class="nav-item">
                                        <a 
                                            class="nav-link <?php if ($this->uri->uri_string() == $item['path']): ?> active <?php endif ?>" 
                                            href="<?php echo site_url($item['path']); ?>"
                                        >
                                            <?php echo $item['name'] ?>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $item['name'] ?></a>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <?php foreach ($item['children'] as $child): ?>
                                                <li>
                                                    <a class="dropdown-item" href="<?php echo site_url($child['path']); ?>">
                                                        <?php echo $child['name'] ?>
                                                    </a>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </li>
                                <?php endif ?>
                            <?php endforeach ?>
                        </ul>
                    </div><!-- End .navbar-collapse -->
                </div><!-- End .container -->
            </nav>
        </header>

        <?php echo $output; ?>

        <footer id="footer" class="pattern9 text-dark">
            <div class="footer-social-icons">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-lg-4">
                            <div class="contact-info-box text-center">
                                <span class="contact-info-icon yellowbg"><i class="fas fa-map-marked-alt"></i></span>
                                <ul class="contact-info-list">
                                    <li><?php echo $apropos ? $apropos->adresse : '' ?></li>
                                </ul>
                            </div><!-- End .contact-info-box -->
                        </div><!-- End .col-lg-4 -->
                        
                        <div class="col-sm-6 col-lg-4">
                            <div class="contact-info-box text-center">
                                <span class="contact-info-icon yellowbg"><i class="fas fa-mobile-alt"></i></span>
                                <ul class="contact-info-list">
                                    <li><a href="tel:#"><?php echo $apropos ? $apropos->tel_mobile : '' ?></a></li>
                                </ul>
                            </div><!-- End .contact-info-box -->
                        </div><!-- End .col-lg-4 -->

                        <div class="col-sm-6 col-lg-4">
                            <div class="contact-info-box text-center">
                                <span class="contact-info-icon yellowbg"><i class="far fa-envelope"></i></span>
                                <ul class="contact-info-list">
                                    <li><a href="mailto:<?php echo $apropos ? $apropos->email : ''?>"><?php echo $apropos ? $apropos->email : ''?></a></li>
                                </ul>
                            </div><!-- End .contact-info-box -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-social-icons -->

            <div class="container">
                <p>Mac Assurances &copy; 2022</p>
            </div><!-- End .container -->
        </footer>
    </div><!-- End #wrapper -->

    <!-- scroltop -->
    <a href="#top" id="scroll-top" title="Go to top"><i class="fas fa-angle-up"></i></a>

    <!-- Google Map -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsNNnxMPiLLBC4VqdR_YUjLefbhYzEN_E"></script> -->

    <!-- Plugins -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl-carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validation.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.fittext.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.hoverdir.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.knob.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.countTo.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/isotope.min.js"></script>

    <!-- Revolution Slider -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.themepunch.revolution.min.js"></script>

    <!--Revolution Slider Extensions  
        (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->   
    <script src="<?php echo base_url(); ?>assets/js/extensions/revolution.addon.slicey.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/extensions/revolution.extension.video.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/slick/slick.min.js"></script>
    
    <!-- Main js -->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/ready.js"></script>

    <?php foreach ($js as $js) : ?>
        <link rel="stylesheet" href="<?php echo $js; ?>">
    <?php endforeach; ?>

</body>
</html>