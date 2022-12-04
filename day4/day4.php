<?php

$input = file('input.txt');
$output1 = 0;
$output2 = 0;

foreach($input as $range) {
    //split range lines in to each elf
    $ranges = explode(",", $range );
    //create array for each elf start and end section
    $elf1 = explode("-", $ranges[0] );
    $elf2 = explode("-", $ranges[1] );
    if (($elf1[0] <= $elf2[0] && $elf1[1] >= $elf2[1])|| ($elf1[1] <= $elf2[1] && $elf1[0] >= $elf2[0])){
        $output1++;
    }
    if (($elf1[0] >= $elf2[0] && $elf1[0] <= $elf2[1]) || ($elf2[0] >= $elf1[0] && $elf2[0] <= $elf1[1])){
        $output2++;
    }
}

echo "Part 1: " . $output1 . "\n";
echo "Part 2: " . $output2 .  "\n";