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
    <title>Ache a área de um triângulo utilizando a base e a altura</title>

</head>
<body>
    <h1>Informe os dados para achar a área: </h1>
    <form method="POST">
        <label>Informe a base:</label>
        <input type="number" id="baseArea" name="baseArea"/>
        <br><br>

        <label>Informe a altura:</label>
        <input type="number" id="alturaArea" name="alturaArea"/>
        <br><br>
        
        <button type="submit">Calcular
        <?php
             if (isset($_POST['baseArea'])){
            $base = $_POST ['baseArea'];
            $altura = $_POST ['alturaArea'];
            $resultado = $funcoes-> acheTriangulo($base, $altura); //Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
    echo "A aréa do triângulo é: ".$resultado." .";
    ?>
</body>
</html>