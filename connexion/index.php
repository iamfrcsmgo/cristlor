<!DOCTYPE html>
<html lang="fr-BE">
    <head>
        <meta charset="utf-8">
        <title>Connexion | Cristlor</title>
        <link rel="stylesheet" type="text/css" href="https://cristlor-demo.000webhostapp.com/css/style.css">
        <?php include('../includes/css-plus.php') ?>
        <?php include('../includes/meta.php') ?>
        <?php include('../includes/favicons.php') ?>
        <!-- Search Engine -->
<meta name="description" content="Connecter vous pour reprendre vos cours sur le site qui pourrons enrichir votre culture intellectuel.">
<meta name="image" content="https://cristlor-demo.000webhostapp.com/img/logo.png">
<!-- Schema.org for Google -->
<meta itemprop="image" content="https://cristlor-demo.000webhostapp.com/img/logo.png">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:image:src" content="https://cristlor-demo.000webhostapp.com/img/og-image.jpg">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta property="og:image" content="https://cristlor-demo.000webhostapp.com/img/og-image.jpg">
<meta property="og:url" content="https://cristlor-demo.000webhostapp.com/connexion/">
<meta property="og:site_name" content="Cristlor">
<meta property="og:locale" content="fr_BE">
<meta property="og:type" content="website">
  <link rel="icon" type="image/jpg" href="https://cristlor-demo.000webhostapp.com/img/logo.png"/>
    </head>
    <body>
        <?php include('../includes/menu.php') ?>
        <?php include('../includes/alert-msg.php') ?>
        <section>
        <form action="" method="get">
      <fieldset>
      <legend><h1><i class="fa fa-lock"></i> Se connecter</h1></legend>
      <p style="color: #ff6348;">* Attention les connexions sont indisponibles pour l'instant.</p>
      <h3>Connectez-vous pour reprendre <kbd><strong style="color: #3c40c6;">vos cours</strong></kbd></h3>

  <div class="container">
    <label><b>E-mail : </b></label>
    <input type="email" placeholder="Entrez votre E-mail" name="email" required><br>

    <label><b>Identifiant : </b></label>
    <input type="text" placeholder="Entrez votre identifiant" name="pseudo" required><br>

    <label><b>Mot De Passe : </b></label>
    <input type="password" placeholder="Entrez votre Mot De Passe" name="psw" id="myInput" required><br>

    <label><b>Retapez le Mot De Passe : </b></label>
    <input type="password" placeholder="Retapez le Mot De Passe" name="psw-repeat" required><br>

    <input type="checkbox" onclick="myFunction()">Afficher le Mot De Passe

    <br>

    <input type="checkbox" checked="checked"> Se souvenir de moi

    <br>

    <input id="submit" type="submit" value="Envoyer">

  </div>
  
  <p>
          <a href="https://cristlor-demo.000webhostapp.com/connexion/email-forget.php">Adresse e-mail oublié</a> | <a href="https://cristlor-demo.000webhostapp.com/connexion/password-forget.php"> Mot De Passe oublié</a>
      </p>
      </fieldset>
</form>
        <?php include('../includes/browser.php') ?>
        </section>
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