<?php
/**
 * Created by PhpStorm.
 * User: lhannema
 * Date: 2/13/18
 * Time: 10:51 AM
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

if(!empty($_POST['month'])){
    $month = $_POST['month'];
    switch($month){
        case "jan":
            $month = "January";
            break;
        case "feb":
            $month = "February";
            break;
        case "mar":
            $month = "March";
            break;
        case "apr":
            $month = "April";
            break;
        case "may":
            $month = "May";
            break;
        case "jun":
            $month = "June";
            break;
        case "jul":
            $month = "July";
            break;
        case "aug":
            $month = "August";
            break;
        case "sep":
            $month = "September";
            break;
        case "oct":
            $month = "October";
            break;
        case "nov":
            $month = "November";
            break;
        case "dec":
            $month = "December";
            break;
        default:
            echo "<p>You did not select a month</p>";
            break;
    }
}

if(!empty($_POST['state'])){
    $state = $_POST['state'];
    switch($state){
        case "AL":
        $state = "Alabama";
        break;
        case "AK":
            $state = "Alaska";
            break;
        case "AZ":
            $state = "Arizona";
            break;
        case "AR":
            $state = "Arkansas";
            break;
        case "CA":
            $state = "California";
            break;
        case "CO":
            $state = "Colorado";
            break;
        case "CT":
            $state = "Connecticuit";
            break;
        case "DE":
            $state = "Delaware";
            break;
        case "DC":
            $state = "District Of Columbia";
            break;
        case "FL":
            $state = "Florida";
            break;
        case "GA":
            $state = "Georgia";
            break;
        case "HI":
            $state = "Hawaii";
            break;
        case "ID":
            $state = "Idaho";
            break;
        case "IL":
            $state = "Illinois";
            break;
        case "IN":
            $state = "Indiana";
            break;
        case "IA":
            $state = "Iowa";
            break;
        case "KS":
            $state = "Kansas";
            break;
        case "KY":
            $state = "Kentucky";
            break;
        case "LA":
            $state = "Louisiana";
            break;
        case "ME":
            $state = "Maine";
            break;
        case "MD":
            $state = "Maryland";
            break;
        case "MA":
            $state = "Massachusetts";
            break;
        case "MI":
            $state = "Michigan";
            break;
        case "MN":
            $state = "Minnesota";
            break;
        case "MS":
            $state = "Missouri";
            break;
        case "MT":
            $state = "Montana";
            break;
        case "NE":
            $state = "Nebraska";
            break;
        case "NV":
            $state = "Nevada";
            break;
        case "NH":
            $state = "New Hampshire";
            break;
        case "NJ":
            $state = "New Jersey";
            break;
        case "NM":
            $state = "New Mexico";
            break;
        case "NY":
            $state = "New York";
            break;
        case "NC":
            $state = "North Carolina";
            break;
        case "ND":
            $state = "North Dakota";
            break;
        case "OH":
            $state = "Ohio";
            break;
        case "OK":
            $state = "Oklahoma";
            break;
        case "OR":
            $state = "Oregon";
            break;
        case "PA":
            $state = "Pennsylvania";
            break;
        case "RI":
            $state = "Rhode Island";
            break;
        case "SC":
            $state = "South Carolina";
            break;
        case "SD":
            $state = "South Dakota";
            break;
        case "TN":
            $state = "Tennessee";
            break;
        case "TX":
            $state = "Texas";
            break;
        case "UT":
            $state = "Utah";
            break;
        case "VT":
            $state = "Vermont";
            break;
        case "VA":
            $state = "Virginia";
            break;
        case "WA":
            $state = "Washington";
        break;
        case "WV":
            $state = "West Virginia";
            break;
        case "WI":
            $state = "Wisconsin";
            break;
        case "WY":
            $state = "Wyoming";
            break;
        default:
            echo "<p>You did not select a month</p>";
            break;
    }
}

$day = $_POST['days'];
$year = $_POST['year'];


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
$fullBirthday = $month . " " . $day . ", " . $year;

$to = "lhannema@butler.edu";
$subject = "CME test form";
$body = "Name: $fullName\n";
$body.= "Email Address: $email\n";
$body.="Birthday: $fullBirthday\n";
$body.="State: $state\n";
$body.= "Gender: $gender\n";
$body.= "Major: $majorName\n";
$body.= "Comments: $comment\n";

$sendMail = mail($to, $subject, $body);



if($sendMail){

    if($fName && $lName && $email && $gender && $majorName && $comment && $month && $day && $year && $state){

        echo "<p>Thank you, $fullName for submitting you information. This is the information we received:<br/>";
        echo "Email Address: $email<br/>";
        echo "Birthday: $fullBirthday<br/>";
        echo "State: $state<br/>";
        echo "Gender: $gender<br/>";
        echo "Major: $majorName<br/>";
        echo "Comments: $comment</p>";
    }

}
else{
    echo "<p>nay</p>";
}







?>