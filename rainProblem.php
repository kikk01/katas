<?php

$data = [2, 3, 1, 2, 4, 1, 2];

$test = [2, 3, 3, 3, 4, 2, 2];

$length = count($data);

$i = 0;

$dataWithRain = [];

foreach ($data as $int) {
    $strongLeft = $int;
    for ($l = $i; $l >= 0; $l--) {
        if ($strongLeft < $data[$l]) {
            $strongLeft = $data[$l];
        }
    }

    $strongRight = $int;
    for ($r = $i; $r < $length; $r++) {
        if ($strongRight < $data[$r]) {
            $strongRight = $data[$r];
        }
    }

    $dataWithRain[$i] = min($strongRight, $strongLeft);
    $i++;
}

var_dump($dataWithRain);