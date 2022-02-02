<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?php echo $titre; ?> | <?php echo $apropos->titre ?></title>
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
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">

    <?php foreach ($css as $css) : ?>
        <link rel="stylesheet" href="<?php echo $css; ?>">
    <?php endforeach; ?>
</head>

<body data-spy="scroll" data-bs-spy="scroll" data-bs-target="#main-menu">
    <div id="wrapper">
        <header id="header">
            <nav class="navbar navbar-light navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand navbar-brand-img" href="index.html">
                        <img src="<?php echo $apropos->logo; ?>" class="logo logo-dark" alt="logo">
                    </a>

                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar toggler-bar-top"></span>
                        <span class="navbar-toggler-text">Menu</span>
                        <span class="navbar-toggler-bar toggler-bar-bottom"></span>
                    </button>


                    <div class="collapse navbar-collapse flex-lg-grow-0 ms-lg-auto" id="main-menu">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="<?php echo site_url(); ?>">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('services'); ?>">Nos Produits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('agences/agences'); ?>">Réseau et Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#portfolio">Devis</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">À Propos</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="about.html">Notre Histroire</a></li>
                                    <li><a class="dropdown-item" href="news.html">Nos Actus</a></li>
                                </ul>
                            </li>
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
                        <div class="col-sm-6 col-lg-4 wow fadeInLeftBig">
                            <div class="contact-info-box text-center">
                                <span class="contact-info-icon yellowbg"><i class="fas fa-map-marked-alt"></i></span>
                                <ul class="contact-info-list">
                                    <li><?php echo $apropos->adresse ?></li>
                                </ul>
                            </div><!-- End .contact-info-box -->
                        </div><!-- End .col-lg-4 -->
                        
                        <div class="col-sm-6 col-lg-4 wow fadeInDownBig">
                            <div class="contact-info-box text-center">
                                <span class="contact-info-icon lightbluebg"><i class="fas fa-mobile-alt"></i></span>
                                <ul class="contact-info-list">
                                    <li><a href="tel:#"><?php echo $apropos->tel_mobile ?></a></li>
                                </ul>
                            </div><!-- End .contact-info-box -->
                        </div><!-- End .col-lg-4 -->

                        <div class="col-sm-6 col-lg-4 wow fadeInRightBig">
                            <div class="contact-info-box text-center">
                                <span class="contact-info-icon redbg"><i class="far fa-envelope"></i></span>
                                <ul class="contact-info-list">
                                    <li><a href="mailto:<?php echo $apropos->email ?>"><?php echo $apropos->email ?></a></li>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsNNnxMPiLLBC4VqdR_YUjLefbhYzEN_E"></script>

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

    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
    <script>
        var revapi;

        $(document).ready(function() {
        if( $("#irev-slider-4").revolution == undefined ){
            revslider_showDoubleJqueryError("#irev-slider-4");
        } else {
            revapi = $("#irev-slider-4").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style:"uranus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:778,
                        hide_onleave:false,
                        tmp:'',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:15,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:15,
                            v_offset:0
                        }
                    },
                    bullets: {
                        enable:true,
                        hide_onmobile:false,
                        style:"bullet-bar",
                        hide_onleave:false,
                        direction:"horizontal",
                        h_align:"center",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:30,
                        space:5,
                        tmp:''
                    }
                },
                viewPort: {
                    enable:true,
                    outof:"pause",
                    visible_area:"80%",
                    presize:false
                },
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,600,500,400],
                lazyType:"all",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50,47,48,49,50,51,55],
                    type:"mouse",
                },
                shadow:0,
                spinner:"spinner2",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                fullScreenOffset: "90px",
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
        }); /*ready*/
    </script>
    <?php foreach ($js as $js) : ?>
        <link rel="stylesheet" href="<?php echo $js; ?>">
    <?php endforeach; ?>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>