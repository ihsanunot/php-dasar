<?php

function contohRecursive(int $value): int{
    if ($value == 1){
        return  1;
    } else {
        return $value * contohRecursive($value -1);
    }
}

var_dump(contohRecursive(6));