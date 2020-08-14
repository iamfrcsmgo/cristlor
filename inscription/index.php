<!DOCTYPE html>
<html lang="fr-be" >
<head>
  <meta charset="UTF-8">
  <title>Inscription | Cristlor</title>
  <link rel="stylesheet" type="text/css" href="https://cristlor-demo.000webhostapp.com/css/style.css">
  <?php include('../includes/css-plus.php') ?>
  <?php include('../includes/meta.php') ?>
  <!-- Search Engine -->
<meta name="description" content="Inscrivez-vous pour enrichir votre intelligence intellectuelle avec tous nos cours créer pour apprendre en ligne.">
<meta name="image" content="https://cristlor-demo.000webhostapp.com/img/logo.png">
<!-- Schema.org for Google -->
<meta itemprop="image" content="https://cristlor-demo.000webhostapp.com/img/logo.png">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:creator" content="@thefrancoism">
<meta name="twitter:image:src" content="https://cristlor-demo.000webhostapp.com/img/og-image.jpg">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta property="og:image" content="https://cristlor-demo.000webhostapp.com/img/og-image.jpg">
<meta property="og:url" content="https://cristlor-demo.000webhostapp.com/inscription/">
<meta property="og:site_name" content="Cristlor">
<meta property="og:locale" content="fr_BE">
<meta property="og:type" content="website">
  <?php include('../includes/favicons.php') ?>
<link rel="icon" type="image/jpg" href="https://cristlor-demo.000webhostapp.com/img/logo.png"/>
</head>
<body>
  <?php include('../includes/menu.php') ?>
  <?php include('../includes/alert-msg.php') ?>
  <section>
      <style>
        @media (max-width: 800px) {
            .style-emails-jetables
            {
                padding: 5px;
                display: block;
            }
        }
      </style>

    <form action="" method="get">
      <fieldset>
      <legend><h1><i class="fa fa-plus-square"></i> S'inscrire</h1></legend>
      <p style="color: #ff6348;">* Attention les inscriptions sont indisponibles pour l'instant.</p>
      <h3>Inscrivez-vous pour apprendre plein de choses grâce à <kbd><strong style="color: #3c40c6;">nos cours</strong></kbd></h3>
      <p class="style-emails-jetables" style="border: 2px solid #000;padding: 20px;">Avant de t'inscrire tu dois quand même savoir que les e-mails jetables sont déconseillés sur le site.<br>
      Vous pouvez les utiliser mais ils déconseiller de les utiliser car sa créer des faux e-mails sur le site.<br>
      <a href="https://cristlor-demo.000webhostapp.com/folders/txt/emails-jetables.txt">Voir la liste des e-mails jetables <i class="fa fa-angle-double-right"></i></a></p>
  <div class="container">
    <label><b>Nom : </b></label>
    <input type="text" placeholder="Entrez votre nom" name="name" required><br>

    <label><b>Prénom :</b></label>
    <input type="text" placeholder="Entrez votre prénom" name="firstname" required><br>

    <label><b>Identifiant :</b></label>
    <input type="text" placeholder="Entrez un identifiant" name="pseudo" required><br>

    <label><b>E-mail :</b></label>
    <input type="email" placeholder="Entrez l'E-mail" name="email" required><br>

    <label><b>Mot De Passe :</b></label>
    <input type="password" placeholder="Entrez le Mot De Passe" name="psw" id="myInput" required><br>

    <label><b>Retapez le Mot De Passe :</b></label>
    <input type="password" placeholder="Retapez le Mot De Passe" name="psw-repeat" required><br>

    <span style="text-align:center;">
    <input type="checkbox" class="checkbox" onclick="myFunction()">Afficher le Mot De Passe
    
    <br>
    
    <input type="checkbox" name="vehicle" value="C.G.U" checked> Vous acceptez les <a href="https://cristlor-demo.000webhostapp.com/c-g-u/">Conditions Générales d'Utilisation</a>

    <br>

    <br>
    <input type="submit" value="Valider" name="submitpost">

    <!--<input id="submit" type="submit" value="Envoyer">-->
    </span>

  </div>
 </fieldset> 
</form>
  </section>
  <?php include('../includes/browser.php') ?>
  <?php include('../includes/footer.php') ?>
<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
</body>
</html>