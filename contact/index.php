<!DOCTYPE html>
<html lang="fr-BE" >
<head>
  <meta charset="UTF-8">
  <title>Contact | Cristlor</title>
  <link rel="stylesheet" type="text/css" href="https://cristlor.000webhostapp.com/css/style.css">
  <?php include('../includes/css-plus.php') ?>
  <?php include('../includes/meta.php') ?>
  <?php include('../includes/favicons.php') ?>
  <link rel="icon" type="image/jpg" href="https://cristlor.000webhostapp.com/img/logo.png"/>
  <!-- Search Engine -->
<meta name="description" content="Contacter nous où soite envoyez nous un message">
<meta name="image" content="https://cristlor.000webhostapp.com/img/logo.png">
<!-- Schema.org for Google -->
<meta itemprop="image" content="https://cristlor.000webhostapp.com/img/logo.png">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:creator" content="@thefrancoism">
<meta name="twitter:image:src" content="https://cristlor.000webhostapp.com/img/og-image.jpg">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta property="og:image" content="https://cristlor.000webhostapp.com/img/og-image.jpg">
<meta property="og:url" content="https://cristlor.000webhostapp.com/contact/">
<meta property="og:site_name" content="Contact | Cristlor">
<meta property="og:locale" content="fr_BE">
<meta property="og:type" content="website">
</head>
<body>
  
  <?php include('../includes/menu.php') ?>
  <?php include('../includes/alert-msg.php') ?>

  <section>
    <div style="text-align: center;" class="contact-info-cadre">
      <img class="contact-info-logo" src="https://cristlor.000webhostapp.com/img/logo.png" alt="Logo de Cristlor" width="100" height="100">
      <div class="contact-info">
    <h1>Cristlor</h1>
    <p>Apprendre en ligne<br>
    Site internet : <a href="https://cristlor.000webhostapp.com">https://cristlor.000webhostapp.com</a></p>
  </div>

  </div>
  <br><br>

<div style="text-align: center;">
  <?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
                
                $headers = 'Message venant de Cristlor Nom et Prénom + l\'e-mail : ' . $_POST["firstname"] . ' <' . $_POST["email"] . '>';
		if(mail("thefrancoism@gmail.com", $_POST["subject"], $_POST["body"], $headers))
                     echo "<style type=\"text/css\">form{display: none;}</style><span class=\"email-success\">
                     <audio autoplay>
                     <source src=\"https://cristlor.000webhostapp.com/folders/audio/notification.mp3\">
                     <source src=\"https://cristlor.000webhostapp.com/folders/audio/notification.wav\">
                     <source src=\"https://cristlor.000webhostapp.com/folders/audio/notification.ogg\">
                     Veuillez mettre à jour votre navigateur !
                     </audio>
                     L'e-mail a bien été envoyée !</span>";
                else
                     echo "<div  class=\"email-unsuccess\">L'e-mail n'a pas bien été envoyée, veuillez réessayer plus tard.</div>";
	} else { 
	    echo '<h4 id="contact-form">Attention ! Nous ne pouvons pas répondre à tout le monde.</h4>';
	}
?>
</div>
<form action="#contact-form" method="POST">
        	<div style="text-align: center;">
        		<h1>Nous envoyez un e-mail :</h1>

				<input name="firstname" type="text" placeholder="Nom et Prénom" data-validation="required" required="required">

				<input name="email" type="email" placeholder="E-mail" data-validation="email" required="required">

				<input name="subject" type="text" placeholder="Sujet" data-validation="required" required="required">

				<textarea name="body" rows="10" placeholder="Message . . ." data-validation="required" required="required"></textarea>

				<div class="g-recaptcha" data-sitekey="6Le1K18UAAAAAAMQxD-fuY3EXzxW1uvOFatJl3bW"></div>
				
                <input type="submit" value="Valider" name="submitpost">
				<!--<input type="submit" value="Envoyez">-->
			</div>
			</form>
			
			<br>
  <div id="bg-social-media" style="text-align: center;">
    <h1>Rester en contact</h1>
    <div style="display: flex;justify-content: center;" class="addthis_inline_follow_toolbox_y4w9"></div>
    </div>
<div class="reponse-captcha-google">
        <?php
  require('../recaptcha/autoload.php');
  if(isset($_POST['submitpost'])) {
    if(isset($_POST['g-recaptcha-response'])) {
      $recaptcha = new \ReCaptcha\ReCaptcha('6Le1K18UAAAAAEcrnN-0sq74qw36J4gn-rOtwA7g');
      $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
      if ($resp->isSuccess()) {
          var_dump('Captcha Valide');
      } else {
          $errors = $resp->getErrorCodes();
          var_dump('Captcha Invalide');
          var_dump($errors);
      }
    } else {
      var_dump('Captcha non rempli');
    }
      }
    ?>
    </div>
    
    <style>
        .reponse-captcha-google
        {
            display: none;
        }
        
        @media screen and (max-height: 575px){
            #rc-imageselect,
            .g-recaptcha {
                transform:scale(0.77);
                transform-origin:0;
                transform:scale(0.77);
                transform-origin:0 0;
                -webkit-transform:scale(0.77);
                transform:scale(0.77);
                -webkit-transform-origin:0 0;
                transform-origin:0 0;
            }
        }
    </style>
<style>
    @media (max-width: 767px) 
{
    .social-btns
    {
        display:none;
    }

}
</style>
  </section>
  <?php include('../includes/browser.php') ?>
  <?php include('../includes/footer.php') ?>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php include('../includes/remove.php') ?>
</body>
</html>