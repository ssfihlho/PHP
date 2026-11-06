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
    <title>Calcular 10% de desconto de um produto</title>

</head>
<body>
    <h1>Calcular o desconto do produto</h1>
    <form method="POST">
        <label>Informe o valor total do produto: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>
        
        <button type="submit">Calcular
        <?php
             if (isset($_POST['primeiroNumero'])){
            $valor = $_POST ['primeiroNumero'];
            $resultado = $funcoes-> descontoCom10($valor); //Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
    echo "O valor do produto com o desconto é: ".$resultado;
    ?>
</body>
</html>