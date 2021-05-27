<?php
// Récupération des données
$nom = $_POST["nom"] ?? "inconnu";

var_dump($_POST);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <?php include "navigation.php"?>

    <form method="POST" action="traitement-formulaire.php">
        <input type="text" name="nom" placeholder="Votre nom">
        <button type="submit">Valider</button>
    </form>
</body>
</html>