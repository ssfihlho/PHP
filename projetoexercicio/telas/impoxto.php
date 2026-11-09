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
    <title>Adicionar 18% de imposto sobre um valor</title>

</head>
<body>
    <h1>Adicionar 18% de imposto sobre um valor </h1>
    <form method="POST">
        <label>Informe o valor:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>
        
        <button type="submit">Calcular
        <?php
             if (isset($_POST['primeiroNumero'])){
            $preço = $_POST ['primeiroNumero'];
            $resultado = $funcoes-> imposto($preço); //Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
    echo $resultado;
    ?>
</body>
</html>