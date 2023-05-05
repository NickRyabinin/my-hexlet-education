<?php

function isPowerOfThree($number)
{
    if ($number < 1) {
        return false;
    }
    while ($number % 3 === 0) {
        $number /= 3;
    }
    return $number === 1;
}

//print_r(isPowerOfThree(6561));
