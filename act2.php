<?php
echo "<strong>ACTIVITY 2: With this array, display all the elements in a list using brute force, loop (any), foreach.</strong><br><br>";



$tasklist = [
 		["task" => "Wake up at 7.", "status" => true],
 		["task" => "Eat breakfast at 7:10.", "status" => false],
 		["task" => "Go to class at 8.", "status" => false],
 		["task" => "Learn to code.", "status" => false]
 	];

        echo "<strong>1. Display all elements</strong><br><br>";
        foreach($tasklist as $key => $value) {
            echo  $tasklist[$key]["task"] . "<br>";
        }
        echo "<hr>";


        echo "<strong>2. Display all elements like image 2</strong><br><br>";

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


        echo "<hr>";

        echo "<strong>3. If status is true, display the task, if the status is false, do NOT display</strong><br><br>";
        foreach($tasklist as $key => $value) {
            if ($tasklist[$key]["status"] == true) {
                echo  $tasklist[$key]["task"] . "<br>";
            } 
        }
    
    


?>