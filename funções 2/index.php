<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções 2</title>
</head>
<body>
    <?php 

    function eprimo ($numero) {
        if ($numero <=1){
            return false;
        }

            for ($i =2; $i < $numero; $i++) {
                if ($numero % $i == 0) {
                    return false;
                }
            }
        
    
    return true;
        }

    $numero = 2;
     if (eprimo($numero)) {
        echo "$numero é um número primo." ;
    }
       else{
        Echo "$numero não é um número primo.";

    }
    
    
    

    
    

    
    ?>
    
</body>
</html>