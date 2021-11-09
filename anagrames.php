<?php

$descriptFile = fopen('liste.de.mots.francais.frgut.txt', 'r');

$src = 'paris';

while($mot = fgets($descriptFile, 1024)) {
    if (isAnagram($src, $mot)) {
        echo $mot . '<br>';
    }
}

function isAnagram($src, $mot) {
    $strlenSrc = strlen($src);

    if (strlen($src) !== strlen($mot)) {
        return false;
    }

    for ($i = 0; $i < $strlenSrc; $i++) {
        $result = strpos($mot, strpos($src, $i));

        if ($result === false) {
            return false;
        }

        substr($mot, $result, 1);
    }

    return $mot === '';
}

fclose($descriptFile);