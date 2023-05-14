<?php

function isHappy($str)
{
    if (strlen($str) % 2) {
        return false;
    }
    $leftPartSum = 0;
    $rightPartSum = 0;
    for ($i = 0; $i < (strlen($str) / 2); $i += 1) {
        $leftPartSum += (int)$str[$i];
        $rightPartSum += (int)$str[-$i - 1];
    }
    return $leftPartSum === $rightPartSum;
}

//var_dump(isHappy('054702'));
//true
