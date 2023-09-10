<?php

function foo(){
    echo "Ini Contoh Variable Function".PHP_EOL;
}

// nama string function
$iniVarFunc = "foo";
// panggil si var function
$iniVarFunc();

// contoh pengunaan

function sayHello(string $name,$filter){
        $finalName = $filter($name);
        echo "Hallo $finalName !".PHP_EOL;
}

// contoh satu
sayHello("Ihsan","strtoupper");

// contoh kedua pakai function lagi

function contohFunction(string $name): string{
    return "Contoh Sample $name";
}

// panggil function di dalam function lain
sayHello("Ayana","contohFunction");