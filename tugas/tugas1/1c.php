<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1c.php</title>
    <link rel="stylesheet" href="./1c.css">
</head>
<body>
    <?php
        function boxPyramid() {
            for ( $i = 1; $i <= 4; $i++ ) {
                for ( $j = 1; $j < $i; $j++ ) {
                    echo "<span>$j</span>";
                }
                if ( $j = $i ) {
                    echo "</div>";
                }
                echo "<div>";
            }
        }

        boxPyramid();
    ?>
</body>
</html>