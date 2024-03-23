<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            display: flex;
        }
        span {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            background-color: aqua;
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <?php
        for ( $i = 10; $i >= 1; $i-- ) {

            for ( $j = 10; $j >= $i; $j-- ) {

                echo "<span>$j</span>";

            }
            
            if ( $j = $i ) {

                echo "</div>";

            }

            echo "<div>";
            
        }
    ?>
</body>
</html>