<?php
	
	$one = array('HTML', 'CSS');
	$two = array('Flexbox', 'CSS Grid');
	$three = array('PHP', "MySQL");
	$four = array('Angular', 'Iconic');
	
	$classes = array("CME219" => $one, "CME306" => $two, "CME419" => $three, "CME422" => $four);
	
	
	echo "<h3>Web Design and Development</h3>";
	echo "<ul>";
	foreach($classes as $classArray => $list){
		echo "<li>" . $classArray . ": " . $list[0] . " & " . $list[1] . "</li>";
	}


?>