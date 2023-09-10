<?php

/*
 * Contoh function dibuat dalam kondisi IF.
 * */

//$if_function = true;
$if_function = false;

if($if_function){
    function sayHello(){
        echo "Halo World";
    }
} else {
    function sayHello(){
        echo "Contoh Gagal execution";
    }
}

sayHello();