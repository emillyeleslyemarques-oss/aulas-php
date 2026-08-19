<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet"
     integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
     crossorigin="anonymous">
</head>
<body>
   <div class="container">
    <h1>filtros para validação e sanitização</h1>
    <hr>
    <p>Filtros são recursos de analise e limpeza de dados aplicados atraves
    de funçoes especiais, normalmente as funçoes <code>filter_var()</code> e 
    <code>filter_input()</code> e tambem com uso de <b>constantes</b> de validação/sanitização</p>

    <h2>Validação</h2>
    <h3>FILTER_VALIDATE_EMAIL</h3>
<?php 
$email = "email@provedor.com";
$emailValido = filter_var($email, FILTER_VALIDATE_EMAIL);
?> 
   <pre><?php var_dump($emailValido) ?></pre>

<?php if ($emailValido): ?>
    <p class="text-success">E-mail correto!</p>
<?php else: ?>
    <p class="text-danger">E-mail Incorreto!</p>
<?php endif; ?>

    <h3>FILTER_VALIDATE_URL</h3>
<?php 
$redeSocial = "https://linkedin.com/in/tiagobsantos";
$redeSocialValida = filter_var($redeSocial, FILTER_VALIDATE_URL);
?>
   <pre><?php var_dump($redeSocialValida) ?></pre>

<?php if($redeSocialValida): ?>   
    <a href="<?= $redeSocial ?>" class="btn btn-info">Me siga no Linkedin</a>
<?php endif; ?>

    <hr>

    <h2>Sanitização</h2>
    <h3>FILTER_SANITIZE_EMAIL</h3>
<?php 
$contato = "/emillye.lnmarques @sp.;senac.br";
$contatoSanitizado = filter_var($contato, FILTER_SANITIZE_EMAIL);
?>
     <p>Contato <b>sem</b> sanitização: <?= $contato ?></p>
     <p>Contato <b>com</b> sanitização: <?= $contatoSanitizado ?></p>

    <h3>FILTER_SANITIZE_FULL_SPECIAL_CHARS</h3>
<?php 
//Simulando uma entrada de codigo HTML
$nomeCompleto = "<img src = 'https://ogimg.infoglobo.com.br/rioshow/
25088054-e75-c90/FT1086A/pacoca-caseira.jpg'>";

$nomeCompletoSanitizado = filter_var(
    $nomeCompleto, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>    

    <p>Nome informado: <?= $nomeCompletoSanitizado ?></p>
<?php 
//simulando de um ataque de injeção de codigo JS (XSS - Cross site scripting)
$ataqueXSS = "<script>location = 'https://sp.senac.br'</script>";
?>
     <p>Teste: <?= filter_var($ataqueXSS, FILTER_SANITIZE_FULL_SPECIAL_CHARS)  ?></p>

     <h3>htmlspecialchars()</h3>
     <p>Pode ser usado como alternativa ao filtro/filter.</p>
<?php 
$nomeCompletoCorrigido = htmlspecialchars($nomeCompleto);
$ataqueEvitado = htmlspecialchars($ataqueXSS);
?>

    <p>Nome completo corrigido: <?= $nomeCompletoCorrigido ?></p>
    <p>Ataque evitado: <?= $ataqueEvitado ?></p>
</div> 

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous>"></script>
  </body>
</html>