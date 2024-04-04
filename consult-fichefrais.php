<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation des Frais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
        <h1>Consultation de fiche frais</h1>
</header>
<div class="container">
<form action="fichefrais_post.php" method="post">
<label for="mois">Sélectionnez le mois que vous souhaitez consulter :</label>
        <select id="mois" name="mois" required>
            <option value="janvier">janvier</option>
            <option value="fevrier">février</option>
            <option value="mars">mars</option>
            <option value="avril">avril</option>
            <option value="mai">mai</option>
            <option value="juin">juin</option>
            <option value="juillet">juillet</option>
            <option value="aout">aout</option>
            <option value="septembre">septembre</option>
            <option value="octobre">octobre</option>
            <option value="novembre">novembre</option>
            <option value="decemble">decemble</option>
        </select>
        <br>

        <input type="submit" value="Valider">
</div>
</form>
<footer>
        <nav>
        <a class="liens" href="renseignerforfais.php">pour renseigner les frais hors forfaits</a> |
        </nav>
</footer>
</body>
</html>

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
