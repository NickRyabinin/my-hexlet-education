<?php

function isPowerOfThree($number)
{
    echo $number, PHP_EOL;
    if ($number === 3) {
        echo "Number given is a power of three!", PHP_EOL;
        return true;
    }
    if ($number % 3 === 0) {
        isPowerOfThree($number / 3);
    } else {
        echo "Number given is not a power of three!", PHP_EOL;
        return false;
    }
}

print_r(isPowerOfThree(6561));
