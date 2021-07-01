<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <!--Bootstrap JS-->
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!--My Custom CSS-->
    <link rel="stylesheet" href="custom.css">
</head>

<body>
<a href="register.php" class="btn btn-outline-info btn-block">Add Users</a>
    <h1 class="text-info text-center">System Users</h1>
    <table class="table table-dark table-hover">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
        //connect to the database
        require_once "databaseConnection.php";

        //prepare a SELECT Query
        $selectQuery = "SELECT * FROM `regUsers` WHERE 1";

        //Use the mysqli_query() to fetch the users
        $users = mysqli_query($connection, $selectQuery);

        //loop displaying the respective users from the database
        while ($row = mysqli_fetch_assoc($users)) {
            extract($row);
            echo "<tr>
                            <td>$name</td>
                            <td>$email</td>
                            <td><a class='btn btn-danger' href='delete.php?myId=$id'>Delete</a></td>
                            <td><a class='btn btn-info' href='update.php?myId=$id&myName=$name&myEmail=$email&myPassword=$password'>Update</a></td>
                       </tr>";
        }
        ?>
    </table>
</body>
</html>

