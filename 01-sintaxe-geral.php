<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sintaxe Geral</title>
    <!-- css interno -->
    <style>
      .exemplo {
        border: solid 4px;
        padding: 4px;

        /* Propriedade CSS cujo vaor vem de um processamento PHP */
        color: <?php echo "orange"; ?>;
      }
    </style>
</head>
<body>
    <h1 class="exemplo">Trabalhando com PHP</h1>
    <hr>

    <?php
    //geração de texto/string
echo "Estou estudando a linguagem PHP para Back-End";
echo 'Este tambem é um texto/string';

//Geração de tags HTML
echo "<p>Este é um paragrafo gerado via PHP </p>";

//Geraçao com atributo

//Aspa simples fora, aspa dupla dentro
echo '<p><abbr title= "HyperText Preprocessor">PHP</abbr>
         É uma linguagem popular';

//Aspa dupla fora, aspa simples dentro         
echo "<p><abbr title= 'HyperText Preprocessor'>PHP</abbr>
         É uma linguagem popular"; 

//Aspa dupla fora, aspa dupla com escape "\" dentro         
echo "<p><abbr title= \"HyperText Preprocessor\">PHP</abbr>
         É uma linguagem popular";         
    ?>

 
<script>
    const tituloH1 = document.querySelector('h1');
    tituloH1.addEventListener("click", function(){
        alert("<?php echo "Olá PHP e JavaScript"; ?>");
    });
</script>

</body>
</html>