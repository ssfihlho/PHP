<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php"); // Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes; // Acessando a classe

    $funcoes = new Funcoes(); // Criando um vínculo com a classe Funcoes
    $resultado = null;
    $numeros = [];

    if (isset($_POST['numeros']) && is_array($_POST['numeros'])) {
        $numeros = $_POST['numeros'];

        ob_start();
        $retorno = $funcoes->contarNumerosPares($numeros); // Utilizando o método da classe Funcoes
        $saidaEcho = ob_get_clean();

        $resultado = ($retorno !== null && $retorno !== "") ? $retorno : $saidaEcho;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Números Pares - Aprendendo PHP</title>
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Seu CSS personalizado -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="bg-light">

    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="../index.php">Aprendendo PHP!</a>
                
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
                                <a class="nav-link" href="../1lista.php">1ª Lista de exercícios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../2lista.php">2ª Lista de exercícios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../3lista.php">3ª Lista de exercícios</a>
                            </li>
                        </ul>
                        <span class="navbar-text text-secondary">
                            Repetição • Exercício 05
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                
                <!-- Cabeçalho do Card -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-primary">Repetição • Exercício 05</span>
                    <a href="../2lista.php" class="btn btn-sm btn-outline-secondary">← Voltar para a lista</a>
                </div>

                <!-- Card do Formulário -->
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
                            <div>
                                <h1 class="h4 card-title mb-1">Contar números pares</h1>
                                <p class="text-muted small mb-0">Preencha os 20 números inteiros abaixo para verificar quantos são pares.</p>
                            </div>
                            <button type="button" id="btnPreencherTeste" class="btn btn-sm btn-outline-info">
                                Preencher aleatórios
                            </button>
                        </div>

                        <form method="POST" action="">
                            <!-- Grade compacta: 2 colunas no mobile, 3 no tablet, 4 no desktop -->
                            <div class="row g-3 mb-4">
                                <?php for ($i = 0; $i < 20; $i++): ?>
                                    <div class="col-6 col-sm-4 col-md-3">
                                        <label for="num_<?= $i ?>" class="form-label small fw-semibold mb-1">
                                            Número <?= $i + 1 ?>:
                                        </label>
                                        <input 
                                            type="number" 
                                            step="1"
                                            class="form-control campo-numero" 
                                            id="num_<?= $i ?>" 
                                            name="numeros[]" 
                                            value="<?= isset($numeros[$i]) ? htmlspecialchars((string)$numeros[$i]) : '' ?>" 
                                            required
                                        >
                                    </div>
                                <?php endfor; ?>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end border-top pt-3">
                                <a href="forNumPar.php" class="btn btn-outline-secondary">Limpar</a>
                                <button type="submit" class="btn btn-primary px-4">Calcular</button>
                            </div>
                        </form>

                        <!-- Exibição do Resultado -->
                        <?php if ($resultado !== null && $resultado !== ""): ?>
                            <div class="alert alert-success mt-4 mb-0" role="alert">
                                <strong>Resultado:</strong> <?= $resultado ?>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-light border text-muted mt-4 mb-0 small" role="alert">
                                Preencha todos os 20 campos acima e clique em <strong>Calcular</strong>.
                            </div>
                        <?php endif; ?>

                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Script auxiliar para testar rápido sem precisar digitar 20 números na mão -->
    <script>
        document.getElementById('btnPreencherTeste').addEventListener('click', () => {
            document.querySelectorAll('.campo-numero').forEach(input => {
                input.value = Math.floor(Math.random() * 100) + 1;
            });
        });
    </script>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>