<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçoes para arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Funçoes nativas para arrays</h1>
        <hr>
        <h2>implode()</h2>
        <p>Transforma arraynem uma string</p>
<?php
$arrayBandas = ["Pink Floyd","Genesis","Yes"];
$textBanadas = implode( "-", $arrayBandas);
?>
      <pre><?php var_dump($arrayBandas) ?></pre>
      <pre><?php var_dump($textBanadas) ?></pre>
 
      <hr>
 
      <h2>extract()</h2>
      <p>Extrai chaves associativas para variaveis.</p>
<?php
$nome = "Beltrano";
$aluno = ["id" => 1, "nome" =>"Fulano", "idade" => 25];
extract($aluno , EXTR_PREFIX_ALL, "chave");
//Usamos o segundo parametro para definir um prefixo para os nomes
//Isso evita conflito/sobrescrita de outras variaveis
?>
     <ul>
        <li>ID: <?= $chave_id ?></li>
        <li>Nome <?= $chave_nome ?></li>
        <li>Idade: <?= $chave_idade ?></li>
     </ul>
 
     <p>Variavel <code>$nome</code> original: <?= $nome ?></p>
     <hr>
 
     <h2>array_sum()</h2>
     <p>Soma os valores de um array</p>
<?php
$carrinhoDeCompras = [
      "TV_Led"=> 1200,
      "Ultrabook" =>  2500,
      "Geladeira" => 3000
 
];
$total = array_sum($carrinhoDeCompras);    
?>
  <p>Total: <?= $total ?></p>
  <hr>
  <h2>array_unique()</h2>
   <p>Gera um novo array removendo elementos duplicados/repetidos em um array.</p>
<?php
$categorias = [
    "Eletronicos","Livros","Roupas","Livros", "Games","Eletronicos"
];
$categoriasUnicas = array_unique($categorias);
?>
    <pre><?php var_dump($categorias) ?></pre>
    <pre><?php var_dump($categoriasUnicas) ?></pre>
    <hr>
 
    <h2>array_marge()</h2>
    <p>Junta dados arrays diferentes</p>
<?php
$produtosFilialNorte = ["Mouse","Teclado"];
$produtosFilialSul = ["Monitor","Webcam", "Pendrive", "Teclado"];
 
//$produtos = array_merge($produtosFilialNorte,$produtosFilialSul);
//podemos combinar funçoes de arrays (abaixo , merge e depois unique)
$produtos = array_unique(
    array_merge($produtosFilialNorte , $produtosFilialSul)
);
?>
    <pre><?php var_dump($produtos) ?></pre>
 
    <hr>
    <h2>array_combine()</h2>
    <p>Cria um novo array a partir de uma lista de valores e uma lista de chaves. </p>
<?php
//Lista de chaves
$games = ["Super mario", "Sonic", "Final_Fantasy"];
 
//Lista de valores
$preco = [99,50,129];
$catalogo = array_combine($games ,$preco);
?>
      <pre><?php var_dump($catalogo) ?></pre>
     
    <hr>
    <h2>array_map()</h2>
    <p>Percorre cada elemento de um array , executauma função(chamada de callback) e gera um novo array com os resultados</p>
<?php
$catalogoComDesconto = array_map(function (float $preco): float {
   return $preco - $preco *0.10;
} ,$catalogo);
?>
     <pre><?php var_dump($catalogoComDesconto) ?></pre>
 
     <hr>

     <h2>array_column ()</h2>
     <p>Retorna um novo array com os valores de uma determinada chave associativa</p>
<?php  
$servicos = [
    ["codigo" => 3, "tipo" => "Limpeza", "status" => "Concluído"],
    ["codigo" => 12, "tipo" => "Manutenção", "status" => "Concluído"],
    ["codigo" => 1, "tipo" => "Reparo", "status" => "Pendente"],
    ["codigo" => 7, "tipo" => "Consultoria", "status" => "Concluído"],
    ["codigo" => 4, "tipo" => "Instalação", "status" => "Concluído"]
];

$tipoServicos = array_column($servicos, "tipo");
?>
     <pre><?php var_dump($tipoServicos) ?></pre>

     <hr>
 
     <h2>array filter()</h2>
     <p>Retorna valores para um novo array baseado em alguma condição/criterio.</p>
<?php 
$servicosConcluidos = array_filter(
    $servicos, fn(array $servico):bool => $servico["status"] === "Concluído"
);
?>
    <pre><?php var_dump($servicosConcluidos) ?></pre>
 
    </div>
 
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</body>
</html>
 