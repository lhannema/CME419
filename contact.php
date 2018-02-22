<?php
/**
 * Created by PhpStorm.
 * User: lhannema
 * Date: 1/30/18
 * Time: 11:29 AM
 */

$page_title = "Contact Form";

    include('includes/header.html');

    $majorArray = array ("dmp" => "Digital Media Production",
        "wdd" => "Web Design and Development",
        "ris" => "Recording Industry Studies",
        "sm" => "Sports Media");
		
	//sort by alphabet
	asort($majorArray);
	//reverse order
	//rsort($majorArray);
	//key sort by alphabet
	//ksort($majorArray);
	//key sort reverse
	//ksort();
?>

<form action="procForm.php" method="POST">
    <label for="fName">First Name:</label>
    <input type="text" id="fName" name="fName" required/><br/>
    <label for="lName">Last Name:</label>
    <input type="text" id="lName" name="lName" required/><br/>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required/><br/>
    <label for="gender">Gender:</label>
    <input type="radio" id="Male" name="gender" value="Male"/>
    <label for="Male">Male</label>
    <input type="radio" id="Female" name="gender" value="Female"/>
    <label for="Female">Female</label><br/>
    <label for="major">Major:</label>
    <?php
        echo '<select name = "major"><option>Select a major...</option>';
        foreach ($majorArray as $key => $value){
            echo '<option value="'. $key . '">' . $value . "</option>";
        }

    ?>
    </select><br/>
    <br/><label for="comments">Comments:</label>
    <textarea name="comments" id="comments"></textarea><br/>
    <br/>
    <input type="submit" name="submit" id="submit" value="Submit Form"/>
</form>

<?php
    include('includes/footer.html');
?>
