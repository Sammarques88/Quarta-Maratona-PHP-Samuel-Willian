<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Petshop</title>
</head>
<body>
    <?php 
    echo "Dados paciente <br>";
    echo "<br>";
    
    $dados = [
        "Nome" => "Frajola",
        "Idade" => 2,
        "Peso" => 2.5,
        "Dono" => "Edna"

    ];

    foreach ($dados as $nome => $idade){
        echo "<br>";
        echo "<br> $nome : <br>";
        echo $idade;
        echo "<br>";
    }
    
    
    
    
    
    
    
    
    
    
    
    ?>
    
</body>
</html>