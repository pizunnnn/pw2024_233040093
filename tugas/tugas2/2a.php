<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $namaDepan = "Dzikry";
        $namaBelakang = "Maulana ilham";

        for($angka = 1; $angka <= 100; $angka++){

            if ( $angka % 3 == 0 ) {

                echo $namaDepan . "<br>" ;

            } elseif ( $angka % 5 == 0 ) {

                echo $namaBelakang . "<br>";

            } else {

                echo $angka . "<br>";

            }
        }
    ?>
</body>
</html>