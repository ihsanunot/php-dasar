<?php

$nama = "Ayana Shahab";

echo "Nama: " . $nama . PHP_EOL;
echo "Nilai ". 93 . "\n";

$nama_kedua = "Mona Nabilah";

echo "Nama:" . $nama_kedua . PHP_EOL;
echo "Nilai ". 100 . "\n";

// Konversi numbe dan string

$nilaiString = (string)100;
var_dump($nilaiString);

$nilaiInt = (int)"100";
var_dump($nilaiInt);

$nilaiFloat = (float)"3.14";
var_dump($nilaiFloat);

// Akses Karakter
echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;
echo $nama[3] . PHP_EOL;
echo $nama[4] . PHP_EOL;

// Variabel Parsing
//echo $nama[4] . PHP_EOL;

// Kode Curly Branch
$contoh_variabel = "Ini cuman contoh my brother";
echo "ini adalah ${contoh_variabel}'s yah".PHP_EOL;

?>