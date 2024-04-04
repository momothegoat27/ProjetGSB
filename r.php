<?php
{
    $bdd = new PDO('mysql:host=localhost;dbname=gsbv2;charset=utf8', 'root', '');
}


$bdd->exec('INSERT INTO visiteurs(nom,prenom, login, mdp, adresse, cp, ville, dateEmbauche) 
VALUES('$_POST['nom']', '$_POST['prenom']', '$_POST['login']', '$_POST['password']', '$_POST['adresse']','$_POST['cp']','$_POST['ville']','$_POST['dateEmbauche']')');
header('consult-fraisforfais.php');
?>