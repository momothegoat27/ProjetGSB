<?php
{
    $bdd = new PDO('mysql:host=localhost;dbname=gsbv2;charset=utf8', 'root', '');
}

$SQL = "INSERT INTO fichefrais(idVisiteur,mois, nbJustificatif, montantvalide, dateModif, idEtat) VALUES('".$_POST['mois']."','". $_POST["nbJustificatif"]."','". $_POST["montantValide"]."','". $_POST["dateModif"]."','". $_POST["idEtat"]."');";
print_r($SQL);
$req=$bdd->exec($SQL);

header('Location: renseignerforfais.php');
?>