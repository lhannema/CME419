<?php
/**
 * Created by PhpStorm.
 * User: lhannema
 * Date: 1/30/18
 * Time: 12:07 PM
 */

if(!empty($_POST['fName'])){
    $fName = $_POST['fName'];
}
else{
    echo "<p>You did not enter a first name</p>";
}

//check for last name
if(!empty($_POST['uName'])){
    $uName = $_POST['uName'];
}
else{
    echo "<p>You did not enter a username</p>";
}

if(!empty($_POST['email'])){
    $email = $_POST['email'];
}
else{
    echo "<p>You did not enter an email</p>";
}

if(!empty($_POST['password'])){
    $password = $_POST['password'];
}
else{
    echo "<p>You did enter a password</p>";
}

$fullName = $fName . " " . $lName;

$to = "lhannema@butler.edu";
$subject = "CME test form";
$body = "A new customer signed up for services:\n";
$body.= "Username: $uName\n";
$body.= "Password: $password\n";
$body.= "Email Address: $email\n";


$sendMail = mail($to,$subject,$body);


if($fName && $uName && $email && $password){
    if($sendMail){
        echo "<p>Thank you, $fName. We have received your login information. We will contact you shortly.";
    }

}



