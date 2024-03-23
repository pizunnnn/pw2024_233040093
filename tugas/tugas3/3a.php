<?php
        echo "<hr>";
        echo "<h4>Menghitung Luas Lingkaran</h4>";
        function menghitungLuasLingkaran($r) {
            $phi = 3.14;
            $luasLingkaran = $phi * $r * $r;
            echo "$luasLingkaran";
        }
        menghitungLuasLingkaran(10);
        
        echo "<hr>";
        echo "<h4>Menghitung Keliling Lingkaran</h4>";
        function menghitungKelilingLingkaran($r) {
            $phi = 3.14;
            $kelilingLingkaran = 2 * $phi * $r;
            echo "$kelilingLingkaran";
        }
        menghitungKelilingLingkaran(20);