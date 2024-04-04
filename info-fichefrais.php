<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation des Frais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
        <h1>info fiche frais</h1>
</header>

<form action="gerer-frais" method="post">
        <label for="saisie_frais">Saisissez vos frais pour le mois courant :</label>
        <textarea id="saisie_frais" name="saisie_frais" placeholder="Saisissez vos frais ici" required></textarea>
        <br>


    <form action="modifier-frais" method="post">
        <label for="modification_frais">Modifiez les valeurs des frais au forfait :</label>
        <input type="text" id="modification_frais" name="modification_frais" placeholder="Modifiez vos frais ici" required>
        <br>
        <input type="submit" name="valider_modifications" value="Valider les modifications">
    </form>

    <form action="ajouter-frais-hors-forfait" method="post">
        <label for="date_engagement">Ajoutez un nouveau frais hors forfait :</label>
        <input type="date" id="date_engagement" name="date_engagement" required>
        <br>
        <label for="libelle">Libellé :</label>
        <input type="text" id="libelle" name="libelle" required>
        <br>
        <label for="montant">Montant :</label>
        <input type="number" id="montant" name="montant" required>
        <br>
        <input type="submit" name="valider_nouveau_frais" value="Valider le nouveau frais hors forfait">
    </form>
