<?php

function fib($num)
{
    if ($num === 0) {
        return (int)(0);
    }
    if ($num === 1) {
        return (int)(1);
    }
    $result = fib($num - 1) + fib($num - 2);
    return $result;
}

//print_r(fib(10));
//55
