<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        .comprar { color: red ;}
        .normal { color: blue; }
    </style>
</head>
<body>
    <h1>Trabalhando com estruturas condicionais</h1>
    <hr>
    <!-- Lembrete: ao usar condicionais , muitas vezes também usaremos operadores relacionais:
     <,<=,>,>=,==,!=,===,!== -->
 
    <h2>Condicional SIMPLES: <code>if</code></h2>
<?php
   $numero = 50;
   if ($numero > 10){
    echo "<p>$numero é maior que 10.</p>";
   }
 
   //Estrutura abreviada (sem chaves)
   if ($numero > 10) echo "<p>$numero é maior que 10.</p>";
 
   //Estrutura alternativa (sem chaves com : e endif)
   if($numero>10):
    echo "<p>$numero é maior que 10.</p>";
   endif;
?>
 <hr>
 <h2>Condicional COMPOSTA: <code>if/else</code></h2>
 
<?php
$produto = "Ultrabook";
$qtdEmEstoque = 0;
$qtdCritica = 5;
?>
   <h3><?= $produto ?></h3>
   <p><b>Quantidade em estoque: </b><?= $qtdEmEstoque ?></p>
 
<?php
if ($qtdEmEstoque < $qtdCritica) {
    echo "<p class=\"comprar\"> É necessario comprar/repor</p>";
 
    //condicional ANINHADA
    if($qtdEmEstoque ===0){
        echo"<p><mark class=\"comprar\">🚨URGENTE!</mark></p>";
    }
} else {
   echo"<p class=\"normal\"> Estoque normal.</p>";
}
 
//if/else versão abreviada (shorthand if)?:
    $excessoDeEstoque = $qtdEmEstoque > 100 ? "sim" : "não";
    echo $excessoDeEstoque;
   
    echo "<br>";
 
    echo $qtdEmEstoque >100 ? "sim" : "não";
?>
<hr>
   <h2>Condicional ENCADEADA: <code> if, elseif, else</code></h2>
<?php
$idade = 20;
$situacao = ""; //opcional (nem é obrigatorio declarar previamente)
 
if($idade<= 12) {
    $situacao = "criança";
}elseif ($idade <= 17) {
    $situacao = "adolecente";
}elseif ($idade <= 59){
    $situacao = "adulto";
}else{
    $situacao = "idoso";
}
?>
 
 <p>O usuário tem <?= $idade?> anos e é <?=  $situacao ?>.</p>
 
 <h3>Usando os comandos <code>switch/case/default/break</code></h3>
<?php
/* Prototipo de chatbot
opções: 1 (informações),2(reclamação), 3(elogio), X (inálida)*/
$opcao = 2; //entrada simulada
 
switch($opcao){
    case 1: echo "<p>Legal, o que quer saber?</p>"; break;
    case 2: echo "<p>Que pena, o que houve?</p>"; break;
    case 3: echo "<p>Que bacana, pode fala!</p>"; break;
    default: echo "<p>Não entendi... vou chamar alguém</p>"; break;
}
 
?>
   
</body>
</html>