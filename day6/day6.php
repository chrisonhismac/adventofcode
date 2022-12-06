<?php
$input = file('input.txt');
$datastream = $input[0];

function calculate($part, $marker){
    global $datastream; 
    for ($i = $marker; $i <= strlen($datastream); $i++){
        if (count(array_unique(str_split(substr($datastream, $i - $marker, $marker)))) == $marker){ 
            echo "Part {$part} = {$i}\n"; 
            break; 
        }
    }
}

calculate(1, 4);
calculate(2, 14);