<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion GSB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("connct.php"); // Inclure le fichier de vérification si le formulaire a été soumis
    exit;
} else {
    // Si l'utilisateur n'est pas connecté, afficher le formulaire de connexion
    if (!isset($_SESSION['login'])) {
?>

<header>
    <h1>Page de connexion visiteurs médical</h1>
</header>

<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p>
            login :        
            <input type="login" name="login" />
        </p>
        <p>
            mot de passe :
            <input type="password" name="password" />
        </p>
        <br>
        <p>
            <input type="submit" value="connexion" />
        </p>
    </form>
</div>

<?php
    } else {
        // Si l'utilisateur est connecté, rediriger vers la page d'accueil
        header("Location: consult-fichefrais.php");
        exit;
    }
}
?>

</body>
</html>
