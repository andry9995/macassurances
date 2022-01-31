<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre; ?></title>

    <?php foreach ($css as $css) : ?>
        <link rel="stylesheet" href="<?php echo $css; ?>">
    <?php endforeach; ?>
</head>
<body>

    <div class="container">
        <?php echo $output; ?>
    </div>

    <?php foreach ($js as $js) : ?>
        <link rel="stylesheet" href="<?php echo $js; ?>">
    <?php endforeach; ?>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>