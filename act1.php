<?php
echo "<strong>ACTIVITY 1: Given with this array, display
each of the countries together with
its corresponding capital.</strong><br><br>";


$country_city = [
    "Japan" => "Tokyo", 
    "Mexico" => "Mexico City", 
    "USA" => "New York", 
    "India" => "Mumbai", 
    "Korea" => "Seoul", 
    "China" => "Shanghai", 
    "Nigeria"=> "Lagos",
    "Argentina" => "Buenos Aires"
];


echo "<strong>1. Display all elements</strong><br><br>";
foreach (array_flip($country_city) as $country => $city) {
    echo "$country is in $city <br>";
}

echo "<hr>";

echo "<strong>2. Display all elements like image 2</strong><br><br>";
foreach (array_flip($country_city) as $country => $city) {
    echo "$country is in $city <br>";
    if ($city === "Argentina") {
        foreach (array_flip($country_city) as $country => $city) {
            echo "$country is in $city <br>";
        } 
    }
}