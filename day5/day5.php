<?php

$stack1 = array("F","T","N","Z","M","G","H","J");
$stack2 = array("J","W","V");
$stack3 = array("H","T","B","J","L","V","G");
$stack4 = array("L","V","D","C","N","J","P","B");
$stack5 = array("G","R","P","M","S","W","F");
$stack6 = array("M","V","N","B","F","C","H","G");
$stack7 = array("R","M","G","H","D");
$stack8 = array("D","Z","V","M","N","H");
$stack9 = array("H","F","N","G");

$input = file('input.txt');
$output1 = 0;
$output2 = 0;

//Part 1
foreach($input as $moves) {
    
    //parse the line
    $parsechange = str_replace(array("move ", " from ", " to "), array("", "-", "-"), $moves);
    $movesarray = explode("-",$parsechange);
    $movesarray = array_map('intval', $movesarray);

    //set variable
    $numberofboxes = $movesarray[0]; 
    $fromstack = ${"stack".$movesarray[1]};
    $tostack = ${"stack".$movesarray[2]};
    
    $fromcount = count($fromstack);
    $x = 1;

    if ($numberofboxes > count($fromstack)){
        var_dump(${"stack".$movesarray[1]});
        var_dump($stack6);
        die;
    }

    //loop over number of boxes to be moved
    while($x <= $numberofboxes) {
        array_unshift($tostack,$fromstack[0]);
        unset($fromstack[0]);
        $fromstack = array_values($fromstack);
        $tostack = array_values($tostack);
        ${"stack".$movesarray[1]} = $fromstack;
        ${"stack".$movesarray[2]} = $tostack;
        $x++;
    }
}

//echo the top of each stack 
echo "Part 1: " . $stack1[0] .$stack2[0] . $stack3[0] . $stack4[0] . $stack5[0] . $stack6[0] . $stack7[0] . $stack8[0] . $stack9[0] . "\n";

//Part 2
$stack1 = array("F","T","N","Z","M","G","H","J");
$stack2 = array("J","W","V");
$stack3 = array("H","T","B","J","L","V","G");
$stack4 = array("L","V","D","C","N","J","P","B");
$stack5 = array("G","R","P","M","S","W","F");
$stack6 = array("M","V","N","B","F","C","H","G");
$stack7 = array("R","M","G","H","D");
$stack8 = array("D","Z","V","M","N","H");
$stack9 = array("H","F","N","G");
foreach($input as $moves) {
    
    //parse the line
    $parsechange = str_replace(array("move ", " from ", " to "), array("", "-", "-"), $moves);
    $movesarray = explode("-",$parsechange);
    $movesarray = array_map('intval', $movesarray);

    //set variable
    $numberofboxes = $movesarray[0]; 
    $fromstack = ${"stack".$movesarray[1]};
    $tostack = ${"stack".$movesarray[2]};
    

    $toaddtofront = array_slice($fromstack, 0, $numberofboxes);
    $tostack = array_merge($toaddtofront,$tostack);
    $fromstack = array_slice($fromstack, $numberofboxes);
    //re-index arrays
    $fromstack = array_values($fromstack);
    $tostack = array_values($tostack);
    //assign to global variables
    ${"stack".$movesarray[1]} = $fromstack;
    ${"stack".$movesarray[2]} = $tostack;

}

//echo the top of each stack 
echo "Part 2: " . $stack1[0] .$stack2[0] . $stack3[0] . $stack4[0] . $stack5[0] . $stack6[0] . $stack7[0] . $stack8[0] . $stack9[0] . "\n";
