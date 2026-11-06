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
    <title>Calcular a aréa do círculo com base no raio</title>

</head>
<body>
    <h1>Calcular a aréa do círculo com base no raio: </h1>
    <form method="POST">
        <label>Informe o raio do círculo em centímentros:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>
        
        <button type="submit">Calcular
        <?php
             if (isset($_POST['primeiroNumero'])){
            $r = $_POST ['primeiroNumero'];
            $resultado = $funcoes-> calcularAreaRaio($r); //Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
    echo " A aréa é de: ".$resultado." CM².";
    ?>
</body>
</html>