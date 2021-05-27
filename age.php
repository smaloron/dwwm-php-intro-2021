<?php

// Le formulaire est il posté ?
$isPosted = isset($_GET["age"]);

if($isPosted){
    // Récupération de la saisie
    $age = $_GET["age"];
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majorité</title>
</head>
<body>

    <?php include "navigation.php" ?>

    <?php
        if($isPosted){
            if($age < 18){
                echo "mineur";
            } else {
                echo "majeur";
            }
        }    
    ?>

    <form method="get">
        <label>Votre âge</label>
        <input type="number" name="age" >
        <button type="submit">Valider</button>
    </form>
    
</body>
</html>