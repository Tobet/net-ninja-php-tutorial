<?php

// variable scopes

// local vars
function myFunc() {
    $price = 10; // local scope
    echo $price;
}

//myFunc();
//echo $price; // can't do this

function myFuncTwo($age) {
    echo $age;
}

//myFuncTwo(25);
//echo $age; // can't do this

// global variables
$name = 'mario';

function sayHello() {
    global $name;
    $name = 'yoshi'; // override globally - because we took the reference to global variable
    echo "hello $name"; // this works doesn't works - looks for a local variable // needs previous line
}

//sayHello();
//echo $name;

function sayBye(&$name) { // with & we are passing reference to passed variable
    $name = 'wario'; // override locally
    echo "bye $name";
}

sayBye($name); // pass global variable as parameter to sayBye function
echo $name; // this prints mario - no override from sayBye

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

</body>
</html>
