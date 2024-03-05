<?php

## Snack 2

// Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”


var_dump($_GET)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>

    <?php if (strlen($_GET['name']) > 3 && str_contains($_GET['mail'], '.') && str_contains($_GET['mail'], '@') && is_numeric($_GET['age'])) : ?>
        <p>
            Accesso Autenticato
        </p>

    <?php else : ?>
        <p>Accesso Negato</p>
        <?php ?>

    <?php endif ?>

    <form action="" method="get">

        <label for="name">Inserisci il tuo nome</label>
        <input type="text" name="name" id="name">
        <label for="mail">Inserisci mail</label>
        <input type="email" name="mail" id="mail">
        <label for="age">Inserisci età</label>
        <input type="text" name="age" id="age">

        <button type="submit">Invia</button>

    </form>


</body>

</html>