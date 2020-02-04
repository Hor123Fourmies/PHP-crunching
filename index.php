<?php

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\r\n", $string);

// print_r($dico);

// * Combien de mots contient ce dictionnaire ?
$resultat = count($dico);
echo $resultat;
echo "<br>";
// 336.532

// * Combien de mots font exactement 15 caractères ?

$mots = 0;
for ($i=0; $i<$resultat; $i++) {
    if (strlen($dico[$i]) == 15) {
        $mots++;
    }
}
echo $mots;
echo "<br>";

//$zut = 'zut';
//echo strlen($zut);


$words = 0;
foreach ($dico as $value){
        //echo $words.", ";
        if (strlen($value)==15){
            $words++;
            //echo $words.", ";
            //echo count($words);
        }
    }
echo $words." !";

echo "<br>";

/*
foreach ($dico as $key=>$value){
    if (strlen($value == 15)){
        echo count($value);
    }
}

foreach ($dico as $word=>$value) {
    $wordLength = strlen($word);
    if ($wordLength===15){
        echo count($value);
    }
}
*/



/*
$words_15 = array();
foreach ($dico as $word) {
    if (strlen($word) == 15) {
        array_push($words_15, $word);
    }
}
echo count($words_15);
*/

// * Combien de mots contiennent la lettre « w » ?

$motsW = 0;
for ($i=0; $i<$resultat; $i++){
    if (strpbrk($dico[$i],"w")){
        $motsW++;
    }
}
echo $motsW;
echo "<br>";

/*
$words_w = array();
foreach ($dico as $word) {
    if (strpos($word, "w") !== false) {
        array_push($words_w, $word);
    }
}
echo count($words_w); // answer: 537
*/

// * Combien de mots finissent par la lettre « q » ?

/*
$words_q = array();
foreach ($dico as $word) {
    if (substr($word, -1) == "q") {
        array_push($words_q, $word);
    }
}
echo count($words_q); // answer: 8
*/

$motsQ = 0;
for ($i=0; $i<$resultat; $i++){
    if (substr($dico[$i],-1) == "q"){
        $motsQ++;
    }
}
echo $motsQ;

/*
$motsQ = 0;
for ($i=0; $i<$resultat; $i++){
    if (substr(trim($dico[$i],-1)) == "q"){
        $motsQ++;
    }
}
echo $motsQ;
*/
// trim permet d'ignorer tous les espaces