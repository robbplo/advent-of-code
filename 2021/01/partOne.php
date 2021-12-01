<?php

// read lines from input.txt
$lines = file('input.txt');

$previous = 0;
$increases = 0;

foreach ($lines as $line) {
    $int = (int) $line;

    if ($int > $previous && $previous !== 0) {
        $increases++;
    }

    $previous = $int;
}

echo $increases;
