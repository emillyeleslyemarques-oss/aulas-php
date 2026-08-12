<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="p-4">

<?php  
$linguagens = [
    [ 
        "id" => 1,
        "nome" => "HTML",
        "descricao" => "Estruturação"
    ],
    [
        "id" => 2,
        "nome" => "CSS",
        "descricao" => "Estilos"
    ],
    [
        "id" => 3,
        "nome" => "JS",
        "descricao" => "comportamentos" 
    ],
    [
        "id" => 4,
        "nome" => "PHP",
        "descricao" => "Back-End"
    ],
    [
        "id" => 5,
        "nome" => "SQL",
        "descricao" =>  "Manipulação de dados"
    ] 
];    
?>


    <h2>1. Exibição de tags (h2, p, b, ul e li)</h2>
    <hr>
    <ul>
        <?php foreach ($linguagens as $linguagem):  ?>
        <li>
            <b><?= $linguagem ['id'] ?>. <?= $linguagem['nome'] ?>:</b>
            <p><?= $linguagem ['descricao'] ?></p>
        </li>
        <?php endforeach; ?>
    </ul>

    <hr>

    <h2>Exibição em tabela</h2>
   <div>
    <table class=" table table-striped table-hover table-bordered">
     <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Linguagens</th>
            <th scope="col">Descrição</th>
        </tr>
     </thead>
     <tbody>
<?php foreach ($linguagens as $linguagem): ?>
            <tr>
                <th scope="row"><?= $linguagem ['id'] ?></th>
                <td><?= $linguagem ['nome'] ?></td>
                <td><?= $linguagem ['descricao'] ?></td>
            </tr>
<?php endforeach; ?> 
        </table>
     </tbody>
  </div>  

</body>
</html>