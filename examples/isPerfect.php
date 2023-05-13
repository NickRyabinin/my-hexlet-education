<?php

function isPerfect($number)
{
    for ($i = 1, $result = 0; $i <= $number / 2; $i += 1) {
        if ($number % $i === 0) {
            $result += $i;
        }
    }
    return $result === $number;
}

//var_dump(isPerfect(33550336));
//true
