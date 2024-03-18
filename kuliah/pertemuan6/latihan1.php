<?php
// 1. Membuat Array
$hari = array ("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mahasiswa = ["Dzikry", 2.5, false];


// 2. Mencetak isi Array
// Mencetak 1 elemen pada Array, menggunakan index
echo $hari[2];
echo "<br>";
echo $bulan[0];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// MEncetak seluruh isi array
// DIgunakan khusus untuk debugging
// var_dump() atau print_r()
var_dump($hari);
echo"<br>";
print_r($bulan);
echo"<br>";
var_dump($mahasiswa);
echo "<hr>";

// 3. Memanipulasi Array
// Menambah isi array
// di akhir array: [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";

// Di awal array : array_unshift()
array_unshift($mahasiswa, "233040093");
print_r($mahasiswa);
echo "<hr>";

// Menghapus isi array
// Di akhir: array_pop();
// Di awal : array_shift();
array_pop($hari);
print_r($hari);
echo "<br>";
array_pop($bulan);
print_r($bulan);

