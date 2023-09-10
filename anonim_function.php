<?php

$sayHello = function(string $name){
    echo "Hello $name".PHP_EOL;
};

$sayHello("Ayana Shahab");

// contoh anonim func sebagai argument
function sayGoodbye(string $name, $filter){
    $finalName = $filter($name);
    echo "Hallo $finalName !";
}

sayGoodbye("Ayana", function (string $name){
    return strtoupper($name);
});

// mengakses variable di luar closure
$namaDepan = "Ayana";
$namaBelakang = "Shahab";

$sayHelloAyana = function () use ($namaDepan,$namaBelakang){
    echo "Hello $namaDepan $namaBelakang".PHP_EOL;
};

// CONTOH ARROW FUNCTION

$sayAgainArrow = fn() => "Ini contoh sederhana arrow Function dari $namaDepan $namaBelakang".PHP_EOL;

echo $sayAgainArrow();