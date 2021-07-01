<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
   <div class="form">
       <h1>Enter two numbers to add</h1>
       <form method="get" action="fileOneHandler.php">
           <label for="">First number:</label> <br>
           <input name="one" type="text" placeholder="Enter first number"> <br> <br>

           <label for="">Second number</label> <br>
           <input name="two" type="text" placeholder="Enter second number"> <br> <br>

           <input name="btnCalc" type="submit" value="Calculate">
       </form>
   </div>
</body>
</html>
