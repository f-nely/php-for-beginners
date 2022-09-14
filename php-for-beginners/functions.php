<?php

// functions are case insensitive

function myFunc(): string
{
    return 'hello form function <br>';
}

function sum(int $num1, int $num2): int
{
    return $num1 + $num2;
}

echo myFunc();
echo sum(11, 4);