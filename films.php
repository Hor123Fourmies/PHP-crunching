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
$nbMovies = count($top);
echo $nbMovies; // 100
echo "<br><br>";

$i=1;
for ($i; $i<=10; $i++) {
    echo $i." ";
    echo $top[$i]["im:name"]["label"]."<br>";
}
echo "<br><br>";


// * Quel est le classement du film « Gravity » ?

// Tt faire dans la même boucle


foreach ($top as $key=>$value){
    $film = $value['im:name']['label'];
    if ($film == 'Gravity'){
        echo "Gravity occupe la place ".$film = $key.".";
        break;
    }
}

echo "<br><br>";

// * Quel est le réalisateur du film « The LEGO Movie » ?

$lego = $value['im:name']['label'];
//$realisateur = $value['author'];
foreach ($top as $value=>$key){
    if($lego == "The LEGO Movie"){
        //echo $realisateur;
        break;
    }
}
echo "<br><br>";

foreach ($top as $key=>$value){
    $film = $value['im:name']['label'];
    $artist = $value['im:name']['label'];
    if ($film == 'The LEGO Movie'){
        $test2 = $artist;
        break;
    }
}
$test3 = 0;
$test4 = 0;
$filmrecent = "";
$filmvieux = "";
$vieuxdate = "";
$mostreal = "";






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

