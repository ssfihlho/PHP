<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php"); //Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes; //Acessando a classe

    $funcoes = new Funcoes(); //Criando um vínculo com a classe Funcoes
    $resultado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Metros em Centimentros</title>

</head>
<body>
    <h1>Informe o número que deseja converter: </h1>
    <form method="POST">
        <label>Informe o número em metros:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>
        
        <button type="submit">Calcular
        <?php
             if (isset($_POST['primeiroNumero'])){
            $metro = $_POST ['primeiroNumero'];
            $resultado = $funcoes-> conversorMetrosCentimentros($metro); //Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
    echo $metro." Metro(s) tem : ".$resultado." CM.";
    ?>
</body>
</html>