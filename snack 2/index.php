<?php
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$age = $_GET['age']?? '';

$length_name = strlen($name);

$correct_email = strpos($email, ".");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($length_name >= 3) : ?>
        <h3><?= $name ?></h3>
    <?php  else : ?>
        <h3>Il nome deve contenere almeno 3 caratteri</h3>
    <?php endif ?>

    <?php if (!$correct_email) : ?>
        <h3>La mail deve contenere un punto</h3>
    <?php endif ?>
</body>
</html>