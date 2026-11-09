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
    <title>Leia a distância e o tempo, e calcule a velocidade média. </title>

</head>
<body>
    <h1>Leia a distância e o tempo, e calcule a velocidade média. </h1>
    <form method="POST">
        <label>Informe a distância:</label>
        <input type="number" id="deltaS" name="deltaS"/>
        <br><br>

        <label>Informe o tempo:</label>
        <input type="number" id="deltaT" name="deltaT"/>
        <br><br>
        
        <button type="submit">Calcular
        <?php
             if (isset($_POST['deltaS'])){
            $distancia = $_POST ['deltaS'];
            $tempo = $_POST ['deltaT'];
            $resultado = $funcoes-> velocidadeMedia($distancia, $tempo); //Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
    echo "A velocidade média é $resultado km/h.";
    ?>
</body>
</html>