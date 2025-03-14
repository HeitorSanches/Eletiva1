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

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            try{
                $a = array(); 
                $nome = $_POST['nome'];
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $n3 = $_POST['n3'];

                for($i=0;$i<5;$i++)
                {
                    $posicao = $nome[$i];
                    $media = ($n1[$i]+$n2[$i]+$n3[$i])/3;
                    $a[$posicao] = $media;
                }

               arsort($a);

                foreach($a as $nome  => $media)
                {
                    echo "<p>Nome : $nome - Média : $media <p>";
                }



            } catch (Exception $e){
                echo $e->getMessage();
            }
        } 

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>