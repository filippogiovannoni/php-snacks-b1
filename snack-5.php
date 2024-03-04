<?php
// Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

$paragraph = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae atque molestias dolores culpa vero, eum, ex distinctio possimus officia quam officiis deleniti dolore delectus beatae. Laboriosam delectus a at illum.";

$explodedParaghraphs =  explode('.', $paragraph);

var_dump($explodedParaghraphs);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>

<body>

    <?php foreach ($explodedParaghraphs as $explodedParaghraph) : ?>

        <!-- php echo forma abbreviata  -->
        <p><?= $explodedParaghraph ?></p>

    <?php endforeach ?>



</body>

</html>