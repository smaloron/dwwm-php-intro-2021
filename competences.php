<!-- Cette solution n'est pas la meilleure -->
<?php
$skills = [];

if(isset($_POST["java"])){
    array_push($skills, "Java");
}
if (isset($_POST["php"])) {
    array_push($skills, "PHP");
}
if (isset($_POST["css"])) {
    array_push($skills, "CSS");
}


var_dump($skills);



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compétences</title>
</head>
<body>

<form method="post">
    <div>
        <input type="checkbox" value="Java" name="java">
        <label>Java</label>
    </div>
    <div>
        <input type="checkbox" value="PHP" name="php">
        <label>PHP</label>
    </div>
    <div>
        <input type="checkbox" value="CSS" name="css">
        <label>CSS</label>
    </div>

    <button type="submit" name="submit">Valider</button>
</form>
    
</body>
</html>