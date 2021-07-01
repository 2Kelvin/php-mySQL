<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BMI</title>
</head>
<body>
    <div class="heiwei">
        <h1>Enter height and weight to calculate</h1>
        <form method="get" action="bmiCalcHandler.php">
            <label for="">Name:</label> <br>
            <input name="name" type="text" placeholder="Enter your name"> <br> <br>

            <label for="">Weight (kg):</label> <br>
            <input name="weight" type="text" placeholder="Enter your weight"> <br> <br>

            <label for="">Height (Mtrs)</label> <br>
            <input name="height" type="text" placeholder="Enter your height"> <br> <br>

            <input name="btnCalc" type="submit" value="Calculate">
        </form>
    </div>
</body>
</html>
