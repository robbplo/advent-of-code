<?php

$lines = file('input.txt');

$horizontalPosition = 0;
$depth = 0;

foreach ($lines as $line) {
    [$direction, $value] = explode(' ', trim($line));

    if ($direction === 'forward') {
        $horizontalPosition += (int) $value;
    } elseif ($direction === 'up') {
        $depth += (int) $value;
    } else {
        $depth -= (int) $value;
    }
}

echo abs($horizontalPosition * $depth);
