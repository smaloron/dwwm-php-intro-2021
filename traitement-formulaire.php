<?php

// Récupération des données
$nom = $_POST["nom"] ?? "inconnu";

$erreur = "";

if(empty($nom)){
    $erreur = "Vous devez saisir un nom";
    echo $erreur;
} else {
    // Affichage
    echo "Bonjour $nom";
}



