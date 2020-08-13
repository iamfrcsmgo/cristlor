<!DOCTYPE html>
<html lang="fr-BE">
<head>
  <meta charset="UTF-8">
  <title>CSS : Cascading Style Sheets | Cristlor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="https://cristlor.000webhostapp.com/css/style.css">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php include('../../includes/css-plus.php') ?>
<!-- Search Engine -->
<meta name="description" content="Venez apprendre à coder avec nos fabuleux cours qui vous permettront de créer un magnifique site.">
<meta name="image" content="https://cristlor.000webhostapp.com/img/logo.png">
<!-- Schema.org for Google -->
<meta itemprop="name" content="CSS : Cascading Style Sheets | Cristlor">
<meta itemprop="description" content="Venez apprendre à coder avec nos fabuleux cours qui vous permettront de créer un magnifique site.">
<meta itemprop="image" content="https://cristlor.000webhostapp.com/img/logo.png">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="CSS : Cascading Style Sheets | Cristlor">
<meta name="twitter:description" content="Venez apprendre à coder avec nos fabuleux cours qui vous permettront de créer un magnifique site.">
<meta name="twitter:creator" content="@thefrancoism">
<meta name="twitter:image:src" content="https://cristlor.000webhostapp.com/img/og-image.jpg">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta name="og:title" content="CSS : Cascading Style Sheets | Cristlor">
<meta name="og:description" content="Venez apprendre à coder avec nos fabuleux cours qui vous permettront de créer un magnifique site.">
<meta property="og:image" content="https://cristlor.000webhostapp.com/img/og-image.jpg">
<meta property="og:url" content="https://cristlor.000webhostapp.com/cours/css">
<meta property="og:site_name" content="CSS : Cascading Style Sheets | Cristlor">
<meta property="og:locale" content="fr_BE">
<meta property="og:type" content="website">
<?php include('../../includes/meta.php') ?>
<?php include('../../includes/favicons.php') ?>
<link rel="icon" type="image/jpg" href="https://cristlor.000webhostapp.com/img/logo.png"/>
</head>
<body>
    <?php include('../../includes/menu.php') ?>
    <?php include('../../includes/alert-msg.php') ?>
    <section>
    <div class="beardcrumbs-liens">
    <ul id="breadcrumbs">
    <li><a href="https://cristlor.000webhostapp.com/">Accueil</a></li>
    <li><a href="https://cristlor.000webhostapp.com/cours/">Cours</a></li>
    <li><a href="https://cristlor.000webhostapp.com/cours/css/" class="current">CSS</a></li>
    </ul>
    </div>
        <div class="alert info">  
  <strong><i class="fa fa-bell"></i></strong> Avant de commencer, il est conseillé d'apprendre le <a href="https://cristlor.000webhostapp.com/cours/html/">HTML</a>.
</div>
        
        <button class="accordion"><i class="fa fa-list-alt"></i> Introduction</button>
<div class="acc-panel">
  <ol>
      <li><a href="https://cristlor.000webhostapp.com/cours/css/learn/fonctionnement.php">Le fonctionnement</a></li>
      <li><a href="https://cristlor.000webhostapp.com/cours/css/learn/editeur-de-texte.php">L'éditeur de texte</a></li>
  </ol>
</div>

<button class="accordion"><i class="fa fa-list-alt"></i> Commençons à coder</button>
<div class="acc-panel">
    <ol>
        <li><a href="https://cristlor.000webhostapp.com/cours/css/learn/notre-premiere-page-avec-du-css.php">Notre première page avec du CSS</a></li>
        <li>...</li>
    </ol>
</div>
<br>
               <div style="text-align: center;">
               <button id="btn-version-pdf" style="width: 200px;" onclick="window.location.href='https://bit.ly/2uFddDK';"><i class="fa fa-file-pdf"></i> Voir la version PDF</button>
               </div>
               <h3><span class="surlign">HTML</span></h3>
               <pre><code class="line-numbers language-markup">
&lt;!-- Fait par Cristlor --&gt;<br>
&lt;!DOCTYPE html&gt;<br>
&lt;html lang="fr-be"&gt;<br>
&lt;head&gt;<br>
&lt;meta charset="utf-8"&gt;<br>
&lt;title&gt;Tuto CSS&lt;/title&gt;<br>
&lt;link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"&gt;<br>
&lt;/head&gt;<br>
&lt;body&gt;<br>
&lt;h1&gt;&lt;i class="fa fa-child"&gt;&lt;/i&gt; Oh ! Un nouveau visiteur&lt;/h1&gt;<br>
&lt;/body&gt;<br>
&lt;html&gt;</code></pre>
               <h3><span class="surlign">CSS</span></h3>
                  <pre><code class="line-numbers language-css">
h1 <br>
{
&nbsp;&nbsp;&nbsp; color: red;<br>
}</code></pre>
<br>
           <div class="content-preview notranslate">
               <h3><span class="surlign">Prévisualisation</span></h3>
              <h1 style="color: red;"><i class="fa fa-child"></i> Oh ! Un nouveau visiteur</h1>
              <button style="width: 150px;" onclick="window.location.href='https://cristlor.000webhostapp.com/cours/css/demos/test.html';">Aller voir la page</button>
           </div>
           </div>
       
       </div>
       
       <h1>Partager :</h1>
       <hr>
       <br>
       <span class="link-url">
       <a role="button" href="#" onclick="copyToClipboard(this)"  class="fa fa-link" link="https://cristlor.000webhostapp.com/cours/css/#link-copied"></a>
       </span>
       <br><br>
       <div class="addthis_inline_share_toolbox"></div>
       
<?php include('../../includes/browser.php') ?>
</section>
<?php include('../../includes/footer.php') ?>
</div>
</div>
</div>
<?php include('../../includes/remove.php') ?>
</body>
</html>