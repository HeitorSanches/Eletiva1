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
            $titulo = $_POST['titulo'];
            $qtd = $_POST['qtd'];

            for ($i = 0; $i < count($titulo); $i++) {
                $posicao = $titulo[$i];
                $a[$posicao] = $qtd[$i];
            }

            foreach ($a as $chave => &$valor) // Passagem por referência
                    if($valor < 5)
                    {
                        echo "<p> O livro $chave tem menos de 5 unidades no estoque ($valor unidades) </p>";
                    }
                   
            


                                
        } catch (Exception $e) {
            echo "<div class='alert alert-danger'>Erro: " . $e->getMessage() . "</div>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
