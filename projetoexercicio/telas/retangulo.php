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
    <title>Ache o volume de uma caixa retângular </title>

</head>
<body>
    <h1>Informe os dados para achar a volume: </h1>
    <h2>INFORME AS MEDIDAS EM CENTÍMETROS!!</h2>
    <form method="POST">
        <label>Informe o comprimento:</label>
        <input type="number" id="comprimentoVolume" name="comprimentoVolume"/>
        <br><br>

        <label>Informe a largura:</label>
        <input type="number" id="larguraVolume" name="larguraVolume"/>
        <br><br>

        <label>Informe a altura:</label>
        <input type="number" id="alturaVolume" name="alturaVolume"/>
        <br><br>
        
        <button type="submit">Calcular
        <?php
             if (isset($_POST['comprimentoVolume'])){
            $compr = $_POST ['comprimentoVolume'];
            $larg = $_POST ['larguraVolume'];
            $alt = $_POST ['alturaVolume'];
            $resultado = $funcoes-> acheVolumeRetangulo($compr, $larg, $alt); //Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
    echo "O volume do retângulo é: ".$resultado." cm².";
    ?>
</body>
</html>