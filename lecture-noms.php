<?php
    // Lecture du contenu d'un fichier
    $data = file_get_contents("data/noms.txt");

    // Transforme la chaine de caractère en tableau
    $list = explode("\n", $data);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leture d'un fichier texte</title>
</head>
<body>
    <?php include "navigation.php" ?>
    
    <!-- Affichage de la liste des noms -->
    <ul>
    <?php foreach($list as $item):?>
        <li><?= $item ?></li>
    <?php endforeach ?>
    </ul>
</body>
</html>