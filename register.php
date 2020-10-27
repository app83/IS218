<?php
echo "Form Values <br><br>";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$bday = $_POST["bday"];
$email = $_POST["email"];
$password = $_POST["password"];

//First Name
if (empty($fname)) {
    echo "First Name is required <br><br>";
    exit();
}
else {
    echo "First Name is: $fname <br><br>";
}

//Last Name
if (empty($lname)) {
    echo "Last Name is required <br><br>";
    exit();
}
else {
    echo "Last Name is: $lname <br><br>";
}

//Birthday
if (empty($bday)) {
    echo "Birthday is required <br><br>";
    exit();
}
else {
    echo "Birthday is: $bday <br><br>";
}

//Email and Password
include('index.php');

?>