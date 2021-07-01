<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "morningClassSystem";

$connection = mysqli_connect($host,$username,$password,$database);

//Checking if the connection to the database was denied
if (!isset($connection)) {
    die("Connection to the database failed");
}