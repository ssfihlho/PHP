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
    <title>Converter Celsius em Farenheit</title>

</head>
<body>
    <h1>Converter Celsius em Farenheit: </h1>
    <form method="POST">
        <label>Informe a temperatura em Celsius:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>
        
        <button type="submit">Calcular
        <?php
             if (isset($_POST['primeiroNumero'])){
            $celsius = $_POST ['primeiroNumero'];
            $resultado = $funcoes-> converterCelsiusFh($celsius); //Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
    echo $celsius."° Celsius em Farenheit é: ".$resultado."° F.";
    ?>
</body>
</html>