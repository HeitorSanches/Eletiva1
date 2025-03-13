<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Preencha os Valores</h1>
        <form action="" method="post" class="bg-white p-4 rounded shadow-sm">
            <div class="row g-3">
                <?php for ($i = 0; $i < 10; $i++): ?>
                    <div class="col-md-6">
                        <label for="valor<?= $i ?>" class="form-label">Valor <?= $i + 1 ?></label>
                        <input type="number" name="valor[]" id="valor<?= $i ?>" class="form-control" placeholder="Informe o valor <?= $i + 1 ?>" />
                    </div>
                <?php endfor; ?>
            </div>
            <div class="mt-4 text-center">
                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
            </div>
        </form>
        <div class="mt-5">
            <?php 
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    try {
                        $valores = $_POST['valor']; // Recebe todos os valores como array
                        echo "<h3 class='text-success'>Resultados:</h3>";
                        echo "<p>O primeiro valor é: <strong>{$valores[0]}</strong></p>";
                        print_r($valores);
                        $valores['texto'] = 'dados';
                        unset($valores['texto']);
                        echo "<br>";
                        print_r($valores);
                        foreach($valores as $c => $v)
                        {
                            echo "<p>Posição : $c - Valor : $v <p>";
                        }
                        $array = [10,11,12,13];
                        $array2 = array("uva", "maça","pêra");
                        $array3 = 
                        [
                            "uva" => 3,
                            "maça" => 4,
                            "pêra" => 5

                        ];


                    } catch (Exception $e) {
                        echo "<div class='alert alert-danger'>Erro: " . $e->getMessage() . "</div>";
                    }
                }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
