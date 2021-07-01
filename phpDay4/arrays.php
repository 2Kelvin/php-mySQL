<?php
//ARRAYS
    //1) Indexed Arrays
$names = ["Jeff", "Betty", "Sharon", "Lameck", "Kevo", "Sam"];
echo $names[4]."<br>";
echo $names[5]."<br>";
echo $names[0]."<br>";
sort($names);
echo "<br>";

foreach ($names as $allNames) {
    echo $allNames."<br>";
}
echo "<br>";

echo count($names);
echo "<br>";
echo "<br>";

$ArrayCount = count($names);
for ($p = 0; $p < $ArrayCount; $p++) {
    echo $names[$p]."<br>";
}
echo "<br>";

    //2) Associative Arrays
$students = ["adm1"=>"John", "adm2"=>"Carol", "adm3"=>"Rikki"];
echo $students["adm2"]."<br>";
echo "<br>";
arsort($students);

foreach ($students as $key => $value) {
    echo $value."<br>";
}

