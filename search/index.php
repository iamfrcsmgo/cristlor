<!DOCTYPE html>
<html lang="fr-be">
<head>
    <meta charset="UTF-8">
    <title>Moteur de Recherche | Cristlor</title>
    <link rel="stylesheet" type="text/css" href="https://cristlor-demo.000webhostapp.com/css/style.css">
    <?php include('../includes/css-plus.php') ?>
    <!-- Search Engine -->
<meta name="description" content="Rechercher un mot, une phrase, etc. sur le site pour retrouver quelque chose qui puissent vous intéréssez">
<meta name="image" content="https://cristlor.000webhostapp.com/img/logo.png">
<!-- Schema.org for Google -->
<meta itemprop="image" content="https://cristlor-demo.000webhostapp.com/img/logo.png">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:image:src" content="https://cristlor-demo.000webhostapp.com/img/og-image.jpg">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta property="og:title" content="Moteur de Recherche | Cristlor" />
<meta property="og:image" content="https://cristlor-demo.000webhostapp.com/img/og-image.jpg">
<meta property="og:url" content="https://cristlor-demo.000webhostapp.com/search/">
<meta property="og:site_name" content="Cristlor">
<meta property="og:locale" content="fr_BE">
<meta property="og:type" content="website">
<?php include('../includes/meta.php') ?>
<?php include('../includes/favicons.php') ?>
<link rel="icon" type="image/jpg" href="https://cristlor-demo.000webhostapp.com/img/logo.png"/>
</head>
<body>
<?php include('../includes/menu.php') ?>
<?php include('../includes/alert-msg.php') ?>
<section>
<div style="text-align:center;">
<h1>Moteur de recherche</h1>
<p>Rechercher quelque chose sur notre site</p>
</div>

<?php include('../includes/browser.php') ?>
</section>
<?php include('../includes/footer.php') ?>
</body>
</html>