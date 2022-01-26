<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?php echo $titre; ?> | MAC Assurances</title>
    <meta name="description" content="MAC Mutuelle d'assurances Comores">
    <meta name="author" content="Eon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&amp;display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/css/animate.css">

    <!-- Revolution Slider CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/navigation.css">

    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/mac.css">

    <!-- Pace - page loading animation -->
    <!-- <script src="/assets/js/pace.min.js"></script> -->

    <!-- Favicon and Apple Icons -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/faviconx57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/faviconx72.png">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D9Y398Z1E7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-D9Y398Z1E7');
    </script>
</head>
<body data-spy="scroll" data-bs-spy="scroll" data-bs-target="#main-menu">
    <div id="wrapper">
        <header id="header">
            <!-- <div class="contact-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 contact-container-flex">
                            <div class="contact-item">
                                <span>
                                    <i class="fa fa-map-marker-alt"></i>
                                    Moroni Philips Grande Comores
                                </span>
                            </div>
                            <div class="contact-item">
                                <span>
                                    <i class="fa fa-phone"></i>
                                    +(269) 359 2414
                                </span>
                            </div>
                            <div class="contact-item">
                                <span>
                                    <i class="fa fa-envelope"></i>
                                    mac.assurances@gmail.com
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <nav class="navbar navbar-light navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand navbar-brand-img" href="index.html">
                        <img src="/assets/images/logo-white.png" class="logo logo-light" alt="logo">
                        <img src="/assets/images/logo.png" class="logo logo-dark" alt="logo">
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

        <?=  $this->renderSection('content'); ?>