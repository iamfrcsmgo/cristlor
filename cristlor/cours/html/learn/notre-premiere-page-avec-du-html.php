<!DOCTYPE html>
<html lang="fr-BE">
<head>
    <meta charset="utf-8">
    <title>Notre première page avec du HTML : HTML | Cristlor</title>
    <link rel="stylesheet" type="text/css" href="https://cristlor.000webhostapp.com/css/style.css">
    <?php include('../../../includes/css-plus.php') ?>
    <?php include('../../../includes/meta.php') ?>
    <?php include('../../../includes/favicons.php') ?>
</head>
<body>
    <?php include('../../../includes/menu.php') ?>
    <?php include('../../../includes/alert-msg.php') ?>
    <section>
    <div class="beardcrumbs-liens">
    <ul id="breadcrumbs">
    <li><a href="https://cristlor.000webhostapp.com/">Accueil</a></li>
    <li><a href="https://cristlor.000webhostapp.com/cours/">Cours</a></li>
    <li><a href="https://cristlor.000webhostapp.com/cours/html/">HTML</a></li>
     <li><a href="https://cristlor.000webhostapp.com/cours/html/learn/editeur-de-texte.php" class="current">Notre première page avec du HTML</a></li>
    </ul>
    </div>
    <h1>Notre première page avec du HTML :</h1>
    <p>Tout d'abord pour commencer ouvrez votre éditeur de texte tel que Sublime Text, Notepad++, Brackets, Bloc-notes, ...<br>
    Vous devez savoir qu'on peut très bien créer un site avec bloc-notes en tapent le code HTML ou CSS et en enregistrent le fichier avec l'extension .html, .css, ...<br>
    <figure>
        <img src="https://cristlor.000webhostapp.com/img/cours/html/sublime-text-3.png" width="800" alt="Sublime Text ouvert">
        <figcaption>Code HTML</figcaption>
    </figure></p>
    <p></p>
    <div class="cr-tags"></div>
  <span class="cr-tag">HTML</span>
  <span class="cr-tag">Notre première page avec du HTML</span>
  </div>
  <br>
    <h1>Partager le cours :</h1>
       <hr>
       <br>
       <span class="link-url">
       <a role="button" href="#" onclick="copyToClipboard(this)"  class="fa fa-link" link="https://cristlor.000webhostapp.com/cours/html/learn/notre-premiere-page-avec-du-html.php#link-copied"></a>
       </span>
       <br><br>
       <div class="addthis_inline_share_toolbox"></div>
       <div class="btn-cours-a">
           <a href="https://cristlor.000webhostapp.com/cours/html/learn/editeur-de-texte.php" class="btn-cours-lien"><i class="fa fa-arrow-circle-left"></i> Précédant</a>
      </div>
      <div id="disqus_thread"></div>
    <script>
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://cristlor.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    </section>
    <?php include('../../../includes/browser.php') ?>
    <?php include('../../../includes/footer.php') ?>
    <?php include('../../../includes/remove.php') ?>
</body>
</html>