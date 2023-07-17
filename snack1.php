<?php
$matches = [
    [
        "home_team" => "Inter",
        "away_team" => "Roma",
        "home_goals" => 3,
        "away_goals" => 1
    ],
    [
        "home_team" => "Juve",
        "away_team" => "Napoli",
        "home_goals" => 2,
        "away_goals" => 1
    ],
    [
        "home_team" => "Lazio",
        "away_team" => "Milan",
        "home_goals" => 1,
        "away_goals" => 3
    ],
    [
        "home_team" => "Atalanta",
        "away_team" => "Torino",
        "home_goals" => 2,
        "away_goals" => 2
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>1° giornata di campionato</h2>
    <h3>Risultati:</h3>
    <ul>
        <?php foreach ($matches as $match) : ?>
        <li><?= $match ?></li>
        <? endforeach ?>
    </ul>
</body>
</html>