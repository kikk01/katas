<?php

$data = [2, 3, 1, 2, 4, 1, 2];
$length = count($data);

$i = 0;

$dataWithRain = [];

foreach ($data as $int) {
    if ($i === $length) {
        break;
    }

    $dataWithRain[$i] = max($int, $data[$i++]);
}

var_dump($dataWithRain);