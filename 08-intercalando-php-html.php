<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando PHP intercalado com HTML </title>
</head>

<body>
    <h1>Revisando PHP intercalado com HTML</h1>
    <h2>Usando PHP para tudo (inclusive gerar HTML via comando echo)</h2>
<?php
$aluno = "Fulano";
const ESCOLA = "Senac Penha";
echo "<p>O aluno se chama $aluno</p>";
echo "<p>Ele estuda na escola " . ESCOLA . "</p>";
?>


    <hr>
    <h2>Usando PHP intercalando com HTML</h2>
    <p><i>(usar o PHP onde precisa)</i></p>
    <p>O aluno se chama <?= $aluno ?></p>
    <p>Ele estuda na escola <?= ESCOLA ?></p>

    <hr>

    <h2>Usando PHP intercalando comandos com HTML</h2>
<?php $idade = 25; ?>

    <h3>Resultado (usando PHP pra tudo):</h3>
<?php
 if ($idade >= 18) {
     echo "<p><b>$aluno</b> é maior de idade</p>";
} else {
     echo "<p><i>$aluno</i> é menor de idade </p>";
}
    ?>
    <h3>Resultado (usando PHP só onde é necessário):</h3>



</body>

</html>