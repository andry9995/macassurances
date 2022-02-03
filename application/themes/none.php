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

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <?= $output; ?>
</html>