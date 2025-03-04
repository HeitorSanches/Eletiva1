<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="d-flex justify-content-center align-items-center vh-100">

  <div class="text-center border p-4 rounded shadow bg-light">
    <h1>Resposta do exercício 4</h1>

    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {

    
        $valor = $_POST['valor'];
        
        if ($valor > 100)
        {
            $novo_valor = $valor - ($valor * 0.15);
            echo "O produto é acima de $100, vc ganhou um desconto!";
            echo "O produto irá sair por $novo_valor";
        }

        else
        {
            echo "O valor do produto é $valor";
        }

        

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>

  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
