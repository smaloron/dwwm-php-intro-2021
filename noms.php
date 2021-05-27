<?php

include "navigation.php";

$firstNames = [
    "Jean", "Pierre", "Pauline", "Natacha", "Paul", "Odile", "Lydia", "Yoko"
];

$names = [
    "Martin", "Mauduit", "Ferrier", "Labori", "Leduc"
];

echo $firstNames[array_rand($firstNames)]
    ." ". 
    $names[array_rand($names)];

echo "<br><br>";

// Affichage de la liste des prénoms
echo "<select>";
foreach($firstNames as $item){
    echo "<option>$item</option>";
}
echo "</select>";
