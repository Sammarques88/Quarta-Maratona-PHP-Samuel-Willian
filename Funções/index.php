<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php 

    $valorreal = 100.00; 
    $valor_formatado = number_format($valorreal, 2, ',','.');
    function desconto ($a,$b){
        return $a * $b;
     
       }
       
       $resultado = desconto(100, 0.15);
       $valorFinal = 100 - $resultado;
       $preço_formatado = number_format($valorFinal, 2,',','.');
     
         echo "O valor original da compra é: R$ " . $valor_formatado ;
         echo "<br>";   
         echo "O valor da compra com desconto é: R$ " . $preço_formatado ;
    
    
    ?>
    
</body>
</html>