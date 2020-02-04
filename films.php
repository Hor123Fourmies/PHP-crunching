<?php

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);


// print_r($brut);


// * Afficher le top10 des films sous cette forme :
$top = $brut["feed"]["entry"]; # liste de films
print_r($top);
/*
1 Mission: Impossible - Rogue Nation
2 …
…
10 …
*/