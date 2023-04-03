<?php
// To define a variable, you use the following syntax:
// $variable_name = value;

$title = "PHP Variablesf";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title ?>
    </title>
</head>
<body>
     <?php
        $title = 'PHP is awesome!';
    ?>
    <h1><?php echo $title; ?></h1>
    <h1><?= $title; ?></h1>
</body>
</html>