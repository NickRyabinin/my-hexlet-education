<?php

function fizzBuzz($begin, $end)
{
    for ($i = $begin, $result = ''; $i <= $end; $i += 1) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            $result = 'FizzBuzz';
        } elseif ($i % 3 === 0) {
            $result = 'Fizz';
        } elseif ($i % 5 === 0) {
            $result = 'Buzz';
        } else {
            $result = $i;
        }
        print_r($result . ' ');
    }
    exit;
}

//fizzBuzz(1, 30);
//1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz Fizz 22 23 Fizz Buzz 26 Fizz 28 29 FizzBuzz
