<?php
    namespace projetoexercicio\Exercicios; // Projeto - Determina o Caminho
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercícios de Repetição - Aprendendo PHP</title>
    
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
                                <a class="nav-link" href="1lista.php">1ª Lista de exercícios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="2lista.php">2ª Lista de exercícios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="3lista.php">3ª Lista de exercícios</a>
                            </li>
                        </ul>
                        <span class="navbar-text text-secondary">
                            Repetição • 8 exercícios
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-4">
        <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-2">
            <div>
                <h1 class="h2 mb-1">Lista de Exercícios de Repetição</h1>
                <p class="text-muted mb-0">Laços <code>for</code>, <code>while</code> e <code>do-while</code> na prática.</p>
            </div>
            <a href="index.php" class="btn btn-sm btn-outline-secondary">Voltar ao início</a>
        </div>

        <!-- Grade responsiva: 1 coluna no celular, 2 no tablet/desktop -->
        <div id="listaRepeticao" class="row g-3">
            <div class="col-12 col-md-6">
                <a href="telas/crescenteContagem.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">01</span> Contagem Crescente
                </a>
            </div>
            <div class="col-12 col-md-6">
                <a href="telas/regressivaContagem.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">02</span> Contagem Decrescente
                </a>
            </div>
            <div class="col-12 col-md-6">
                <a href="telas/nSoma.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">03</span> Soma dos números de 1 até N
                </a>
            </div>
            <div class="col-12 col-md-6">
                <a href="telas/7multiplos.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">04</span> Múltiplos de 7
                </a>
            </div>
            <div class="col-12 col-md-6">
                <a href="telas/forNumPar.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">05</span> Contar números pares
                </a>
            </div>
            <div class="col-12 col-md-6">
                <a href="telas/tabu.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">06</span> Tabuada
                </a>
            </div>
            <div class="col-12 col-md-6">
                <a href="telas/media8.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">07</span> Média 8
                </a>
            </div>
            <div class="col-12 col-md-6">
                <a href="telas/temperaturasAnalise.php" class="btn btn-white bg-white border shadow-sm w-100 h-100 p-3 text-start d-flex align-items-center">
                    <span class="badge bg-primary me-3">08</span> Análise de temperaturas
                </a>
            </div>
        </div>
    </main>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>