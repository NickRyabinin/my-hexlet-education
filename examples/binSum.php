<?php

function binarySum($str1, $str2)
{
    $result = decbin(bindec($str1) + bindec($str2));
    return $result;
}

//cdprint_r(binarySum('101000111', '110000001'));
