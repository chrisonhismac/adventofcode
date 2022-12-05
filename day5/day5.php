<?php

$stack1 = array();
$stack2 = array();
$stack3 = array();
$stack4 = array();
$stack5 = array();
$stack6 = array();
$stack7 = array();
$stack8 = array();

$input = file('input.txt');
$output1 = 0;
$output2 = 0;

foreach($input as $moves) {
    $parsechange = str_replace(array("move ", " from ", " to "), array("", "-", "-"), $moves);
    $movesarray = explode("-",$parsechange);
    $from = ${"stack".$movesarray[1]};
    $to = ${"stack".$movesarray[2]};
    $numberofboxes = $movesarray[0]; 
    $x = 1;
    while($x <= $numberofboxes) {
        echo "The number is: $x\n";
        $x++;
    }
    //$movesarray[0] = how many boxes to move

    //array_unshift($stack, what to add);
    //unset($stacck, key to remove);
}


echo "Part 1: " . $output1 . "\n";
echo "Part 2: " . $output2 .  "\n";