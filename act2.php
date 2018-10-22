<?php
echo "<strong>ACTIVITY 2: With this array, display all the elements in a list using brute force, loop (any), foreach.</strong><br><br>";



$tasklist = [
 		["task" => "Wake up at 7.", "status" => true],
 		["task" => "Eat breakfast at 7:10.", "status" => false],
 		["task" => "Go to class at 8.", "status" => false],
 		["task" => "Learn to code.", "status" => false]
 	];

       

        echo "<hr>";


        echo "<strong>1.a. Display all the elements in a list using BRUTE FORCE.</strong><br><br>";
        
        echo $tasklist[0]["task"] . "<br>";
        echo $tasklist[1]["task"] . "<br>";
        echo $tasklist[2]["task"] . "<br>";
        echo $tasklist[3]["task"] . "<br>";
    



        echo "<br>";

        echo "<strong>1.b. Display all the elements in a list using ANY LOOP (FOR LOOP).</strong><br><br>";
        for($i = 0; $i < count($tasklist); $i++) echo $tasklist[$i]["task"] . "<br>";
        



        echo "<br><br>";

        echo "<strong>1.c. Display all elements using FOREACH.</strong><br><br>";
        foreach($tasklist as $key => $value) {
            echo  $tasklist[$key]["task"] . "<br>";
        }



        echo "<hr><br>";


        echo "<strong>2. Display all elements, like image 2 (FOREACH & IFs).</strong><br><br>";
        foreach($tasklist as $key => $value) {
            echo  "<li>" . $tasklist[$key]["task"]. "</li>";
            
            if ($key === 3) {
                
                echo "<br>";
                foreach($tasklist as $key => $value) {
                    echo  "<li>" . $tasklist[$key]["task"] . "</li>";

                    if ($key === 3) {

                        echo "<br>";
                        foreach($tasklist as $key => $value) {
                            echo  "<li>" . $tasklist[$key]["task"] . "</li>";
                        }
                    }
                }
            }
        }


        echo "<hr><br>";

        echo "<strong>3.a. If status is true, display the task. Otherwise, DO NOT display (FOREACH & IF).</strong><br><br>";
        foreach($tasklist as $key => $value) {
            if ($tasklist[$key]["status"] == true) echo  $tasklist[$key]["task"] . "<br>";
            
        }

        echo "<br><br>";

        echo "<strong>3.b. Same as above but using FOR.</strong><br><br>";
        for($i = 0; $i < count($tasklist); $i++) {
           if ($tasklist[$i]["status"] == true) echo $tasklist[$i]["task"] . "<br>";
        }

        
       
      
?>