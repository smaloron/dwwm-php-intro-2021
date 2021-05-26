<?php
$nav = [
    ["text" => "Contrôle de l'âge", "href" => "age.php"],
    ["text" => "Nom aléatoite", "href" => "noms.php"],
    ["text" => "Choix des compétences", "href" => "competences-2.php"]
];
?>

<!-- Ici la barre de navigation -->
<nav>
    <ul>
        <?php foreach($nav as $item): ?>
            <li>
                <a href="<?= $item["href"]?>">
                    <?= $item["text"] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</nav>