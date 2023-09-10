<?php

$nama ="Ayana";

$namaLain = &$nama;
$namaLain = "Mona";

echo $nama . PHP_EOL;

// pass by reference

function increment(int &$value){
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;
