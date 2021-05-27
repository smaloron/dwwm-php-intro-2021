<?php
    // Equivalent à isset($_POST["submit"])
    // La clef "submit" est elle présente dans le tableau $_POST ?
    $isPosted = filter_has_var(INPUT_POST, "submit");

    $filters = [
        "nom" => FILTER_SANITIZE_STRING,

        "prenom" => FILTER_SANITIZE_STRING,

        "age" => [
            "filter" => FILTER_VALIDATE_INT,
            "options" => [
                "max_range" => 77, "min_range" => 7
            ]
        ]
    ];

    if($isPosted){
        $data = filter_input_array(INPUT_POST, $filters);

        var_dump($data);
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