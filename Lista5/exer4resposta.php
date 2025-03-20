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

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        try {
            $a = array();
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];

            for ($i = 0; $i < count($nome); $i++) {
                $posicao = $nome[$i];
                $a[$posicao] = $preco[$i];
            }

            foreach ($a as $chave => &$valor) // Passagem por referência
                    $valor += $valor * 0.15;
                   
            arsort($a);
            
            foreach ($a as $chave => $valor)
                echo"<p>$chave ---- $valor<p> ";

                                
        } catch (Exception $e) {
            echo "<div class='alert alert-danger'>Erro: " . $e->getMessage() . "</div>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
