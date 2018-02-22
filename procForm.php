<?php
/**
 * Created by PhpStorm.
 * User: lhannema
 * Date: 1/30/18
 * Time: 12:07 PM
 */

//$fName = $_POST['fName'];

//check for first name
if(!empty($_POST['fName'])){
    $fName = $_POST['fName'];
}
else{
    echo "<p>You did not enter a first name</p>";
}

//check for last name
if(!empty($_POST['lName'])){
    $lName = $_POST['lName'];
}
else{
    echo "<p>You did not enter a last name</p>";
}

if(!empty($_POST['email'])){
    $email = $_POST['email'];
}
else{
    echo "<p>You did not enter an email</p>";
}

if($_POST['gender'] == "Male"){
    $gender = "Male";
}
elseif($_POST['gender'] == "Female"){
    $gender = "Female";
}
else{
    echo "<p>You did not select a gender</p>";
}

if(!empty($_POST['major'])){
    $major = $_POST['major'];
    switch($major){
        case "dmp":
            $majorName = "Digital Media Production";
            break;
        case "wdd":
            $majorName = "Web Design and Development";
            break;
        case "ris":
            $majorName = "Recording Industry Studies";
            break;
        case "sm":
            $majorName = "Sports Media";
            break;
        default:
            echo "<p>You did not select a major</p>";
            break;
    }
}

if(!empty($_POST['comments'])){
    $comment = $_POST['comments'];
}
else{
    echo "<p>You did not post a comment</p>";
}

$fullName = $fName . " " . $lName;

$to = "lhannema@butler.edu";
$subject = "CME test form";
$body = "Name: $fullName\n";
$body.= "Email Address: $email\n";
$body.= "Gender: $gender\n";
$body.= "Major: $majorName\n";
$body.= "Comments: $comment\n";

$sendMail = mail($to,$subject,$body);



if($fName && $lName && $email && $gender && $majorName && $comment){
    if($sendMail){

        echo "<p>Thank you, $fullName for submitting you information. This is the information we received:";
        echo "<br/>Email Address: $email<br/>";
        echo "Gender: $gender<br/>";
        echo "Major: $majorName<br/>";
        echo "Comments: $comment</p>";
    }

}
else{
    echo "<p>nay</p>";
}



