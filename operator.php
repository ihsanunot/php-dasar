<?php

$hasil = 10 + 10;
var_dump($hasil);

$hasil = 100 % 3;
var_dump($hasil);

$hasil_negative = -$hasil;
var_dump($hasil_negative);

$a = 10;
$b = 20;

$c = $a+$b;
var_dump($c);

$d = $a+=$c;
var_dump($d);

// latihan 1

$total = 0;

$buah = 3000;
$ayam = 6000;
$teh_manis = 2000;


$total = $total + $buah;
$total = $total + $ayam;
$total = $total + $teh_manis;
var_dump($total);

var_dump('10' == 10);
var_dump(10 === '10');
var_dump(9 > 10);
var_dump(10 >= '10');

$logika_satu = 'contoh satu';
$logika_kedua = 'contoh kedua';

// wajib dua dua nya true
if ($logika_satu && $logika_kedua){
    echo 'hasil true  ';
} else {
    echo $logika_kedua;
}


// false jika dua dua nya false dan salah satu saja bisa true
if ($logika_satu || $logika_kedua){
    echo $logika_kedua;
} else {
    echo 'false';
}

//contoh NOT operator, true klo params satu nya nilai nya false
if(!$logika_satu){
    echo 'jadi true ';
} else {
    echo ' masih gagal not';
}

var_dump(true xor true);

/*
 * true && true
 * true && false
 * true || false
 * true xor true
 * !true
 * */


/*
 * Increment
 * */

$angka_satu = 20;
$angka_satu++;
//++$angka_satu;

$angka_dua = 30;
//$angka_dua++;
++$angka_dua;


var_dump($angka_satu);
//var_dump($angka_dua);
//var_dump($angka_satu);
var_dump($angka_dua);


?>