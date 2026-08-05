<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <style>
        .ingresso{
            max-width: 320px;
            padding: 20px;
            text-align: center;
            background-color: #f4f4f4;
            border: solid 2px black;
        }

        .infantil{
            background-color: #e0f7fa;
        }
        .adulto{
           background-color: #e8f7fa; 
        }

        .melhor-idade{
            background-color: #fff3e0;
            
        }
    </style>
</head>
<body>

<?php 
$idade = 30;

if ($idade < 12){
    $categoria = "infantil";
    $preco = 25.00;
    $classeCss ="infantil";
} else if ($idade < 60){
    $categoria = "adulto";
    $preco = 40.00;
    $classeCss = "adulto";
} else {
    $categoria = "melhor idade";
    $preco = 20.00;
    $classeCss = "melhor-idade";
}

$precoFormatado = number_format($preco, 2);
?>
    <h1>Exercicio 03 - Condicionais e uso do PHP intercalado com HTML</h1>
<?php if ($idade >= 0): ?>
    <div class="ingresso <?= $classeCss ?>">
       <p><b>Idade:</b> <?= $idade ?> anos</p>
       <p><b>Categoria:</b> <?= $categoria ?></p>
       <p><b>Ingresso:</b> R$ <?= number_format($preco, 2, "," ,".") ?></p>
    </div> 
<?php else:  ?>
    <p>Idade inválida</p>
<?php endif; ?>           
</body>
</html>