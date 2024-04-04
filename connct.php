<?php
// Connexion à la base de données
$conn = new PDO('mysql:host=localhost;dbname=gsbv2', 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Pour afficher les erreurs SQL

// Vérification si les données du formulaire sont envoyées
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //session_start();

    // Récupération des données du formulaire
    $login = $_POST['login'];
$password = $_POST['password'];

// Requête SQL avec requête préparée
$sql = "SELECT login FROM visiteur WHERE login=:login";
$stmt = $conn->prepare($sql);
$stmt->execute(['login' => $login]);
$user = $stmt->fetch();
print_r($user);

if ($user) {
    // Vérifier le mot de passe
    if (password_verify($password, $user['mdp'])) {
        // Authentification réussie, ouverture de session
        $_SESSION['login'] = $login;
        header("Location: consult-fichefrais.php"); // Redirection vers la page d'accueil
        exit;
    } else {
        echo "Mot de passe incorrect";
    }
} else {
    echo "Login incorrect";
}

} else {
    // Si l'utilisateur tente d'accéder directement à cette page sans soumettre le formulaire, redirigez-le vers la page de connexion
    header("Location: index.php");
    exit;
}
?>
