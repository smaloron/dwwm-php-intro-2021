<?php

    //var_dump($_POST);

    // booléen qui indique si on a coché la case ou pas
    $subscribed = isset($_POST["abonnement"]);
    $isPosted = isset($_POST["submit"]); // count($_POST) > 0

    if($subscribed){
        $message = "Merci pour votre abonnement";
    } else if($isPosted) {
        $message = "Vous ratez quelque chose";
    } else {
        $message = "";
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case à cocher</title>
</head>
<body>

<?php include "navigation.php"?>


<form method="post">
    <div>
        <input type="checkbox" name="abonnement" >
        <label>Je veux m'abonner</label>
    </div>
    <div>
        <input type="checkbox" required>
        <label>J'accepte les conditions</label>
    </div>
    
    <button type="submit" name="submit">Valider</button>
</form>
<!-- Affichage du message -->
<p>
    <?= $message ?>
</p>
    
</body>
</html>