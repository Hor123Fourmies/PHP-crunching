<?php

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);

//print_r($brut);


// * Afficher le top10 des films sous cette forme :
$top = $brut["feed"]["entry"]; # liste de films
//print_r($top);
/*
1 Mission: Impossible - Rogue Nation
2 …
…
10 …
*/

$NBmovies = count($top);
$test = 0;
$test2 = 0;
$test3 = 0;
$test4 = 0;
$filmrecent = "";
$filmvieux = "";
$vieuxdate = "";
$mostreal = "";


// Tt faire dans la même boucle

foreach ($top as $key=>$value){
    $movie = $value['im:name']['label'];
    if ($movie == 'Gravity'){
        $test = $key;
        break;
    }
}

foreach ($top as $key=>$value){
    $film = $value['im:name']['label'];
    $artist = $value['im:name']['label'];
    if ($film == 'The LEGO Movie'){
        $test2 = $artist;
        break;
    }
}

foreach ($top as $key=>$value){
    $date = $value['im:releaseDate']['label'];
    if ($date < 2000){
        $test3++;
    }
}

/*
foreach ($top as $key=>$value){
    $youngOld[$value]['im:releaseDate']['label']=substr($value, ????-1, ?????? 1);
        // 2ème boucle foreach

    }
}
*/

