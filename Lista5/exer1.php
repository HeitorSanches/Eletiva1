<?php

declare(strict_types=1);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <form method="post" action="">

        
        <?php for($i=0;$i<5;$i++): ?>

        <h3 class="text-center mb-4">Cadastre o contato : </h3>
        <div class="mb-2">
            <label for="nome" class="form-label">Digite o nome : </label>
            <input type="text" id="nome" name="nome[]" class="form-control" required="">
        </div>

        <div class="mb-4">
            <label for="tel" class="form-label">Digite o tel : </label>
            <input type="text" id="tel" name="tel[]" class="form-control" required="">
            
        </div>

        <?php endfor; ?>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            try{
                $a = array(); 
                $nome = $_POST['nome'];
                $tel = $_POST['tel'];
                $nomes_cadastrados = array();

                for($i=0;$i<5;$i++) 
                {
                    if (!in_array(strtolower($nome[$i]),$nomes_cadastrados))
                    {
                        $posicao = $nome[$i];
                        $a[$posicao] = $tel[$i];
                        $nomes_cadastrados[$i] = $nome[$i];
                        echo "Nome : $posicao, Telefone : $tel[$i]";
                        echo "<br>";
                    }
                    else
                    {
                        echo "Nome já cadastrado";
                        echo "<br>";
                    }
        
                }

                // foreach($nome as $c => $n)
                // {
                //     echo "<p>Posição : $c - Valor : $n <p>";
                // }

            

            } catch (Exception $e){
                echo $e->getMessage();
            }
        } 

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>