<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores logicos</title>
</head>
<body>
    <h1>Trabalhando com operadores lógicos</h1>
    <hr>
 
    <h2>&&(E/AND)</h2>
    <p>Retorna <b>verdadeiro/true</b> se <b>todas</b> as condições forem verdadeiras.</p>
 
<?php
$nota1 = 10;
$nota2 = 7;
$media = ($nota1 + $nota2) /2;
$faltas = 1;
?>
<p><b>Média:</b><?= $media ?></p>
<p><b>Faltas:</b><?= $faltas ?></p>
<!-- o aluno so estara aprovado se tiver media de pelo menos 7 e faltas no maximo 10 -->
 
<?php if ($media >= 7 && $faltas <=10):?>
    <p>Aprovado!</p>
<?php else: ?>
    <p>Reprovado</p>
    <?php endif; ?>
<hr>
<!-- || duplo PIPE -->
 <h2> || (OU/OR)</h2>
 <p>Retorna <b>verdadeiro/true</b> se pelo menos <b>uma</b> das condiçõesfor verdadeira.</p>
 
 <?php
/*Dar um desconto a um cliente desde q ele (a) seja VIP ou que tenha cupom de <desconto></desconto>*/
$valor = 1000;
$clienteVIP =true; //valor/tipo logico(ou booleano)
$temCupom = false; // valor/tipo logico(ou booleano)
$percentualDesconto = 0.10; //10%
 
if($clienteVIP || $temCupom):
?>
  <p>Desconto aplicado com sucesso!</p>
  <p>Valor: R$ <?= $valor ?></p>
 
<?php
else:
?>
    <p>Sem desconto!</p>
    <p>Valor: R$ <?=  $valor ?></p>
<?php
endif;
?>
 
<hr>
 
<h2>! (NOT/NÃO/NEGAÇÃO)</h2>
<p>inverte a lógica,ou seja, <b>verdadeiro/true</b>vira <b>falso/false</b></p>
<?php
 /* Se o usuario NÃO estiver logado , mostre o link do login.
Caso contrario,exibir saudação*/
$usuarioLogado = false;
 
if (!$usuarioLogado): //se usuario nao esta logado (se usuariologado é FALSE)
?>
<p><a href="">Login (entre com seus dados)</a></p>
<?php
else :
?>
<p>BEM-VINDO(a) ao sistema</p>
<?php
endif;
?>
 
</body>
</html>