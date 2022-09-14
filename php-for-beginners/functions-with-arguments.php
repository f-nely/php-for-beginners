<?php

function printFullName(string $fname, string $lname): string
{
    return "your first name is: {$fname} and your last name is: {$lname}";
}

echo printFullName('Mohamed', 'Hassan');