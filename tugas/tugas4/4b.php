<?php

$hardware = ["CPU", "RAM", "Harddisk", "SSD", "GPU", "Motherboard"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head> 
<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php
    
        foreach( $hardware as $item ):
            echo "<li>$item</li>";
        endforeach;
    
        ?>
    </ol>
    <h3>Macam-macam perangkat keras komputer baru</h3>
    <ol>
        <?php
            array_push($hardware, "Soundcard", "WiFi Card");
            sort($hardware);
            foreach ($hardware as $value):
                echo "<li>$value</li>";
            endforeach;
                
        ?>
    </ol>
</body>
</html>