<?php
 
// source data 
$input = file('input.txt');
// empty array of callories by elf
$elfList[] = null;
// variable storing the current elf tally
$currentlElfCount = 0;

// loop through each line in the file
foreach($input as $food) {
    // convert to int
    $caloryCount = (int)$food;
    // check if new Elf values
    if($caloryCount !== 0){
        // add the value to the current elf callory count
        $currentlElfCount = $currentlElfCount + $caloryCount;
    } else {
        // write current elf total calory count to the elfList array and reset the current count
        $elfList[] = $currentlElfCount;
        $currentlElfCount = 0;
    }
}

// sort highest to lowest
rsort($elfList);

// highest value in the array  
echo "Elf with most calories has " . $elfList[0] . "\n";

// combine top 3 value in the array
$threeelves = $elfList[0] + $elfList[1] + $elfList[2];
echo "Top 3 Elves with most calories have " . $threeelves . "\n";