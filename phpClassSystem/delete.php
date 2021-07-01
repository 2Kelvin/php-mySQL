<?php
//Checking if the delete button has been clicked
if (isset($_GET["myId"])) {
    $id = $_GET["myId"];

    //To delete, connect to the database
    require_once "databaseConnection.php";

    //Prepare the delete query
    $deleteQuery = "DELETE FROM `regUsers` WHERE id='$id'";

    //Execute the delete query using the mysqli_query()
    $delete = mysqli_query($connection,$deleteQuery);

    //Checking if the deletion was successful
    if (isset($delete)) {
        //Return to users.php to see the changes
        header("location:users.php");
    }else {
        echo "Deleting failed";
    }
}