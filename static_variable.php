<?php

function pertambahan (){
    static $counter = 1;

    echo "Hasil = $counter".PHP_EOL;

    $counter++;

}

pertambahan();
pertambahan();
pertambahan();