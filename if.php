<?php

$nama_satu = "Ayana Shahab";
$nilai = 70;
$absen = 80;

if ($nilai >= 70 && $absen >= 90){
    echo "Hore! anda lulus $nama_satu".PHP_EOL;
}

elseif ($nilai >=60 && $absen >= 70){
    echo "Oke Selamat $nama_satu".PHP_EOL;
} else {
    echo "Maaf, anda harus ulang lagi $nama_satu".PHP_EOL;
}

?>