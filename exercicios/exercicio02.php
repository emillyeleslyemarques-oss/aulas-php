<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <style>
        .container{
            display: flex;
            gap: 20px;
            justify-content:center ;
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 20px;
        }

        .card{
            border: 2px solid #333;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            background-color: #f9f9f9;
        }

        .card h2{
            margin-top: 0;
            color: #2c3e59;   
        }
    </style>
</head>
<body>
    <?php 
$pessoa1 = [
    "nome_usuario" => "emillye_leslye",
    "email" => "emillye@gmail.com",
    "senha" => "123abc",
    "idade" => 18,
    "sexo" => "feminino",
    "cidade" => "São Paulo"
];

$pessoa2 = new stdClass;
$pessoa2->nome_usuario = "William_pacheco";
$pessoa2->email = "William_pacheco@gmail.com";
$pessoa2->senha = "321bcd";
$pessoa2->idade = 42;
$pessoa2->sexo = "Masculino";
$pessoa2->cidade = "Rio de Janeiro";
?>

   <main class="container">
    <article class="card">
        <h2>Pessoa 1</h2>
        <p>Nome: <?= $pessoa1["nome_usuario"] ?></p>
        <p>E-mail: <?= $pessoa1 ["email"] ?></p>
        <p>Idade: <?= $pessoa1 ["idade"] ?> anos</p>
    </article>

    <article class="card">
        <h2>Pessoa 2</h2>
        <p>Nome: <?= $pessoa2->nome_usuario?></p>
        <p>E-mail: <?= $pessoa2->email ?></p>
        <p>Idade: <?= $pessoa2->idade?> anos</p>
    </article>
   </main>
</body>
</html>