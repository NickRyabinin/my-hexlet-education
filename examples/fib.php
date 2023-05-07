<?php

function fib($num)
{
    if ($num === 0) {
        return (int)(0);
    }
    if ($num === 1) {
        return (int)(1);
    }
    $fib2 = 0;
    $fib1 = 1;
    $fib = null;
    for ($n = 2; $n <= $num; $n += 1) {
        $fib = $fib1 + $fib2;
        $fib2 = $fib1;
        $fib1 = $fib;
    }
    return $fib;
}
//print_r(fib(8));
//21
