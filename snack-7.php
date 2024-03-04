<?php

// Snack 7
// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

$students = [
    [
        "name" => "Marco",
        "lastname" => "Rossi",
        "votes" => [6, 8, 4, 7]
    ],
    [
        "name" => "Filippo",
        "lastname" => "Giovannoni",
        "votes" => [6, 8, 4, 7]
    ],
    [
        "name" => "Alessandro",
        "lastname" => "Bianchi",
        "votes" => [6, 8, 4, 7]
    ],
    [
        "name" => "Mario",
        "lastname" => "Rossi",
        "votes" => [6, 8, 4, 7]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>

<body>

    <?php foreach ($students as $student) : ?>

        <h3><?php echo $student['name'] . ' ' . $student['lastname'] ?></h3>
        <span>Media voti: <?php echo array_sum($student['votes']) / count($student['votes']) ?></span>

    <?php endforeach ?>


</body>

</html>