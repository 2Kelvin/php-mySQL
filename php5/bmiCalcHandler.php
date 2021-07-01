<?php

if (isset($_GET["btnCalc"])){
    //Receive the rest of the data from the form
    $name = $_GET["name"];
    $height = $_GET["height"];
    $weight = $_GET["weight"];
    $bmi = $weight / pow($height, 2);

    if ($bmi < 18.9){
        echo "Hi ".$name." your BMI is ". floor($bmi). " , and you're under-weight!";
    }elseif ($bmi < 24.9) {
        echo "Hi ".$name." your BMI is ". floor($bmi). " , and you're normal weight!";
    }elseif ($bmi < 29.9) {
        echo "Hi ".$name." your BMI is ". floor($bmi). " , and you're over-weight!";
    }else {
        echo "Hi ".$name." your BMI is ". floor($bmi). " , and you're obese";
    }
} else {
    echo "Error, please retry!";
}

