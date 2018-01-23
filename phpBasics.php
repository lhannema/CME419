<?php
/**
 * Created by PhpStorm.
 * User: lhannema
 * Date: 1/23/18
 * Time: 11:24 AM
 */

//all variables start with $
$dog = "Janie";
$age = 13;
$male = false;

echo $dog;
print "</br><h1>My dog is $age.</h1>";
echo "Is the dog male? $male";

//Single and Double Quotes

//use single quotes if the ccontent has some type of quotation in it like bellow
echo '<p class="fun">Here is my text</p>';

//Concatenation
echo "My dog is " . $dog . " and she is " . $age . " years old.";

//Arrays
$animals = ["dog", "cat", "mouse", "horse", true, 32];

echo "I love a $animals[2] the most.";

?>
