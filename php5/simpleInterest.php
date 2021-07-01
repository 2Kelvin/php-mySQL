<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Interest</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div>
        <h1>Calculate your interest here</h1>
        <form method="POST" action="simpleInterestHandler.php">
            <label for="">Name:</label> <br>
            <input name="name" type="text" placeholder="Enter your name"> <br> <br>

            <label for="">Principle:</label> <br>
            <input name="principle" type="text" placeholder="Enter the principle amount"> <br> <br>

            <label for="">Rate</label> <br>
            <input name="rate" type="text" placeholder="Enter the rate"> <br> <br>

            <label for="">Time</label> <br>
            <input name="period" type="text" placeholder="Enter the period"> <br> <br>

            <input name="btnCalc" type="submit" value="Calculate">
        </form>
    </div>
</body>
</html>
