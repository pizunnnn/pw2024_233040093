<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2a.php</title>
    <link rel="stylesheet" href="./2a.css">
</head>
<body>

    <?php

        for ( $i = 1; $i <= 10; $i++){

            for ($j = 1; $j < $i; $j++){

                echo $j . " ";

            }

            echo $i . " <br>";
            
        }

    ?>

</body>

</html>