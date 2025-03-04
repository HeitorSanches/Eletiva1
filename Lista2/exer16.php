<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="d-flex justify-content-center align-items-center vh-100">


  <form method="post" action="exer16resposta.php">
                        
                        <div class="mb-3">
                            <label for="preco" class="form-label">Informe o preco:</label>
                            <input type='number' id="preco" name="preco" class="form-control" required="" step="0.01">
                        </div>

                        <div class="mb-3">
                            <label for="desconto" class="form-label">Informe o percentual desconto:</label>
                            <input type="number" id="desconto" name="desconto" class="form-control" required="" step="0.01">
                        </div>

                    <button type="submit" class="btn btn-primary">Calcular</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>