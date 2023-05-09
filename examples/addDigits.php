<?php

function addDigits($number)
{
    if ($number < 0) {
        exit('Number must not be negative!');
    }
    $stringedNumber = (string)($number);
    $tempResult = 0;
    $i = 0;
    while ($i < strlen($stringedNumber)) {
        $tempResult += (int)($stringedNumber[$i]);
        $i += 1;
    }
    $result = $tempResult;
    if ($result > 9) {
        return addDigits($result);
    }
    return $result;
}


//print_r(addDigits(3277));
//1
