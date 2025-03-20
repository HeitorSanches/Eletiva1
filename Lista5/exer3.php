<?php
declare(strict_types=1);
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container mt-5">

    <h2 class="text-center mb-4">Cadastro de Produtos</h2>

    <form method="post" action="exer3resposta.php">
        
        <?php for ($i = 0; $i < 2; $i++): ?>
            <div class="border p-4 mb-4 rounded shadow-sm">
                <h4 class="text-center mb-3">Produto <?= $i + 1 ?></h4>

                <div class="mb-2">
                    <label for="cod" class="form-label">Código:</label>
                    <input type="number" id="cod" name="cod[]" class="form-control" required>
                </div>

                <div class="mb-2">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" id="nome" name="nome[]" class="form-control" required>
                </div>

                <div class="mb-2">
                    <label for="preco" class="form-label">Preço:</label>
                    <input type="number" id="preco" name="preco[]" class="form-control" step="0.01" required>
                </div>

            </div>
        <?php endfor; ?>

        <button type="submit" class="btn btn-primary w-100">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
