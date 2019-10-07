<?php

// indexed arrays
$peopleOne = ['shaun', 'crystal', 'ryu'];
//echo $peopleOne[1];

$peopleTwo = array('ken', 'chun-li'); // different method to declare indexed array
//echo $peopleTwo[1];

$ages = [20, 30, 40, 50];
//echo $ages; // not working, because try to transform into string an array

$ages[1] = 25;
$ages[] = 60; // this will add a new element to the array (we have not passed an index)
array_push($ages, 70); // another method to push element inside an array
//echo count($ages); // counts the length of an array

$peopleThree = array_merge($peopleOne, $peopleTwo);
//print_r($peopleThree);

// associative arrays - (key, value)
$ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown']; // ninja name and relative belt
//echo $ninjasOne['mario'];
//print_r($ninjasOne);

$ninjasTwo = array('bowser' => 'green', 'peach' => 'yellow');
//print_r($ninjasTwo);

$ninjasTwo['toad'] = 'pink'; // add new value to associative array
$ninjasTwo['peach'] = 'pink'; // override element inside associative arrays
//print_r($ninjasTwo);

//echo count($ninjasTwo);

$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
print_r($ninjasThree);

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

</body>
</html>
