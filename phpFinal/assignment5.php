<?php

$sports = array("Speed Skating", "Bobsleigh", "Snowboarding", "Curling", "Hockey", "Luge");

echo "Normal Order:<br/>";
foreach($sports as $value){
    echo $value . "<br/>";
}


asort($sports);
echo "<br/>Alphabetical Order:<br/>";
foreach($sports as $value){
    echo $value . "<br/>";
}

rsort($sports);
echo "<br/>Reverse Alphabetical Order:<br/>";
foreach($sports as $value){
    echo $value . "<br/>";
}

?>