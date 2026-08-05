<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops no PHP</title>
</head>
<body>
    <h1>Trabalhando com comandos de repetição</h1>
    <hr>

    <h2>While (enquanto)</h2>
    <p>Executa ações repetidas vezes enquando a condição for verdadeira</p>
<?php 
$i = 1;
while ($i <= 5):  //{ 
?>
    <p>Parágrafo: <?= $i ?></p>
<?php 
    $i++;
endwhile;  //}
?>


    <hr>

    <h2>do/while (faça/enquanto)</h2>
    <p>Executa as ações pelo menos <b>uma vez</b> e, se
     a condição for verdadeira, continua executando
    outras vezes.</p>

<?php 
$j = 1;
do {
?>  
    <div>
        <h3>Qualquer</h3>
        <p>Bloco <?= $j ?></p>
    </div>
<?php 
  $j++;
}while ($j <= 3)  
?>

    <hr>

    <h2>for (para)</h2>
    <p>Executa ações de acordo com uma quantidade
    determinada de vezes.</p>
<section>
    <h3>FAQ (perguntas frequentes)</h3>
<?php for($i = 1; $i <= 5; $i++){  //ou :?>
     <details>
        <summary>Pergunta <?= $i ?></summary>
        <p>resposta <?= $i ?></p>
     </details>
<?php } //ou endfor;?>
</section>
</body>
</html>