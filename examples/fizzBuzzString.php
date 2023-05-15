<?php

function fizzBuzz($begin, $end)
{
    for ($i = $begin; $i <= $end; $i += 1) {
        $result = '';
        if ($i % 3 === 0) {
            $result .= 'Fizz';
        }
        if ($i % 5 === 0) {
            $result .= 'Buzz';
        }
        if ($result === '') {
            $result = $i;
        }
        print_r($result . ' ');
    }
    exit;
}

//fizzBuzz(1, 30);
//1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz Fizz 22 23 Fizz Buzz 26 Fizz 28 29 FizzBuzz
