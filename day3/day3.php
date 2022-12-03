<?php

$input = file('input.txt');
$output = 0;
$output2 = 0;
$i = 0;
$tocompare;
$compartments;

function getAlphabetValue($letter){
    $alphabetU = range('A', 'Z');
    $alphabetL = range('a', 'z');
    if(ctype_upper($letter)){
        return array_search($letter, $alphabetU) + 27;
    } else {
        return array_search($letter, $alphabetL) + 1;
    }
}

function splitString($str){
    $output = array();
    $middle = strlen($str)/2;
    $output[] = substr($str,0,(int)$middle);
    $output[] = substr($str,(int)$middle);
    return $output;
}

function compareStrings($str1,$str2){
    $ary1 = str_split($str1);
    $ary2 = str_split($str2);
    return implode('',array_intersect($ary1,$ary2));
}


function compare3Arrays($str1,$str2,$str3){
    $ary1 = str_split($str1);
    $ary2 = str_split($str2);
    $ary3 = str_split($str3);
    return implode('',array_intersect($ary1,$ary2,$ary3));
}


foreach($input as $rucksack) {
    $compartments = splitString($rucksack);
    $common = compareStrings($compartments[0], $compartments[1]);
    $getValue = getAlphabetValue(substr($common, 0, 1));
    $output = $output + $getValue;
   
    $tocompare[] = $rucksack;
    if($i !== 2){
        $i++;
    } else {
        $common = compare3Arrays($tocompare[0], $tocompare[1], $tocompare[2]);
        $getValue = getAlphabetValue(substr($common, 0, 1));
        $output2 = $output2 + $getValue;
        $tocompare = array();
        $i = 0;
    }
}
var_dump($output2);
var_dump($output);
