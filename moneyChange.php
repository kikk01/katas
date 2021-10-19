<?php


foreach(range(1, 15) as $i) {
    var_dump($this->computeChangeDistribution($i));
}

function computeChangeDistribution(int $change)
{
    $reste = $change / 5; 
    $p5 = floor($change / 5);
    $reste = $change - ($p5*5);
    if ($reste%2 === 0) {
        $p2 = $reste / 2;
        return [$p5, $p2];
    } else {
        $p5 = $p5 - 1;
        $reste = $reste + 5;
        $p2 = $reste / 2;
        return [$p5, $p2];
    }
}