<?php

// read lines from input.txt
$lines = file('input.txt');
$measurements = array_map('intval', $lines);

$windows = [];
for ($i = 0; $i < count($measurements) - 2; $i++) { 
    $windows[$i] = $measurements[$i];
    $windows[$i] += $measurements[$i + 1];
    $windows[$i] += $measurements[$i + 2];
}

$previous = 0;
$increases = 0;

foreach ($windows as $window) {
    if ($window > $previous && $previous !== 0) {
        $increases++;
    }

    $previous = $window;
}

echo $increases;
