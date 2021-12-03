<?php

$lines = file('input.txt');

$horizontalPosition = 0;
$aim = 0;
$depth = 0;

foreach ($lines as $line) {
    [$direction, $value] = explode(' ', trim($line));

    if ($direction === 'forward') {
        $horizontalPosition += (int) $value;
        $depth += ($aim * $value);
    } elseif ($direction === 'up') {
        $aim += (int) $value;
    } else {
        $aim -= (int) $value;
    }
}

echo abs($horizontalPosition * $depth);
