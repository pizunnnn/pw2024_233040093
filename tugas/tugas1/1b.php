<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1b.php</title>
</head>
<body>
    <?php
        $angka = 93;

        echo "Saya adalah" . " <b>" . ($angka);
        echo "<br></b>";
        
        echo "Jika aku dikali 5, maka aku sekarang menjadi" . " <b>" . ($angka * 5);
        echo "<br></b>";
        
        echo "Jika aku dibagi 2, maka aku sekarang menjadi" . " <b>" . ($angka * 5 / 2);
        echo "<br></b>";
        
        echo "Jika aku ditambah 93, maka aku sekarang menjadi" . " <b>" . ($angka * 5 / 2 + 93);
        echo "<br></b>";
        
        echo "Jika aku dikurangi 20, maka aku sekarang menjadi" . " <b>" . ($angka * 5 / 2 + 93 - 20);
        
        ?>
</body>
</html>