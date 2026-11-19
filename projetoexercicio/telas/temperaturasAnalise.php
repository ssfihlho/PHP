<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php"); // Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes; // Acessando a classe

    $funcoes = new Funcoes(); // Criando um vínculo com a classe Funcoes
    $resultado = null;
    $temperaturas = [];

    // Processamento do formulário antes de renderizar o HTML
    if (isset($_POST['temperaturas']) && is_array($_POST['temperaturas'])) {
        $temperaturas = $_POST['temperaturas'];

        ob_start();
        $retorno = $funcoes->analisarTemperaturas($temperaturas); // Utilizando o método da classe Funcoes
        $saidaEcho = ob_get_clean();

        $resultado = ($retorno !== null && $retorno !== "") ? $retorno : $saidaEcho;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise de Temperaturas - Aprendendo PHP</title>
    
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
                            Repetição • Exercício 08
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-7">
                
                <!-- Cabeçalho do Card -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-primary">Repetição • Exercício 08</span>
                    <a href="../2lista.php" class="btn btn-sm btn-outline-secondary">← Voltar para a lista</a>
                </div>

                <!-- Card do Formulário -->
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
                            <div>
                                <h1 class="h4 card-title mb-1">Análise de Temperaturas</h1>
                                <p class="text-muted small mb-0">Informe as 7 temperaturas registradas (em °C) para análise.</p>
                            </div>
                            <button type="button" id="btnSimularTemp" class="btn btn-sm btn-outline-info">
                                Simular temperaturas
                            </button>
                        </div>

                        <form method="POST" action="">
                            <!-- Grade responsiva com sufixo °C usando input-group do Bootstrap -->
                            <div class="row g-3 mb-4">
                                <?php for ($i = 0; $i < 7; $i++): ?>
                                    <div class="col-12 col-sm-6">
                                        <label for="temp_<?= $i ?>" class="form-label fw-semibold mb-1">
                                            Temperatura <?= $i + 1 ?>:
                                        </label>
                                        <div class="input-group">
                                            <input 
                                                type="number" 
                                                step="any" 
                                                class="form-control campo-temp" 
                                                id="temp_<?= $i ?>" 
                                                name="temperaturas[]" 
                                                value="<?= isset($temperaturas[$i]) ? htmlspecialchars((string)$temperaturas[$i]) : '' ?>" 
                                                placeholder="Ex: 24.5" 
                                                required
                                            >
                                            <span class="input-group-text">°C</span>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end border-top pt-3">
                                <a href="temperaturasAnalise.php" class="btn btn-outline-secondary">Limpar</a>
                                <button type="submit" class="btn btn-primary px-4">Calcular</button>
                            </div>
                        </form>

                        <!-- Exibição do Resultado -->
                        <?php if ($resultado !== null && $resultado !== ""): ?>
                            <div class="alert alert-success mt-4 mb-0" role="alert">
                                <h2 class="h6 alert-heading fw-bold mb-2">Resultado da Análise:</h2>
                                <div class="p-3 bg-white rounded border text-dark">
                                    <?= $resultado ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-light border text-muted mt-4 mb-0 small" role="alert">
                                Preencha os 7 campos acima e clique em <strong>Calcular</strong>.
                            </div>
                        <?php endif; ?>

                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Script auxiliar para preencher temperaturas de teste (entre 10°C e 38°C) -->
    <script>
        document.getElementById('btnSimularTemp').addEventListener('click', () => {
            document.querySelectorAll('.campo-temp').forEach(input => {
                input.value = (Math.random() * 28 + 10).toFixed(1);
            });
        });
    </script>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>