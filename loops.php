<?php
//LOOPS (executes code a set number of times)
    //1) FOR LOOP (use when you know the number of times the code needs to be executed)
            //it has 3 parameters(initializer; condition; increment)
        for ($i=0; $i < 10; $i++) { 
            echo "Numero ".$i;
            echo "<br>";
        }
        echo "<br>";

    //2) WHILE LOOP
        //parameter - condition only
        //initializing variables happens outside the while loop
        $g = 3;
        while ($g <= 9) {
            echo "Car ".$g;
            echo "<br>";
            $g++;
        }
        echo "<br>";

    //DO WHILE LOOP (runs atleast once no matter what)
        //parameters - condition
        //no {} for the while
        $f = 7;
        do {
            echo "Product ".$f;
            echo "<br>";
            $f++;
        } while ($f < 12);
        echo "<br>";

    //3) FOR EACH LOOP (works with arrays)
            //for each loop on an indexed array
            $maPips = ["May", "Kai", "Lyi"];

            foreach($maPips as $pip) {
                echo "$pip<br>";
            }
            echo "<br>";

            //for each loop on an associative array
                //name is the key, email is the value
            $maPipsA = ["Dido" => "dido@gmail.com", "Nat" => "nat@gmail.com", "Jen" => "jen@gmail.com"];

            foreach($maPipsA as $pipA => $email) { //$pipA is the key; $email is the value
                echo "$pipA: $email<br>";
            }
?>