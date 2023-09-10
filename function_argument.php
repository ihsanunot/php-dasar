<?php /** @noinspection ALL */

/*
 * Func argument dgn default wajib di akhir
 * */
function sayHi($nama, $umur): string
{
    return "Hi, nama saya $nama, saya berusia $umur.";
}

var_dump(sayHi("Ayana", 28));

/*
 * Type Declaration
 * */

function hitung(int $awal, int $akhir){
    $hasil = $awal + $akhir;
        echo "Total $awal + $akhir = $hasil".PHP_EOL;
}

hitung(120,140);

/*
 * Variabel length Argument List
 * posisi nya wajib yang paling akhir*/

function sumAll(...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total".implode(",", $values)."= $total"  .PHP_EOL;
}

sumAll(10,20,30,40,50);