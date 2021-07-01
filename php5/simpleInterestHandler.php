<?php

if (isset($_POST["btnCalc"])){
    $name = $_POST["name"];
    $principle = $_POST["principle"];
    $rate = $_POST["rate"];
    $time = $_POST["period"];
    $interest = ($principle * $rate * $time) / 100;
    echo "Hi, ".$name." your interest is ".floor($interest);
} else {
    echo "Error!";
}
