<!DOCTYPE html>
<html lang="fr-be">
<head>
    <meta charset="UTF-8">
    <title>Moteur de Recherche | Cristlor</title>
    <link rel="stylesheet" type="text/css" href="https://cristlor.000webhostapp.com/css/style.css">
    <?php include('../includes/css-plus.php') ?>
    <!-- Search Engine -->
<meta name="description" content="Rechercher un mot, une phrase, etc. sur le site pour retrouver quelque chose qui puissent vous intéréssez">
<meta name="image" content="https://cristlor.000webhostapp.com/img/logo.png">
<!-- Schema.org for Google -->
<meta itemprop="image" content="https://cristlor.000webhostapp.com/img/logo.png">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:creator" content="@thefrancoism">
<meta name="twitter:image:src" content="https://cristlor.000webhostapp.com/img/og-image.jpg">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta property="og:title" content="Moteur de Recherche | Cristlor" />
<meta property="og:image" content="https://cristlor.000webhostapp.com/img/og-image.jpg">
<meta property="og:url" content="https://cristlor.000webhostapp.com/search/">
<meta property="og:site_name" content="Cristlor">
<meta property="og:locale" content="fr_BE">
<meta property="og:type" content="website">
<?php include('../includes/meta.php') ?>
<?php include('../includes/favicons.php') ?>
<link rel="icon" type="image/jpg" href="https://cristlor.000webhostapp.com/img/logo.png"/>
</head>
<body>
<?php include('../includes/menu.php') ?>
<?php include('../includes/alert-msg.php') ?>
<section>
<div style="text-align:center;">
<h1>Moteur de recherche</h1>
<p>Rechercher quelque chose sur notre site</p>
</div>
<style>
    .search-popular
    {
        text-align: center;
    }
</style>
<span class="search-google">
<script>
  (function() {
    var cx = '015192243820357055980:6vljczsoqmw';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
<div class="search-popular"><h2>Requêtes web les plus rechercher sur le site</h2>
<div id="queries" style="border: 2px solid #000;padding: 10px;font-size: 1.8em;"></div>
<script src="https://cse.google.com/query_renderer.js"></script>
<script src="https://cse.google.com/api/015192243820357055980/cse/6vljczsoqmw/queries/js?view=overall&callback=(new+PopularQueryRenderer(document.getElementById(%22queries%22))).render"></script>
</div>
</span>
<?php include('../includes/browser.php') ?>
</section>
<?php include('../includes/footer.php') ?>
<?php include('../includes/remove.php') ?>
</body>
</html>