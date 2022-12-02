<?php

// source data 
$input = file('input.txt');

$points = array(
    'A' => 1,//rock
    'B' => 2,//paper
    'C' => 3,//scissors
    'X' => 1,//rock
    'Y' => 2,//paper
    'Z' => 3//scissors
);

$results = array(
    'AX' => 3,
    'AY' => 6,
    'AZ' => 0,
    'BX' => 0,
    'BY' => 3,
    'BZ' => 6,
    'CX' => 6,
    'CY' => 0,
    'CZ' => 3
);

$outcome = array(
    'X' => 0,
    'Y' => 3,
    'Z' => 6
);

$currentScore = 0;

// loop through each line in the file
foreach($input as $round) {
    
    // split each line in to array
    $split = preg_split("/[^\w]*([\s]+[^\w]*|$)/", $round, -1, PREG_SPLIT_NO_EMPTY);
    
    // calculate the score from Selected Shape
    $resultSearch = array_keys($results, $outcome[$split[1]]);
    foreach($resultSearch as $key=>$value){
        $handsplit = str_split($value);
        if($handsplit[0] == $split[0]){
            $selectedShapeScore = $points[$handsplit[1]];
        }
    }
    $roundResultsScore = $outcome[$split[1]];
    $currentScore = $currentScore + $selectedShapeScore + $roundResultsScore;

}
var_dump($currentScore);