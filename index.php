<?php

$colorList = ["red", "blue", "green", "yellow", "antiquewhite", "brown"];

// Récupération des données
// passées dans l'URL
$name = $_GET["nom"] ?? "Noé";
$fruit = $_GET["fruit"] ?? "Poire";
$color = $_GET["couleur"] ?? "green";
$fontSize = $_GET["taille"] ?? 24;

// initialisation du message d'erreur
$errors = "";

// Tests de validation de la saisie
// avec ajout des messages d'erreurs en cas de non validation
if( empty($name) ){
    $errors .= "Vous devez saisir un nom <br>";
}
if(empty($fruit)){
    $errors .= "Vous devez saisir un fruit <br>";
}
if (empty($color)) {
    $errors .= "Vous devez saisir une couleur <br>";
}
if($fontSize < 10){
    $errors .= "Vous devez saisir une taille supérieure à 10 <br>";
} else if($fontSize > 70){
    $errors .= "Vous devez saisir une taille inférieure à 70 <br>";
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <style>
    body {
        background-color: <?= $color?>;
        font-size: <?= $fontSize?>px;
    }

    input {
        width: 200px;
    }
    </style>
</head>

<body>
    <h1>Page par défaut</h1>

    <?php if(empty($errors)) :?>
    <!--    Affichage des variables PHP
            avec deux méthodes différentes de concaténation
    -->
        <div>
            <?php echo "<h2>bonjour " . $name . "</h2>"; ?>
            <?php echo "<h2>bonjour $name </h2>"; ?>

            <?php echo "<p>vous aimez les ${fruit}s </p>"; ?>
            <?php echo "<p>vous aimez les " . $fruit . "s </p>"; ?>
        </div>

    <?php else : ?>

        <div style="background-color:red; color:white">
            <?= $errors ?>
        </div>

    <?php endif ?>
    <!-- Liens vers index avec des paramètres différents -->
    <ul>
        <li> <a href="/?nom=Alice&fruit=raisin">Bonjour Alice</a></li>
        <li> <a href="/?nom=Pauline&fruit=cerise">Bonjour Pauline</a></li>
    </ul>

    <form method="get">
        <div>
            <label>Nom</label>
            <input type="text" name="nom" value="<?= $name ?>" required>
        </div>
        <div>
            <label>Fruit</label>
            <input type="text" name="fruit" value="<?= $fruit ?>">
        </div>

        <div>
            <label>couleur</label>
            <select name="couleur">
                <?php foreach($colorList as $item): ?>
                    <option><?php echo $item ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div>
            <label>Taille</label>
            <input type="number" name="taille" min="1" max="700" 
            placeholder="la taille en px sans l'unité"
            value="<?= $fontSize ?>">
        </div>

        <button type="submit" >Valider</button>
    </form>

</body>

</html>