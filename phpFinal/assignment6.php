<?php
/**
 * Created by PhpStorm.
 * User: lhannema
 * Date: 1/30/18
 * Time: 11:29 AM
 */

$page_title = "Contact Form";

?>

<form action="contactPhp.php" method="POST">
    <label for="fName">First Name:</label>
    <input type="text" id="fName" name="fName" required/><br/>
    <label for="uName">Username:</label>
    <input type="text" id="uName" name="uName" required/><br/>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required/><br/>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required/><br/>
    <input type="submit" name="submit" id="submit" value="Submit Form"/>
</form>


