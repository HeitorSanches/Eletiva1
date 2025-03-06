<?php
    declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de uso de funções</h1>

    <?php
        function manipularString(string $palavra): void
        {
            echo "A palavra possui " . strlen($palavra) . " caracteres.<br>";
            echo "Letra 'A' substituída por '4': " . str_replace("a", "4", $palavra) . "<br>";
        }

        function gerarValorAleatorio(int $inicial, int $final): int
        {
            return rand($inicial, $final);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $palavra = $_POST['palavra'];
                manipularString(strtolower($palavra));
                
                $valor = gerarValorAleatorio(1, 20);
                echo "O valor gerado foi: $valor<br>";
                
                $numero = 3.55555;
                echo "<p>Mostrando duas casas decimais: " . number_format($numero, 2, ",", ".") . "</p>";
            } catch (Exception $e) {
                echo "Ocorreu um erro: " . $e->getMessage();
            }
        }
    ?>
    
</body>
</html>
