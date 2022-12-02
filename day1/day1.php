<?php
 $input = file('input.txt');
$elfList[] = null;
$currentlElfCount = 0;

foreach($input as $food) {
    $caloryCount = (int)$food;
    if($caloryCount !== 0){
        $currentlElfCount = $currentlElfCount + $caloryCount;
    } else {
        $elfList[] = $currentlElfCount;
        $currentlElfCount = 0;
    }
}
rsort($elfList);
echo "Elf with most calories has " . $elfList[0] . "\n";
$threeelves = $elfList[0] + $elfList[1] + $elfList[2];
echo "Top 3 Elves with most calories have " . $threeelves . "\n";