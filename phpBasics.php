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
//this will print My dog is $age because single quotes take things literally
print '</br><h1>My dog is $age.</h1>';
echo "Is the dog male? $male";

//Single and Double Quotes

//use single quotes if the content has some type of quotation in it like bellow
echo '<p class="fun">Here is my text</p>';

//Concatenation
echo "My dog is " . $dog . " and she is " . $age . " years old.";

//Arrays
// $animals = ["dog", "cat", "mouse", "horse", true, 32];
$animals = array("dog", "cat", "mouse", "horse", true, 32);

echo "I love a $animals[2] the most.";

//constants
define('BIRTHDATE', "07/04/2000");

echo BIRTHDATE . "<br/>";

//This will cause an error
//BIRTHDATE = "07/04/1999";

$x = 10;
$y = 4;

echo "Addition: ". ($x + $y) . "<br/>";

$a = 5;
$b = "25";

var_dump($a == $b);

$show = "big bang theory";
$myNum = 4.534556456;

//everything uppercase
echo strtoupper($show);

//first word uppercase
echo ucfirst($show);

//every word uppercase
echo ucwords($show);

//format decimals
echo "<br/>" . number_format($myNum, 1);

//random number generator
echo "<br/>" . mt_rand(1, 100);

?>
