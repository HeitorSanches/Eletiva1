<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resp_array.php" method="post">
        <?php for($i=0; $i<10;$i++): ?>
            <input type="number"/>

        <?php endfor;?>


        <?php for($i=0; $i<10;$i++)
        {
            echo '<input type="number">';
        }
        ?>
    

    </form>
    
</body>
</html>