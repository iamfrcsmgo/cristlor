<?php
$connexion = mysqli_connect('localhost', 'id4869222_cristlor', '4157moiuyt');
$db = mysqli_select_db($connexion, 'stats');
?>

<?php
$nb_visites = file_get_contents('https://cristlor.000webhostapp.com/data/pagesvues.txt');
$nb_visites++;
file_put_contents('data/pagesvues.txt', $nb_visites);
echo '<div class="visits-chiffre" style="text-align: center;">Nombre de pages vues : <strong>' . $nb_visites . '</strong> (stats)</div>';
?>
