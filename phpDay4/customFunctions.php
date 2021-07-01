<?php
function motto () {
    echo "Hey! This is our motto!";
    echo "<br>";
    echo "Hello everyone!";
    echo "<br>";
}
motto();

function addition () {
    $x = 2;
    $y = 17;
    $total = $x + $y;
    echo "Your answer is $total";
    echo "<br>";
}
addition();
function avg($n1, $n2) {
    $average = ($n1 + $n2) / 2;
    echo "Your average is $average";
    echo "<br>";
}
avg(76, 82);

function simpleInterest ($p,$r,$t) {
    $interest = ($p * $r  * $t) /100;
    return $interest;
}
$principle =2500;
$rate = 5;
$time = 2;
echo "Your interest is ".simpleInterest($principle, $rate,$time);