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

$test = 0;
foreach ($top as $key=>$value){
    $movie = $value['im:name']['label'];
    if ($movie == 'Gravity'){
        echo $movie = $key;
        break;
    }
}
echo "<br>";


foreach ($top as $key=>$value){
    $film = $value['im:name']['label'];
    if ($film == 'Gravity'){
        echo "Gravity occupe la place ".$film = $key.".";
        break;
    }
}

echo "<br><br>";

// * Quel est le réalisateur du film « The LEGO Movie » ?

$test2 = 0;
foreach ($top as $key=>$value){
    $film = $value['im:name']['label'];
    $artist = $value['im:name']['label'];
    if ($film == 'The LEGO Movie'){
        $test2 = $artist;
        break;
    }
}

$lego = $value['im:name']['label'];
$resume = $value['summary']['label'];
$realisateur = $value['im:artist']['label'];
foreach ($top as $key=>$value){
    if($lego == "The LEGO Movie"){
        echo "The LEGO Movie :"."<br>";
        echo $resume."<br>";
        echo "Réalisateur : ".$realisateur.".";
        break;
    }
}
echo "<br><br>";



// * Combien de films sont sortis avant 2000 ?


$test3 = 0;
foreach ($top as $key=>$value){
    $date = $value['im:releaseDate']['label'];
    if ($date < 2000){
       $test3++;
    }
}

$film2000 = 0;
foreach ($top as $key=>$value){
    $date = $value['im:releaseDate']['label'];
    if ($date < 2000){
        $film2000++;
    }
}
echo $film2000." films sont sortis avant 2000.";
echo "<br><br>";

$test4 = 0;
$filmrecent = "";
$filmvieux = "";
$vieuxdate = "";
$mostreal = "";

// * Quel est le film le plus récent ? Le plus vieux ?



/*
foreach ($top as $key=>$value){
    $youngOld[$value]['im:releaseDate']['label']=substr($value, ????-1, ?????? 1);
        // 2ème boucle foreach

    }
}
*/

