<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php
    require_once 'class.php';
    
    $c1 = new Caneta;
    $c1->cor = "Blue";
    $c1->modelo = "BIC";
    $c1->ponta = 0.5;
    $c1->tampada = false;

    $c1->tampar();
    $c1->rabiscar();
?>
</body>
</html>
