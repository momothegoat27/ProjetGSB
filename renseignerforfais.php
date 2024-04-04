<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation des Frais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
        <h1>Renseignements de fiche frais</h1>
</header>


        <form action="renvoi.php" method="post">

            <p>
            frais kilométrique : 
                <input type="frais kilométrique" value="" required>
            </p>
            <p>
            nuitée hotel : 
                <input type="nuitée hotel" value="" required>
            </p>
            <p>
            repas restaurant : 
                <input type="repas restaurant" value="" required>
            </p>
            <p>
            autres frais : 
                <input type="autres frais" value="" required>
            </p>
            <p>
                <input type="submit" value="valider" required>
            </p>
        </form>

<?php
{
    $bdd = new PDO('mysql:host=localhost;dbname=gsbv2;charset=utf8', 'root', '');
}
$reponse = $bdd->query('SELECT * FROM fichefrais');
if (!$reponse) {
    $errorInfo = $bdd->errorInfo();
    echo "Erreur SQL : " . $errorInfo[2];
    echo("ca ne marche pas");
} else {
    echo("ca marche pas d érreur de BDD");
    echo "Nombre de lignes retournées : " . $reponse->rowCount();
    while ($donnees = $reponse->fetch()) {
        
        echo "<p>";
        echo("h");
        echo $donnees['idVisiteur'] . "<br>";
        echo $donnees['mois'] . "<br>";
        echo $donnees['nbJustificatifs'] . "<br>";
        echo $donnees['montantValide'] . "<br>";
        echo $donnees['dateModif'] . "<br>";
        echo $donnees['idEtat'] . "<br>";
        echo "</p>";
    }
    $reponse->closeCursor();
}
?>