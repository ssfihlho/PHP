<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php"); // Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes; // Acessando a classe

    $funcoes = new Funcoes(); // Criando um vínculo com a classe Funcoes
    $resultado = null;
    $erro = "";
    $num1 = "";
    $num2 = "";

    // Processamento do formulário antes de renderizar o HTML
    if (isset($_POST['primeiroNumero']) && isset($_POST['segundoNumero'])) {
        $num1 = (float) $_POST['primeiroNumero'];
        $num2 = (float) $_POST['segundoNumero'];

        if ($num2 == 0) {
            $erro = "Não é possível dividir por zero. Informe um divisor diferente de 0.";
        } else {
            ob_start();
            $retorno = $funcoes->dividirDoisNumeros($num1, $num2); // Utilizando o método da classe Funcoes
            $saidaEcho = ob_get_clean();

            $resultado = ($retorno !== null && $retorno !== "") ? $retorno : $saidaEcho;
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dividir - Aprendendo PHP</title>
    
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
                                <a class="nav-link active" aria-current="page" href="../1lista.php">1ª Lista de exercícios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../2lista.php">2ª Lista de exercícios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../3lista.php">3ª Lista de exercícios</a>
                            </li>
                        </ul>
                        <span class="navbar-text text-secondary">
                            1ª Lista • Exercício 04
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                
                <!-- Cabeçalho do Card -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-primary">1ª Lista • Exercício 04</span>
                    <a href="../1lista.php" class="btn btn-sm btn-outline-secondary">← Voltar para a lista</a>
                </div>

                <!-- Card do Formulário -->
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h1 class="h4 card-title mb-4">Informe os valores que deseja dividir:</h1>

                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="primeiroNumero" class="form-label fw-semibold">Primeiro número (dividendo):</label>
                                <input type="number" step="any" class="form-control form-control-lg" id="primeiroNumero" name="primeiroNumero" value="<?= htmlspecialchars((string)$num1) ?>" placeholder="Ex: 20" required>
                            </div>

                            <div class="mb-4">
                                <label for="segundoNumero" class="form-label fw-semibold">Segundo número (divisor):</label>
                                <input type="number" step="any" class="form-control form-control-lg" id="segundoNumero" name="segundoNumero" value="<?= htmlspecialchars((string)$num2) ?>" placeholder="Ex: 4" required>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="dividir.php" class="btn btn-outline-secondary">Limpar</a>
                                <button type="submit" class="btn btn-primary px-4">Dividir</button>
                            </div>
                        </form>

                        <!-- Alerta de Erro (Divisão por zero) -->
                        <?php if ($erro !== ""): ?>
                            <div class="alert alert-warning mt-4 mb-0" role="alert">
                                <strong>Atenção:</strong> <?= $erro ?>
                            </div>
                        <?php endif; ?>

                        <!-- Exibição do Resultado -->
                        <?php if ($resultado !== null && $resultado !== ""): ?>
                            <div class="alert alert-success mt-4 mb-0" role="alert">
                                <strong>Resultado:</strong> A divisão de <strong><?= $num1 ?></strong> ÷ <strong><?= $num2 ?></strong> é igual a <span class="fs-5 fw-bold"><?= $resultado ?></span>.
                            </div>
                        <?php endif; ?>

                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>