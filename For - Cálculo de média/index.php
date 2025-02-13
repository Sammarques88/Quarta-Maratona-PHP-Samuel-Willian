<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de média</title>
</head>
<body>
    <?php 
    echo "<br>";

    $soma = 0; 
    
    for ($a = 1; $a <= 10; $a++){
    $soma +=  $a;

    }


    $media = $soma/10;
    echo "A média é " . $media . "<br>";
    ?>
    
</body>
</html>