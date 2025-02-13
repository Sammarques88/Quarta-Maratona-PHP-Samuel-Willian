<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peças de carro</title>
</head>
<body>
<?php    

 $pecas = ["Pneus", "Embreagem", "Parabrisa", "Freios", "Retrovisor","Suspensão", "Volante", "Carburador", "Motor", "Câmbio" ];
 
 foreach ($pecas as $peca){
echo $peca . "<br>"; 
}
 ?>   
</body>
</html>