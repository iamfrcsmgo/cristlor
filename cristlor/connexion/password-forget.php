<!DOCTYPE html>
<html lang="fr-BE">
    <head>
        <meta charset="utf-8">
        <title>Oubli du mot de passe | Cristlor</title>
        <link rel="stylesheet" type="text/css" href="https://cristlor.000webhostapp.com/css/style.css">
        <?php include('../includes/css-plus.php') ?>
        <?php include('../includes/meta.php') ?>
        <?php include('../includes/favicons.php') ?>
    </head>
    <body>
        <?php include('../includes/menu.php') ?>
        <?php include('../includes/alert-msg.php') ?>
        <section>
        <h1>Mot de passe oublié</h1>
        <p style="color: #ff6348;">* Attention ceci n'est pas encore disponible.</p>
        <p>Nous ne pourrons pas vous envoyer votre e-mail.<br>
        Mais ne vous inquiétez pas car nous allons créer un nouveau mot de passe que nous vous enverrons par e-mail pour que vous puissiez vous connecter et le modifier s'il ne vous plaît pas.</p>
        <form action="" method="post" accept-charset="utf-8">
        <div>
        <p><label for="password-forget" class="main"><b>E-Mail :</b></label><br>
        <input id="email-forget" type="email" name="email-forget" size="30"> <input type="submit" name=email-forget-submit" value="OK&nbsp;"/></p>
        </div>
        </form>
        <?php include('../includes/browser.php') ?>
        </section>
        <?php include('../includes/footer.php') ?>
        <?php include('../includes/remove.php') ?>
    </body>
</html>