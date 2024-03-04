<?php

// Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55-60

$matches = [
    [
        "home" => "Olimpia Milano",
        "away" => "Cantù",
        "home_points" => "55",
        "away_points" => "60",
    ],
    [
        "home" => "Virtus Bologna",
        "away" => "Varese",
        "home_points" => "89",
        "away_points" => "70",
    ],
    [
        "home" => "Brescia",
        "away" => "Reggiana",
        "home_points" => "75",
        "away_points" => "40",
    ],
    [
        "home" => "Scafati",
        "away" => "Venezia",
        "home_points" => "74",
        "away_points" => "73",
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Matches</title>
</head>

<body>


    <?php foreach ($matches as $match) { ?>

        <span> <?php echo $match['home'] . "-" . $match['away'] . " | " . $match['home_points'] . "-" . $match['away_points']; ?></span>

    <?php } ?>


</body>

</html>