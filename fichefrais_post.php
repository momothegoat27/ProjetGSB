<?php
{
    $bdd = new PDO('mysql:host=localhost;dbname=gsbv2;charset=utf8', 'root', '');
}

$req = $bdd->prepare ('INSERT INTO gsbv2(idVisiteur,mois, nbJustificatif, montantvalide, dateModif, idEtat) VALUES( $_POST["mois"], $_POST["nbJustificatif"], $_POST["montantValide"], $_POST["dateModif"], $_POST["idEtat"])');

header('Location: renseigner.php');
?>
