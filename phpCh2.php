<?php

//multidemensioal arrays
$winter = ['December', 'January', 'February'];
$spring = ['March', 'April', 'May'];
$summer = ['June', 'July', 'August'];
$fall = ['Semptember', 'October', 'November'];

$seasons = array("Winter" => $winter, "Spring" => $spring, "Summer" => $summer, "Fall" => $fall);

//this will print august
echo $seasons['Summer'][2];

foreach($seasons as $seasonArray => $months){
	echo "<h3>" . $seasonArray . "</h3><ul>";
	foreach($months as $value){
		echo "<li>" . $value . "</li>";
	}
	echo "</ul>";
}

$myNumbers = range(1, 10);
foreach($myNumbers as $value){
	echo $value . "<br/>";
}


//for loop
for($i = 5; $i <= 10; $i++){
	echo $i . "<br/>";
}

//while loop
$i = 6;
while($i < 8){
	echo $i . "<br/>";
	$i++;
}

//do while
$j = 3;
do {
	echo $j;
	$j++;
} while(j < 5);

?>
