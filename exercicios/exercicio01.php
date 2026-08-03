<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <style>
       body{
        background: linear-gradient(135deg, #e2e2e2, #c9d6ff);
        font-family: Arial, sans-serif;
        padding: 40px;
       }

       .caixa{
        font-weight: bold;
        background-color: rgba(255,255,255 0,75);
        backdrop-filter: blur(10px);
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.1);
       }

       .destaque{
        color: #881c1c;
        font-weight: bold;
       }
       
       .caixa h1 {
        display: inline-block;
        background-image: linear-gradient(45deg, #863d3f, #2c48c4) !important;
       -webkit-background-clip: text ;
       background-clip: text ;
      -webkit-text-fill-color: transparent ;
       color: transparent ;
       margin-bottom: 20px;
      }
    </style>
</head>
<body>
<?php
//variaveis
$data = "29 de julho de 2026";
$nome = "Emillye";
$curso = "Tec. informática para internet";
$cargaHoraria = 1000;
$limiteFaltas = $cargaHoraria *  0.25;
?>
  
  <div class="caixa">
    <h1>Exercicio 01 - Usando variaveis PHP</h1>

    <p>Data de hoje: <span class="destaque"><?php echo $data ?></span></p>

    <p>Meu nome é: <span class="destaque"><?php echo $nome ?></span> </p>

    <p>Estou cursando: <span class="destaque"><?php echo $curso ?></span></p>

    <p>A carga horária do meu curso é de  <span class="destaque"><?php echo $cargaHoraria ?></span></p>

    <p>O limite de faltas é de <span class="destaque"><?php echo $limiteFaltas ?></span></p>
  </div>

</body>
</html>