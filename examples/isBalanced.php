<?php

function isBalanced($str)
{
    if ($str === '') {
        return true;
    }
    for ($i = 0, $bracketsCount = 0; $i < strlen($str); $i += 1) {
        if ($str[$i] === '(') {
            $bracketsCount += 1;
        } else {
            $bracketsCount -= 1;
        }
        if ($bracketsCount < 0) {
            return false;
        }
    }
    return !$bracketsCount;
}

//var_dump(isBalanced('()()((()))'));
//true
