<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">
       <h1>Trabalhando com funções</h1>
       <hr>

       <h2>Função como procedimento (ou sub-rotina)</h2>
       <p>Procedimentos não retornam nada.</p>
<?php 
function exibirDadosDoAutor(){
    echo "<h4>Fulano de tal</>";
    echo "<p>Aplicação <b>Back-end</b> como exemplo</p>";
}
?>
     <h3>Chamar a função/procedimento</h3>
     <?php exibirDadosDoAutor() ?>
     <div><?php exibirDadosDoAutor() ?></div>
    
     <hr>

     <h2>Função com parâmetros (ou argumentos)</h2>
    <?php 
    function somar ( $valor1, $valor2){
        $total = $valor1 + $valor2;
        return $total;  
    }
    ?>
    <h3>Chamada da função somar</h3>
    <p>Resultado 1: <?= somar (10,20) ?></p>
    <p>Resultado 2: <?= somar (1234,250) ?></p>
    <p>Resultado 3: <?= somar (2, 10.5) ?></p>

    <?php 
    //variavel de escopo global
    $precoProdutoA = 250;
    $precoProdutoB = 300;

    /*Podemos passar valores de outras variaveis para
     os parametros de uma fução */
    $resultadoProdutos = somar ($precoProdutoA, $precoProdutoB);
    ?>
    <p>Resultado 4: <?= $resultadoProdutos ?></p>

    <!-- Utilizando função como parte de condição de um if -->
     <?php if(somar(100,500) > 1200): ?>
        <p class="text-success">Meta atingida!</p>
    <?php else: ?>
        <p class="text-danger">Não foi desta vez!</p>
    <?php endif; ?>
    
    <hr>

    <h2>Função com parâmetros opcionais</h2>
    <?php 
    /* Neste caso, deixamos o parâmetro pessoa com um valor
     padrão (no exemplo, uma string vazia) */
    function exibirMensagem ($mensagem, $pessoa = ""){
        return "Olá, $mensagem $pessoa";
    }
    ?>
    <p>Saudação 1: <?= exibirMensagem("boa tarde", "Samuel") ?></p>
    <p>Saudação 2: <?= exibirMensagem("bom dia") ?></p>

    <hr>

    <h2>Função com indução de tipos de dados</h2>
    <p>Nesta abordagem, defiimos tipos de dados
    para os parâmetos e para o <b>retorno da função</b>.</p>
    <?php 
    function verificarNegativo(int $valor):string {
        if($valor < 0) return "é negativo";
        return "não é negativo"; 
    }
    ?>
    <p>Número 10: <?= verificarNegativo(10) ?></p>
    <p>Número -10: <?= verificarNegativo(-10) ?></p>

    <hr>

    <h2>Função anônima (ou lambda)</h2>
    <?php //Sempre declare primeiro a função
    $multiplicar = function(float $valor1, float $valor2):float{
        return $valor1 * $valor2;
    };
    ?>
    <!-- Repare no uso do $ junto com o nome da funçaõ: -->
    <p>Exemplo: <?= $multiplicar(10, 2) ?></p>

    <hr>

    <h2>Arrow Function</h2>
    <?php //Repare que omitimos os chaves e o return
    $subtrair = fn( float $valor1,  float $valor2):float => $valor1 - $valor2;
    ?>
    <p>Exemplo: <?= $subtrair(10, 1) ?></p>





</div>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</body>
</html>