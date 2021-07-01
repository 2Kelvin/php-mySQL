<?php
//Check if button update has been clicked
if (isset($_POST["btnUpdate"])) {
    $id = $_POST["a"];
    $updatedName = $_POST["x"];
    $updatedEmail = $_POST["y"];
    $updatedPassword = $_POST["z"];
    $encryptedPassword = md5($updatedPassword);

    //Connecting to the database
    require_once "databaseConnection.php";

    //Preparing an updated query
    $updateQuery = "UPDATE `regUsers` SET `name`='$updatedName',`email`='$updatedEmail',`password`='$encryptedPassword' WHERE id='$id'";

    //Update the user by using mysqli_query()
    $update = mysqli_query($connection,$updateQuery);

    //Checking if the update was successful
    if (isset($update)) {
        //Redirect back to users.php to see the changes
        header("location:users.php");
    }else {
        echo "Updating failed";
    }
}