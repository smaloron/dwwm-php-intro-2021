<?php
    // Lecture du contenu d'un fichier
    $data = file_get_contents("data/noms.txt");

    // Transforme la chaine de caractère en tableau
    $list = explode("\n", $data);

    // Le formulaire a-til été envoyé
    $isPosted = filter_has_var(INPUT_POST, "submit");
var_dump($_POST);
    if($isPosted){
        // Récupération de la saisie
        $name = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_STRING);
var_dump($name);
        // Insertion dans la liste si la saisie n'est pas vide
        if(! empty($name)){
            // Ajout au tableau
            array_push($list, $name);
            // transformation du tableau en chaine de caractère
            $listAsString = implode("\n", $list);

            // Enregistrement dans le fichier text
            file_put_contents("data/noms.txt", $listAsString);

        }
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture d'un fichier texte</title>
</head>
<body>
    <?php include "navigation.php" ?>

    <form method="post">
        <input type="text" name="nom" placeholder="votre nom">
        <button type="submit" name="submit">Valider</button>
    </form>
    
    <!-- Affichage de la liste des noms -->
    <ul>
    <?php foreach($list as $item):?>
        <li><?= $item ?></li>
    <?php endforeach ?>
    </ul>
</body>
</html>