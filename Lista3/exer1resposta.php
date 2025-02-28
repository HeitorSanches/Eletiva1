<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do exercício 1</h1>

    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {

    
        $valor1 = $_POST['valor1'];
        $menor_valor = $valor1;
        $pos_menor = 0;
       
        $valor2 = $_POST['valor2'];
        if($valor2 < $menor_valor)
        {
            $menor_valor = $valor2;
            $pos_menor = 1;
        }

    

        $valor3 = $_POST['valor3'];
        if($valor3 < $menor_valor)
        {
            $menor_valor = $valor2;
            $pos_menor = 2;
        }


        $valor4 = $_POST['valor4'];
        if($valor4 < $menor_valor)
        {
            $menor_valor = $valor4;
            $pos_menor = 3;
        }


        $valor5 = $_POST['valor5'];
        if($valor5 < $menor_valor)
        {
            $menor_valor = $valor5;
            $pos_menor = 4;
        }


        $valor6 = $_POST['valor6'];
        if($valor6 < $menor_valor)
        {
            $menor_valor = $valor6;
            $pos_menor = 5;
        }


        $valor7 = $_POST['valor7'];
        if($valor7 < $menor_valor)
        {
            $menor_valor = $valor7;
            $pos_menor = 6;
        }


        echo "O menor valor é $menor_valor e se econtra na posicao $pos_menor";


    

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>