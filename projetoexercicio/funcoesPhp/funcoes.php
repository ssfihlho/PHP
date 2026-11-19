<?php
    namespace Projeto\Exercicios\funcoesPhp;

    Class Funcoes{
        private float $num1;
        private float $num2;
        private float $resultado;

        //Criando um construtor para instanciar as variaveis
        public function __construct(){
            $this->num1      = 0;
            $this->num2      = 0;
            $this->resultado = 0;

        }//Fim do construtor

        //Métodos de acesso e modificadores
        public function __get(string $dado):mixed
        {
            return $this->dado;    

        }//Fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;

        }//Fim do set

        public function somarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 + $num2;
            return $this->resultado;
        }//Fim do método SOMAR

        public function subtrairDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 - $num2;
            return $this->resultado;
        }//Fim do método SUBTRAIR  
    
        public function multiplicarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 * $num2;
            return $this->resultado;
        }//Fim do método MULTIPLICAR

        public function dividirDoisNumeros(float $num1, float $num2){
           if($num2 <=0){
            return "Impossível dividir por zero!";
           }else{
            $this->resultado = $num1 / $num2;
            return $this->resultado;
            }
        }//Fim do método DIVIDIR
    
     public function delta(int $a, int $b, int $c) {
        $delta = pow($b, 2) - 4 * $a * $c;
        return $delta;
    }

    public function calcularX1X2(int $a, int $b, int $c) {

        if ($a == 0) {
            return "O valor de A não pode ser zero!";
        }

        $delta = $this->delta($a, $b, $c);

        if ($delta < 0) {
            return "Impossível calcular X1 e X2, delta negativo!";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);

            return "X1 = $x1 <br><br> X2 = $x2";
        }
    }



        public function exibirDobro(int $num1){
            $this->resultado = $num1 * 2;
            return $this->resultado;

        }//Fim do método

        public function calcularMedia(int $num1, int $num2, int $num3){
            $soma = $num1 + $num2 + $num3;
            $this->resultado = $soma / 3;
            return $this->resultado;
        } //Fim do método

        public function raizQuadrada(int $num1){
            $this-> resultado = sqrt($num1);

            return $this->resultado;
        }//Fim do método Raiz Quadrada

        public function conversorMetrosCentimentros(float $num1){
            $this->resultado = $num1 * 100;
            return $this-> resultado;
        }// Fim do método 

        public function calcularAreaRaio(float $r){
        $area = M_PI*(pow($r,2));
        $this->resultado = $area;
        return $this->resultado;
            
        }//Fim do método

        public function converterCelsiusFh(float $celsius){
            $farenheit = $celsius * 1.8 + 32;
            $this->resultado = $farenheit;
            return $this->resultado;
        }//Fim do método

        public function descontoCom10(float $valor){
            $desconto = $valor * 0.1;
            $this->resultado = $valor - $desconto;
            return $this->resultado;
        }//Fim do método

        public function idadeEmMeses(int $idade){
            $this->resultado = $idade * 12;
            return $this->resultado;
        }//Fim do método

        public function numeroImpar(float $num){
            if ($num % 2 == 0){
                return "Número par!";
            }else{ return "Número impar!";}
        }//Fim do método

        public function acheTriangulo(float $base, float $altura){
            $area = ($base * $altura) / 2;
            $this->resultado = $area;
            return $this->resultado;
        }//Fim do método

        public function acheVolumeRetangulo(float $compr, float $larg, float $alt){
            $volume = $compr * $larg * $alt;
            $this->resultado = $volume;
            return $this->resultado;
        }//Fim do método

        public function quadradoCubicoDeNum(float $num){
            $qdd = pow($num,2);
            $cbc = $num ** 3;
        
            return "Quadrado: $qdd <br><br> Cubo: $cbc ";
        }//Fim do método

        public function imposto(float $preço){
            $imposto = ($preço * 0.18);
            $valorTotal = $imposto + $preço;

            return  "Foi adicionado: <strong>R$$imposto</strong> em impostos <br>
                     E o valor total da divída: <strong> R$$valorTotal. </strong>";
        }//Fim do método
        public function velocidadeMedia(float $distancia, float $tempo){
            $velocidadeM = ($distancia / $tempo);

            $this->resultado = $velocidadeM;
            return $this->resultado;
        }//Fim do método

        public function media2num(float $num1, float $num2){
            $media = ($num1 + $num2) / 2;
            $this->resultado = $media;
            return $this->resultado;
        }//Fim do método
        public function salarioMensal(float $valorDaHora, int $hora, int $dias){

            $salario = ($valorDaHora * $hora) * $dias;
            $this->resultado = $salario;
            return $this->resultado;


        }//Fim do método

        public function idadeEmDias(int $idade){
            $this->resultado = 365 * $idade;
            return $this->resultado;
        }//Fim do método

        public function tempoDeVida(int $idade){
            $this->resultado = 100 - $idade;
            return $this->resultado;
        }//Fim do método

        public function calcularMediaeSoma(int $num1, int $num2, int $num3){
            $soma = $num1 + $num2 + $num3;
            $this->resultado = $soma / 3;
            return "A soma é: $soma. <br> A média é: $this->resultado.";
        } //Fim do método

        public function contagemCrescente(int $num){
          
        for($i = 0; $i <= $num; $i++){
                echo "$i ";
            }
            echo ".";
            
        }//Fim do metodo


        public function contagemRegressiva(int $num){
            for($i= $num; $i >= 0; $i--){
                echo "$i ";
            }
        }//Fim do método

        public function somaN(int $num){
            $soma = 0;
            for($i = 1; $i <= $num;$i++){
                $soma = $soma + $i;
            }
            $this->resultado = $soma;
            return $this->resultado;

        }//Fim do método

        public function multiplosDe7(int $num){
            $resultado = "";
            for ($i = 1; $i <= 100; $i++){
                   if($i % $num == 0){
                    $resultado .= $i . "<br>";
                   }
                }
                return $resultado;
            } // Fim do método

        public function contarNumerosPares(array $numeros): string {
            $contador = 0;

            foreach ($numeros as $numero) {
                if ($numero % 2 == 0) {
                    $contador++;
                }
            }

            return "Quantidade de números pares: " . $contador;
            }

        public function tabuada(int $num) {
            $resultado = "";
    
            for($i = 1; $i <= 10; $i++) {
                $multiplicacao = $num * $i;
    
                $resultado .= "$num x $i = $multiplicacao <br>";
            }
    
            return $resultado;
        }//Fim do método tabuada

        public function mediaOitoNotas(array $notas) {
        $soma = 0;
 
        for($i = 0; $i < 8; $i++) {
            $soma += $notas[$i];
        }
 
        $media = $soma / 8;
 
        if($media >= 7) {
            return "Média: $media - Aprovado!";
        } else {
            return "Média: $media - Reprovado!";
        }
    }//Fim metodo media notas
        
        public function analisarTemperaturas(array $temperaturas) {
        $soma = 0;
        $contador = 0;

        for($i = 0; $i < 7; $i++) {
            $soma += $temperaturas[$i];

            if($temperaturas[$i] > 30) {
                $contador++;
            }
        }

        $media = $soma / 7;

        return "Média das temperaturas: $media <br>
                Dias acima de 30 graus: $contador";
    }//for 8


    
    public function somaImpares(int $num1) {
        $resultado = 0;

        for($i = 1; $i <= $num1; $i++) {
            if($i % 2 != 0) {
                $resultado += $i;
            }
        }

        return $resultado;
    }//for 9


    
    public function calcularFatorial(int $num1) {
        $resultado = 1;

        for($i = 1; $i <= $num1; $i++) {
            $resultado *= $i;
        }

        return $resultado;
    }//for 10


    
    public function somaQuadrados(int $num1) {
        $resultado = 0;

        for($i = 1; $i <= $num1; $i++) {
            $resultado += pow($i, 2);
        }

        return $resultado;
    }//for 11


    
    public function divisibilidadeTres(array $numeros) {
        $divisiveis = 0;
        $naoDivisiveis = 0;

        for($i = 0; $i < 30; $i++) {
            if($numeros[$i] % 3 == 0) {
                $divisiveis++;
            } else {
                $naoDivisiveis++;
            }
        }

        return "Divisíveis por 3: $divisiveis <br>
                Não divisíveis por 3: $naoDivisiveis";
    }// for 12


    }//Fim da Classe



?>