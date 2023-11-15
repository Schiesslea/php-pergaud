<?php

$nombre=15;
for ($i=0; $i<20; $i++) {
    echo $nombre ." ";
    if ($nombre % 2 == 0) {
        $nombre = $nombre / 2;
    } else {
        $nombre = $nombre*3 +1;
    }
}