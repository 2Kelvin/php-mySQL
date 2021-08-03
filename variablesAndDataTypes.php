<?php
//VARIABLES
/*
    -Start with a $ to define your variable
    -Variable name should start with a letter or an underscore ONLY
    -Variable names can use letters, numbers and underscores
    -variable names are case sensitive
*/
$myPrint = "Hi there RocketMan!";
echo $myPrint; 
echo "<br>";

//DATA TYPES
    //Strings
    $line = "Hello";

    //Integers
    $num = 7;

    //Floats(Decimals)
    $float = 8.9;

    //Booleans(true/false)
    $boolOne = true;
    $boolTwo = false;

    //Arrays
    //Objects
    //NULL
    //Resource (Reference to a function)

//CONCATENATION
    //Adding numbers -use plus(+)
    $numOne = 9;
    $numTwo = 7;
    $sum = $numOne + $numTwo;
    echo $sum;
    echo "<br>";

    //Concatenating (joining) strings - use dot (.)
    $string1 = "Hi there";
    $string2 = "RocketMan";
    $greetUser = $string1.$string2;
    echo $greetUser;
    echo "<br>";

    $v = "They're here";
    echo $v;
    echo "<br>";
    //fixing single quote clash with apostrophes
    $v2 = 'They\'re here';
    echo $v2;
    echo "<br>";

//CONSTANTS (used for values that you won't change at all)
    //constants are created by using the function define()
    //constants are written in capital letters
    define("GREETING", "Hello");
    echo GREETING;
?>