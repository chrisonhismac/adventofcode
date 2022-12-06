<?php
$input = file('input.txt');
$datastream = $input[0];

$marker = 4;
for ($i = $marker; $i <= strlen($datastream); $i++){
    if (count(array_unique(str_split(substr($datastream, $i - $marker, $marker)))) == $marker){ 
        echo "Part 1 = {$i}\n"; 
        break; 
    }
}

$marker = 14;
for ($i = $marker; $i <= strlen($datastream); $i++){
    if (count(array_unique(str_split(substr($datastream, $i - $marker, $marker)))) == $marker){ 
        echo "Part 3 = {$i}\n"; 
        break; 
    }
}
