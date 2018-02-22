<?php
/**
 * Created by PhpStorm.
 * User: lhannema
 * Date: 1/30/18
 * Time: 11:29 AM
 */

$page_title = "Validation Form";

include('includes/header.html');


$majorArray = array ("dmp" => "Digital Media Production",
    "wdd" => "Web Design and Development",
    "ris" => "Recording Industry Studies",
    "sm" => "Sports Media");

asort($majorArray);

$months = array("jan" => "January", "feb" => "February", "mar" => "March", "apr" => "April",
    "may" => "May", "jun" => "June", "jul" => "July", "aug" => "August", "sep" => "September",
    "oct" => "October", "nov" => "November", "dec" => "December");
$days = range(1,31);
$year = range(1920, 2018);

rsort($year);

$csd = array('Communication Sciences and Disorders');
$cme = array('Digital Media Production', 'Interactive Media', 'Recording Industry Studies');
$criticalCom = array('Critical Communication and Media Studies');
$humanCom = array('Human Communication and Organizational Leadership');
$journal = array('Journalism', 'Sports Media');
$stratCom = array('Strategic Communications', 'Public Relations', 'Advertising');

$areas = array("Communication Sciences and Disorders" => $csd, "Creative Media and Entertainment" => $cme,
    "Critical Communication and Media Studies" => $criticalCom, "Human Communication and Organizational Leadership" => $humanCom,
    "Journalism" => $journal, "Strategic Communications" => $stratCom);

$state = array(
    'AL' => 'Alabama',
    'AK' => 'Alaska',
    'AZ' => 'Arizona',
    'AR' => 'Arkansas',
    'CA' => 'California',
    'CO' => 'Colorado',
    'CT' => 'Connecticut',
    'DE' => 'Delaware',
    'DC' => 'District Of Columbia',
    'FL' => 'Florida',
    'GA' => 'Georgia',
    'HI' => 'Hawaii',
    'ID' => 'Idaho',
    'IL' => 'Illinois',
    'IN' => 'Indiana',
    'IA' => 'Iowa',
    'KS' => 'Kansas',
    'KY' => 'Kentucky',
    'LA' => 'Louisiana',
    'ME' => 'Maine',
    'MD' => 'Maryland',
    'MA' => 'Massachusetts',
    'MI' => 'Michigan',
    'MN' => 'Minnesota',
    'MS' => 'Mississippi',
    'MO' => 'Missouri',
    'MT' => 'Montana',
    'NE' => 'Nebraska',
    'NV' => 'Nevada',
    'NH' => 'New Hampshire',
    'NJ' => 'New Jersey',
    'NM' => 'New Mexico',
    'NY' => 'New York',
    'NC' => 'North Carolina',
    'ND' => 'North Dakota',
    'OH' => 'Ohio',
    'OK' => 'Oklahoma',
    'OR' => 'Oregon',
    'PA' => 'Pennsylvania',
    'RI' => 'Rhode Island',
    'SC' => 'South Carolina',
    'SD' => 'South Dakota',
    'TN' => 'Tennessee',
    'TX' => 'Texas',
    'UT' => 'Utah',
    'VT' => 'Vermont',
    'VA' => 'Virginia',
    'WA' => 'Washington',
    'WV' => 'West Virginia',
    'WI' => 'Wisconsin',
    'WY' => 'Wyoming');

?>

<style>
    form{
        float: right;
    }
</style>

<form action="formVal.php" method="POST">
    <label for="fName">First Name:</label>
    <input type="text" id="fName" name="fName" required/><br/>
    <label for="lName">Last Name:</label>
    <input type="text" id="lName" name="lName" required/><br/>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required/><br/>
    <label for="birthday">Birthday:</label>
    <?php
    echo '<select name = "month"><option>Select a month...</option>';
    foreach ($months as $key => $value){
        echo '<option value="'. $key . '">' . $value . "</option>";
    }
    ?>
    </select>

    <?php
    echo '<select name = "days"><option>Select a day...</option>';
    foreach ($days as $num){
        echo '<option value="'. $num . '">' . $num . "</option>";
    }
    ?>
    </select>

    <?php
    echo '<select name = "year"><option>Select a year...</option>';
    foreach ($year as $num){
        echo '<option value="'. $num . '">' . $num . "</option>";
    }
    ?>
    </select>

    <label for = "state">State:</label>
    <?php
    echo '<select name = "state"><option>Select a state...</option>';
    foreach ($state as $key => $value){
        echo '<option value="'. $key . '">' . $value . "</option>";
    }
    ?>
    </select>
    <br/>
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
    <label for="comments">Comment:</label>
    <textarea name="comments" id="comments" required></textarea><br/>
    <br/>
    <input type="submit" name="submit" id="submit" value="Submit Form"/>
</form>

<div class = "comm"></div>
<?php
"<h2>College Of Communications</h2>";
foreach($areas as $areaArray => $types){
    echo "<h3>" . $areaArray . "</h3><ul>";
    foreach($types as $value){
        echo "<li>" . $value . "</li>";
    }
    echo "</ul>";
}
?>
</div>

<?php
include('includes/footer.html');
?>


