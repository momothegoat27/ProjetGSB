<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation des Frais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
        <h1>Page de création de compte visiteurs médical</h1>
</header>


<div class="container">
        <form action="r.php" method="post">
            <p>
                nom :        
                <input type="nom" name="nom" required>
            </p>
            <p>
                prenom :        
                <input type="prenom" name="prenom" required>
            </p>
            <p>
                login :        
                <input type="login" name="login" required>
            </p>
            <p>
                mot de passe :
                <input type="password" name="password" required>
            </p>
            <p>
            adresse : 
                <input type="adresse" value="" required>
            </p>
            <p>
            cp : 
                <input type="cp" value="" required>
            </p>
            ville : 
                <input type="ville" value="" required>
            </p>
            date Embauche : 
                <input type="dateEmbauche" value="" required>
            </p>
            </select>
            <br>

            <p>
                <input type="submit" value="création de compte" required>
            </p>
        </form>
    </div>

<?php

{
 $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 
'');
}




{
 die('Erreur : '.$e->getMessage());
}

?>