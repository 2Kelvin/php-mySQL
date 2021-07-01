<?php
echo "Welcome to our class";
echo "<br>";
$x = 5;
$y = 2;
$g = $x %$y;
echo $g;
echo "<br>";

$age = 20;
$experience = 5;
if ($age > 18 && $experience > 5) {
    echo "True";
} else {
    echo "False";
}
echo "<br>";

$p = 10;
$q = 10.0;
if ($p === $q) {
    echo "True";
}else {
    echo "False";
}
echo "<br>";

//GRADING SYSTEM
$marks = 52;

if ($marks < 30) {
    echo "E";
} else if ($marks < 40) {
    echo "D";
} else if ($marks < 50) {
    echo "C";
} else if ($marks < 60) {
    echo "B";
} else {
    echo "A";
}
echo "<br>";

//SWITCH CASE STATEMENT
$number = 4;
switch ($number) {
    case 1:
        echo "Number one was found";
        break;
    case 2:
        echo "Number two was found";
        break;
    case 3:
        echo "Number three was found";
        break;
    default:
        echo "Sorry, we don't recognise that number";
}