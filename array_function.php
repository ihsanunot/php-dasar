<?php

$data_array = [1,2,3,4,5,6,7,8,9,10];

// merubah data array jadi semua di kali 2
//var_dump(array_map(fn($data_array) => $data_array * 2, $data_array));

//rsort($data_array);
//var_dump($data_array);

//var_dump(array_keys($data_array));
//var_dump(array_values($data_array));

$person = [
    "namaDepan" => "Ayana",
    "namaBelakang" => "Shahab"
];

var_dump(array_keys($person));
var_dump(array_values($person));