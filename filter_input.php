<?php
    // Equivalent à isset($_POST["submit"])
    // La clef "submit" est elle présente dans le tableau $_POST ?
    $isPosted = filter_has_var(INPUT_POST, "submit");

    if($isPosted){
        //récupération de la saisie

        // Equivalent à $nom = $_POST["nom"]
        $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_STRING);
        $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_STRING);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        echo "Bonjour $prenom $nom";

    }


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire filter input</title>
</head>
<body>
<?php include "navigation.php"?>

<form method="post">
    <div>
        <label>Prénom</label>
        <input type="text" name="prenom">
    </div>
    <div>
        <label>Nom</label>
        <input type="text" name="nom">
    </div>

    <div>
        <label>age</label>
        <input type="text" name="age">
    </div>

    <button type="submit" name="submit">Valider</button>
</form>
    
</body>
</html>