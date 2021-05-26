<?php

// As-t-on envoyé un fichier ?
$hasUpload = isset($_FILES["photo"]);

if($hasUpload){
    $upload = $_FILES["photo"];

    // Définir un nom unique
    $imgName = "/images/". uniqid(). ".jpg";
    // Définir le chemin absolu vers le fichier
    $targetPath = getcwd(). $imgName;
    var_dump($targetPath);

    // Déplacer le fichier temporaire
    if(! move_uploaded_file($upload["tmp_name"], $targetPath)){
        echo "Echec de l'upload";
    } else {
        echo "<img src=\"$imgName\">";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>

<form method="post" enctype="multipart/form-data">
    <div>
        <label>Votre photo</label>
        <input type="file" name="photo">
    </div>
    <button type="submit" name="submit">Envoyer</button>
</form>
    
</body>
</html>