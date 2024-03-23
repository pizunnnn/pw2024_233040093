<?php
    function urutanAngka($angka) {
        $num = 1;
        for ( $i = 0; $i <= $angka; $i++){
            for ( $j = 0; $j < $i; $j++){
                echo $num . " ";
                $num++;
            }
            echo "<br>";
        }
    }
    return urutanAngka(5);