<?php
/**
 * Created by PhpStorm.
 * User: crector
 * Date: 1/9/18
 * Time: 2:33 PM
 */
$page_title="Meal Cost Calculator";
include('includes/header.html');

//check to see if form has been submitted
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $restaurant = $_POST['place'];
    $meal = $_POST['meal'];
    $tip = $_POST['tip'];
    $tax = 0.08;

    function greeting(){
        echo "Thank you for using our form.";
    }

    function tipCalc($meal, $tip){
        $tipTotal = $meal * $tip;
        $tipTotal = number_format($tipTotal, 2);
        return $tipTotal;
    }

    function mealCalc($meal, $tip, $tax){
        $subTotal = $meal + ($meal * $tax);
        $total = $subTotal + $tip;
        return $total;
    }

    $totalTip = tipCalc($meal, $tip);
    $totalCost = mealCalc($meal, $totalTip, $tax);

    $message = $greeting . "<p>Your meal at " . $restaurant . " costs you $" . $totalCost . ".</p>";

    gretting();
}




?>

<form method="post" action="billCalc_students.php">
    <label for="place">Restaurant:</label>
    <input id="place" name="place" id="place"
    value="<?php if(isset($restaurant)){echo $restaurant;}?>"/><br/>
    <label for="meal">Meal Cost:</label>
    <input type="text" id="meal" name="meal" value="<?php if(isset($meal)){echo $meal;}?>"/><br/>
    <label for="tip">Tip:</label>
    <select name="tip">
        <option value="0.1" <?php if(isset($tip) && $tip == 0.1){echo 'selected="selected"';} ?>>10%</option>
        <option value="0.2" <?php if(isset($tip) && $tip == 0.2){echo 'selected="selected"';} ?>>20%</option>
        <option value="0.25" <?php if(isset($tip) && $tip == 0.25){echo 'selected="selected"';} ?>>25%</option>
        <option value="0.3" <?php if(isset($tip) && $tip == 0.3){echo 'selected="selected"';} ?>>30%</option>
    </select><br/>
    <input type="submit" value="Calculate Total" id="submit"/>
</form>


<?php

include('includes/footer.html');
?>