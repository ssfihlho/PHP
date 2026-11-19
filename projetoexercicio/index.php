<?php
    namespace projetoexercicio\Exercicios; // Projeto - Determina o Caminho
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Aprendendo PHP</title>
    
    <!-- Bootstrap 5.3 CSS (Versão Estável) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Seu CSS personalizado (sempre depois do Bootstrap para poder sobrescrever estilos) -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-light">

    <header>
        <!-- Navbar escura com expansão em telas médias (md) -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="index.php">Aprendendo PHP!</a>
                
                <!-- Botão Hambúrguer para celular -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral" aria-controls="menuLateral" aria-label="Abrir navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu Lateral (Offcanvas) no mobile / Barra normal no desktop -->
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
                            Módulo 1 • Fundamentos
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-4">
        <!-- Banner responsivo -->
        <figure id="banner" class="text-center mb-5">
            <img src="imagens/banner.jpg" class="img-fluid rounded shadow" alt="Banner aprendendo PHP!">
        </figure>

        <!-- Área de atalho rápido para as listas -->
        <section class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">1ª Lista de Exercícios</h5>
                        <p class="card-text text-muted">Variáveis, operadores matemáticos e estruturas básicas.</p>
                        <a href="1lista.php" class="btn btn-primary">Acessar lista</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">2ª Lista de Exercícios</h5>
                        <p class="card-text text-muted">Estruturas condicionais (if/else, switch) e lógica.</p>
                        <a href="2lista.php" class="btn btn-outline-primary">Acessar lista</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">3ª Lista de Exercícios</h5>
                        <p class="card-text text-muted">Laços de repetição (for, while) e arrays.</p>
                        <a href="3lista.php" class="btn btn-outline-primary">Acessar lista</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Bootstrap 5.3 JS Bundle (sempre no final do body) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>