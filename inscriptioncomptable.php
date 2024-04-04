<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation des Frais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
        <h1>Page de création de compte comptable</h1>
</header>


<div class="container">
        <form action="consult-fichefrais.php" method="post">
            <p>
                login :        
                <input type="login" name="login" required>
            </p>
            <p>
                mot de passe :
                <input type="password" name="password" required>
            </p>
            <p>
            email : 
                <input type="email" value="email" required>
            </p>
            <p>
            numéro de téléphone : 
                <input type="numéro de téléphone" value="numéro de téléphone" required>
            </p>
            </select>
            <br>

            <p>
                <input type="submit" value="création de compte" required>
            </p>
        </form>
    </div>
    <?php
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 
'');
}
catch(Exception $e)
{
 die('Erreur : '.$e->getMessage());
}