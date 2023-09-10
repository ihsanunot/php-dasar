<?php

// kalau data nya array pakai foreach

$namas = ["Ayana","Mona","Balqis"];

foreach ($namas as $nama){
    echo "Hello $nama".PHP_EOL;
}

$orang = [
    "nama_depan" => "Ayana",
    "nama_belakang" => "Shahab",
    "nama_akhir" => "Balqis"
];

// kalau butuh index baru pakai $kunci, kalau tanpa index hapus aja index nya langsung ke $nilai

foreach ($orang as $kunci => $nilai){
    echo  "Data $kunci : $nilai" .PHP_EOL;
}