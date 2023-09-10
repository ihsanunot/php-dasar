<?php
// Example Constant

define('VERSION', '1.0.0');
const PI = 3.14;
echo "\n";
const API_KEY = 'ADdkoad24sfsfskozzkdo';

echo "\n";
echo "Konstata ".PI;
echo "\n";
echo " API KEY:  ".API_KEY;
echo "\n";
echo "VERSION ".VERSION;
echo "\n";

$isi_data = 'Contoh Null';
$isi_data = NULL;

echo $isi_data;

$nama_satu = "Mona Nabilah";
$apaNull = is_null($nama_satu);
var_dump($apaNull);

$nama_kedua = "Yuni Anastasya";
var_dump(isset($nama_kedua));

$arrayKami = ["Ironman","Rocket Man","Piano Man","Antman","Superman"];
var_dump($arrayKami);

// ambil array
var_dump($arrayKami[2]);

// ganti nilai array
$arrayKami[4] = "Batman";
var_dump($arrayKami);

// mengambil total data array
var_dump(count($arrayKami));

// contoh Map mirip Object
$contohMap = array(
    "id" => 1,
    "nama" => "Ayana Shahab",
    "umur" => 25,
    "alamat" => [
        // array di dalam array
        "kota" => "Tangerang Selatan",
        "kecamatan" => "Serpong",
        "jalan" => "Jl. Pahlawan Seribu"
]);

var_dump($contohMap);

// ambil data map key
var_dump($contohMap["nama"]);

// akses array di dalam array
var_dump($contohMap["alamat"]["kota"]);