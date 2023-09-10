<?php

$nama_satu = [
    "nama_depan" => "Ayana"
];

$nama_kedua = [
    "nama-belakang" => "Shahab"
];

// array or var utama lah yang di utamakan
$nama_lengkap = $nama_satu + $nama_kedua;

var_dump($nama_lengkap);


/*
 * CONTOH OPERATOR ARRAY KEDUA
 * */

$a = [
    "first_name" => "Mona",
    "last_name" => "Nabilah"
];

$b = [
    "last_name" => "Nabilah",
    "first_name" => "Mona"
];

var_dump($a == $b);
var_dump($a === $b);

?>