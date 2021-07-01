<?php
//CHECKING IF THE CALCULATE BUTTON HAS BEEN CLICKED

if (isset($_GET["btnCalc"])){
    //Receive the rest of the data from the form
    $one = $_GET["one"];
    $two = $_GET["two"];
    $total = $one + $two;
    echo $total;
} else {
    //Stop and log out the user
    echo "Get out of here";
}