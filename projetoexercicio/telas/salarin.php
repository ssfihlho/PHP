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
    <title>Calcular Média</title>

</head>
<body>
    <h1>Informe os números : </h1>
    <form method="POST">
        <label>Qual o valor da sua hora trabalhada?</label>
        <input type="number" id="valorHora" name="valorHora" step="any"/>
        <br><br>
        
        <label>Quantas horas você trabalha por dia?</label>
        <input type="number" id="horasTrabalhadas" name="horasTrabalhadas"/>
        <br><br>
        <label>Quantos dias no mês?</label>
        <input type="number" id="diasTrabalhados" name="diasTrabalhados"/>
        <br><br>
   
        <button type="submit">Calcular
         <?php
             if (isset($_POST['valorHora'])){
            $valorDaHora = $_POST ['valorHora'];
            $hora = $_POST ['horasTrabalhadas'];
            $dias = $_POST ['diasTrabalhados'];
            $resultado = $funcoes->salarioMensal($valorDaHora, $hora, $dias); //Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
    echo "Seu salário mensal é de: R$$resultado.";
    ?>
</body>
</html>