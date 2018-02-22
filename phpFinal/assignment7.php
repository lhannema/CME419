<?php
/**
 * Created by PhpStorm.
 * User: lhannema
 * Date: 1/30/18
 * Time: 11:29 AM
 */

$page_title = "Contact Form";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fName = $_POST['fName'];
    $uName = $_POST['uName'];
    $password = $_POST['password'];
    $rePassword = $_POST['rePassword'];
    $email = $_POST['email'];

    if($password == $rePassword){
        $passwordGood = true;
        $passwordLength = strlen($password);
    }
    else{
        $passwordGood = false;
    }

    $passwordCheck = true;


}

?>

<form action="assignment7.php" method="POST">
    <label for="fName">First Name:</label>
    <input type="text" id="fName" name="fName" required value="<?php echo $fName ?>"/><br/>
    <label for="uName">Username:</label>
    <input type="text" id="uName" name="uName" required value="<?php echo $uName ?>"/><br/>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required/><br/>
    <label for="rePassword">Retype Password:</label>
    <input type="password" id="rePassword" name="rePassword" required/><br/>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required value="<?php echo $email ?>"/><br/>
    <input type="submit" name="submit" id="submit" value="Submit Form"/>
    <?php
    if($passwordCheck) {
        if ($passwordGood) {
            echo "<br/>Thank you for your submission, " . $fName . ". Here is the information you submitted:<br/>";
            echo "Email: " . $email;
            echo "<br/>Username: " . $uName;
            echo "<br/>You submitted a " . $passwordLength . " - character long password.";
        }
        if (!$passwordGood) {
            echo "<br/>Your password values do not match. Please resubmit the form.";
        }
    }
    ?>
</form>

