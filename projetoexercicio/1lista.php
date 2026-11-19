<?php
    namespace projetoexercicio\Exercicios; // Projeto - Determina o Caminho
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1ª Lista de Exercícios - Aprendendo PHP</title>
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Seu CSS personalizado -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-light">

    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="index.php">Aprendendo PHP!</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral" aria-controls="menuLateral" aria-label="Abrir navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="menuLateral" aria-labelledby="menuLateralLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="menuLateralLabel">Introdução</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="1lista.php">1ª Lista de exercícios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="2lista.php">2ª Lista de exercícios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="3lista.php">3ª Lista de exercícios</a>
                            </li>
                        </ul>
                        <span class="navbar-text text-secondary">
                            1ª Lista • 24 exercícios
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-4">
        <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
            <div>
                <h1 class="h2 mb-1">Bem-Vindo à 1ª Lista!</h1>
                <p class="text-muted mb-0">Selecione um exercício abaixo para executar.</p>
            </div>
            <a href="index.php" class="btn btn-sm btn-outline-secondary">Voltar ao início</a>
        </div>

        <!-- Grade responsiva: 1 coluna no celular, 2 no tablet, 3 no desktop -->
        <div id="lista1" class="row g-3">
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/somar.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">01</span> Somar
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/subtrair.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">02</span> Subtrair
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/multiplicar.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">03</span> Multiplicar
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/dividir.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">04</span> Dividir
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/bhaskara.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">05</span> Bhaskara
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/dobro.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">06</span> Ler um número e exibir o dobro
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/calcularMediaDe3Nums.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">07</span> Calcular Média
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/raizQuadrada.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">08</span> Calcular Raiz Quadrada
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/conversorMetros.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">09</span> Converter Metros em Centímetros
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/areaRaio.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">10</span> Calcular a área do círculo com base no raio
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/ConverterCelsius.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">11</span> Converter Celsius em Fahrenheit
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/descontoSerasa.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">12</span> Aplicar 10% de desconto num produto
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/idadeEmmeses.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">13</span> Exibir idade em meses
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/impaPa.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">14</span> Par ou Ímpar
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/areaTriangulo.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">15</span> Ache a área de um triângulo utilizando a base e a altura
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/retangulo.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">16</span> Ache o volume de uma caixa retangular
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/cuboQuadrado.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">17</span> Descubra o cubo e o quadrado de um número
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/impoxto.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">18</span> Adicionar 18% de imposto sobre um valor
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/velo.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">19</span> Leia a distância e o tempo, e calcule a velocidade média
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/mediaDoisNum.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">20</span> Calcular média de dois números
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/salarin.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">21</span> Calcular salário mensal
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/idadeAnoDias.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">22</span> Exibir idade em dias
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/tempoDeVidaRestante.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">23</span> Exibir tempo de vida restante até os 100 anos
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="telas/somaEMedia.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">24</span> Calcular Média e Soma
                </a>
            </div>
        </div>
    </main>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>