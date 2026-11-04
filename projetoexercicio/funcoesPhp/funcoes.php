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
    
        public function delta(int $a, int $b, int $c){
            $delta = pow($b,2)-4*$a*$c;
            return $delta;
        }//Fim do metodo Delta

        public function calcularX1X2(int $a, int $b, int $c){
            $del = $this->delta($a,$b,$c);    
            if ($del < 0){
                    return "Impossível calcular X1 e X2, delta negativo!";
                }else{
                    $x1 = (-$b + sqrt($del))/2*$a;
                    $x2 = (-$b - sqrt($del))/2*$a;
                    return "X1 = $x1 <br><br> X2 = $x2";
                }
        }//Fim do método 



        public function exibirDobro(int $num1){
            $this->resultado = $num1 * 2;
            return $this->resultado;

        }//Fim do método

        public function calcularMedia(int $num1, int $num2, int $num3){
            $soma = $num1 + $num2 + $num3;
            $this->resultado = $soma / 3;
            return $this->resultado;
        }
    }//Fim da Classe



?>