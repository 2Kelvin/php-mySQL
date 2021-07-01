<?php

if (isset($_POST["btnReg"])) {
    //Receive the data from the user
    $name = $_POST["x"];
    $email = $_POST["y"];
    $password = $_POST["z"];
    $encryptedPassword = md5($password);

    //connect to the database to start saving
    require_once "databaseConnection.php";

    //to save the data, prepare the INSERT query
    $insertQuery = "INSERT INTO `regUsers`(`id`, `name`, `email`, `password`) VALUES (null,'$name','$email','$encryptedPassword')";

    //saving the data to mysqli_query()
    $save = mysqli_query($connection, $insertQuery);

    //check if the saving was successful
    if (isset($save)) {
        header("location:register.php");
    }else {
        echo "User registration failed";
    }
}