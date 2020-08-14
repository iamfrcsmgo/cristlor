<!DOCTYPE html>
<html lang="fr-BE" >
<head>
  <meta charset="UTF-8">
  <title>Contact | Cristlor</title>
  <link rel="stylesheet" type="text/css" href="https://cristlor-demo.000webhostapp.com/css/style.css">
  <?php include('../includes/css-plus.php') ?>
  <?php include('../includes/meta.php') ?>
  <?php include('../includes/favicons.php') ?>
  <link rel="icon" type="image/jpg" href="https://cristlor-demo.000webhostapp.com/img/logo.png"/>
  <!-- Search Engine -->
<meta name="description" content="Contacter nous où soite envoyez nous un message">
<meta name="image" content="https://cristlor-demo.000webhostapp.com/img/logo.png">
<!-- Schema.org for Google -->
<meta itemprop="image" content="https://cristlor-demo.000webhostapp.com/img/logo.png">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:image:src" content="https://cristlor-demo.000webhostapp.com/img/og-image.jpg">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta property="og:image" content="https://cristlor-demo.000webhostapp.com/img/og-image.jpg">
<meta property="og:url" content="https://cristlor-demo.000webhostapp.com/contact/">
<meta property="og:site_name" content="Contact | Cristlor">
<meta property="og:locale" content="fr_BE">
<meta property="og:type" content="website">
</head>
<body>
  
  <?php include('../includes/menu.php') ?>
  <?php include('../includes/alert-msg.php') ?>

  <section>
    <div style="text-align: center;" class="contact-info-cadre">
      <img class="contact-info-logo" src="https://cristlor-demo.000webhostapp.com/img/logo.png" alt="Logo de Cristlor" width="100" height="100">
      <div class="contact-info">
    <h1>Cristlor</h1>
    <p>Apprendre en ligne<br>
    Site internet : <a href="https://cristlor-demo.000webhostapp.com">https://cristlor.000webhostapp.com</a></p>
  </div>

  </div>
  <br><br>

<div style="text-align: center;">
  <?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
                
                $headers = 'Message venant de Cristlor Nom et Prénom + l\'e-mail : ' . $_POST["firstname"] . ' <' . $_POST["email"] . '>';
		if(mail("mail@example.com", $_POST["subject"], $_POST["body"], $headers))
                     echo "<style type=\"text/css\">form{display: none;}</style><span class=\"email-success\">
                     <audio autoplay>
                     <source src=\"https://cristlor-demo.000webhostapp.com/folders/audio/notification.mp3\">
                     <source src=\"https://cristlor-demo.000webhostapp.com/folders/audio/notification.wav\">
                     <source src=\"https://cristlor-demo.000webhostapp.com/folders/audio/notification.ogg\">
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
				
                <input type="submit" value="Valider" name="submitpost">
				<!--<input type="submit" value="Envoyez">-->
			</div>
			</form>
			
  <div id="bg-social-media" style="text-align: center;">
    <h1>Rester en contact</h1>
    <div style="display: flex;justify-content: center;">
        <!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_email"></a>
<a class="a2a_button_pinterest"></a>
<a class="a2a_button_reddit"></a>
<a class="a2a_button_linkedin"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_google_gmail"></a>
<a class="a2a_button_facebook_messenger"></a>
<a class="a2a_button_yahoo_mail"></a>
<a class="a2a_button_sms"></a>
</div>
<script>
var a2a_config = a2a_config || {};
a2a_config.onclick = 1;
a2a_config.locale = "fr";
a2a_config.num_services = 4;
</script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
    </div>
    </div>
    
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
</body>
</html>