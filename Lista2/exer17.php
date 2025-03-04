<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="d-flex justify-content-center align-items-center vh-100">


  <form method="post" action="exer17resposta.php">
                        
                        <div class="mb-3">
                            <label for="capital" class="form-label">Informe o capital:</label>
                            <input type='number' id="capital" name="capital" class="form-control" required="" step="0.01">
                        </div>

                        <div class="mb-3">
                            <label for="taxa" class="form-label">Informe a taxa de juros:</label>
                            <input type="number" id="taxa" name="taxa" class="form-control" required="" step="0.01">
                        </div>

                        <div class="mb-3">
                            <label for="período" class="form-label">Informe o período:</label>
                            <input type="number" id="período" name="período" class="form-control" required="" step="0.01">
                        </div>

                    <button type="submit" class="btn btn-primary">Calcular</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>