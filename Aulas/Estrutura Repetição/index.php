<?php

    $idade = 20;
    if ($idade >= 18)
        echo "Você é maior de idade!";
    else
    {
        echo "Você é menor de idade!";
    }

    $mês = 1;
    switch($mes)
    {
        case 1:
            echo "Janeiro";
            break;
        case 2:
            echo "Fevereiro";
            break;
        default:
            echo "Nenhuma das opções!";
    }

    echo $idade > 18 ? 'Maior de idade' : 'Menor de idade'; /// operador ternário

    $i = 1;
    while ($i <=10)
    {
        echo "$i<br>";
        $i++;
    }

    do {
        echo "$i<br>";
        $i++;
    } while ($i <=10);


    for ($i=0; $i<10; $i++)
    {
        echo "$i<br/>";
        
    }

?>



