<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays (Vetores e matrizes)</title>
</head>
<body>
    <h1>Trabalhando com arrays</h1>
    <hr>

    <h2>Arrays numéricos/indexado</h2>
 
<?php 
//sintaxe 1: usando colchetes []
$cantores = ["the weeknd","justin bieber", "playboi carti", "Partynextdoor"];

//sintaxe 2: usando função array()
$cursos = array("Excel", "Javascript", "Games 2D", "PHP");

//Array heterogeneo (tipos de dados mistos/variados)
$coisas = ["Ozzy", 2112, "<b>Senac</b>", 253.487, true];

//array como CONSTANTE

const FRUTAS = ["morango", "abacaxi"];
define ("FILIAIS", ["São Paulo", "Rio de Janeiro"]);
?> 
    
    <h3>Acessando dados de arrays indexados/numéricos </h3>
    <ul>
        <li>Cantores que mais gosto: <?= $cantores[3] ?></li>
        <li>Gostaria de estudar mais sobre o <?= $cursos[0] ?></li>
        <li>Estamos estudando no <?= $coisas[2] ?></li>
        <li>Estamos na unidade na cidade de <?= FILIAIS [0] ?></li>
    </ul>

    <h2>Array associativo</h2>
    <p>Lista de dados baseda em uma chave associativa (na pratica, é
     um nome/identificação que voce dá), e um valor para ela (o dado em
     si).</p>

<?php 
$curso = [
    //Chave associativa => valor
    "titulo" => "Gastronomia",
    "carga_horaria" => 800,
    "descricao" => "Aprender a esquentar água para fazer miojo"
];

const EMPRESA = [
    "nome" => "Biribinha soluções em TI",
    "ramo" => "Tecnologia",
    "fundacao" => "31/02/2026"
];
?>     

   <h3>Acessando dados de array associativo</h3>
   <p>Nome do curso: <b><?= $curso["titulo"] ?></b></p>
   <p>CH: <b><?= $curso["carga_horaria"] ?> horas</b></p>
   <p>Descrição: <b><?= $curso["descricao"] ?></b></p>
   <p>Prestador de serviços: <i><?= EMPRESA ["nome"] ?></i></p>

   <h2>Arrays de arrays (Matrizes)</h2>

<?php
//Matriz de arrays indexados 
$planoDeEstudos = [
    ["JS Avançado", "Node.js", "Next.js"],
    ["PHP Avançado", "Orientaloes a objetos"],
    ["Teoria das cores", "Photoshop", "Canva", "UX/UI"] 
];

//Matriz de arrays associativos
$clientes = [
    [
        "nome" => "Gabriel",
        "me_devendo" => 1000
    ],
    [
        "nome" => "Messias",
        "me_devendo" => 500
    ]
];
?>  
   
   <h3>Acessando dados das matrizes </h3>
   <p>Meu foco agora é no <?= $planoDeEstudos[1][0] ?></p>
   <p>O <?= $clientes [0]["nome"] ?> me deve <?= $clientes [0] ["me_devendo"] ?></p>

   <h2>Funções de análise/debug de estrutura de dados (arrays, objetos)</h2>
   <?php 
  //echo $bandas; nao funciona, o echo nao exibe arrays
   ?>
   <h3><code>print_r()</code></h3>
   <pre><?php print_r($cantores) ?></pre>


   <h3><code>var_dump()</code></h3>
   <pre><?php var_dump($cantores) ?></pre>
   
   <pre><?php var_dump($curso) ?></pre>

   <pre><?php var_dump(EMPRESA) ?></pre>

   <pre><?php var_dump($coisas) ?></pre>

   <pre><?php var_dump($clientes) ?></pre>

</body>
</html>