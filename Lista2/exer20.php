<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="d-flex justify-content-center align-items-center vh-100">


  <form method="post" action="exer20resposta.php">
                        
                        <div class="mb-3">
                            <label for="distancia" class="form-label">Informe a distancia:</label>
                            <input type='number' id="distancia" name="distancia" class="form-control" required="" >
                        </div>

                        <div class="mb-3">
                            <label for="tempo" class="form-label">Informe o tempo:</label>
                            <input type='number' id="tempo" name="tempo" class="form-control" required="" >
                        </div>


                    <button type="submit" class="btn btn-primary">Calcular</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>