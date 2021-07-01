<?php
//WHILE LOOPS
    //1) while loop - checks the condition first before  looping
$num = 0;
while ($num <= 5) {
    echo  $num;
    $num++;
    echo "<br>";
}
echo "<br>";

    //2) do while loop - doesn't check condition on the first loop
$num = 10;
do {
    echo $num;
    $num++;
    echo "<br>";
} while($num <= 15);
echo "<br>";

//FOR LOOPS
    //1) for loop
for ($age = "20"; $age <= "25 "; $age++) {
    echo $age;
    echo "<br>";
}
echo "<br>";

    //2) for each loop
$names = ["Kawhi", "33", "Curry", "8", "Embiid",  23, "Jokic", "AD",  30, "D.Rose"];
foreach ($names as $selectedNames) {
    echo $selectedNames;
    echo "<br>";
}
