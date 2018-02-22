<?php

$page_title="Movie Ticket Calculator";
include('includes/header.html');

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$adult = $_POST['adult'];
		$child = $_POST['child'];
		$senior = $_POST['senior'];
		
		function adultCalc($adult){
			return ($adult * 7);
		}
		
		function childCalc($child){
			return ($child * 5);
		}
		
		function seniorCalc($senior){
			return ($senior * 6);
		}
		
		function total($adult, $child, $senior){
			return ($adult + $child + $senior);
		}
		
		$totalAdult = adultCalc($adult);
		$totalChild = childCalc($child);
		$totalSenior = seniorCalc($senior);
		$totalCost = total($totalAdult, $totalChild, $totalSenior);
	}

?>

<form method="post" action="movieTicket.php">
	<h3>Tickets, Price, Quantity</h3>
	<label for = "adult">Adult 7.00</label>
	<input type = "text" id="adult" name="adult">
    <label for = "adult"><?php if(isset($adult)){echo $totalAdult;}?></label>
	<br/><label for = "child">Child 5.00</label>
	<input type = "text" id="child" name="child">
    <label for ="child"><?php if(isset($child)){echo $totalChild;}?></label>
	<br/><label for = "senior">Senior 6.00</label>
	<input type = "text" id="senior" name="senior">
    <label for ="senior"><?php if(isset($senior)){echo $totalSenior;}?></label>
	<br/><input type="submit" name="submit" id="submit" value="Submit Query"/><br/>
    <?php
    echo "Your total ticket cost is " . $totalCost.".";
    ?>
</form>



<?php
include('includes/footer.html');
?>