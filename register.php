<?php

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
    echo "<strong>First Name</strong> is: <strong>$fname</strong> <br><br>";
}

//Last Name
if (empty($lname)) {
    echo "Last Name is required <br><br>";
    exit();
}
else {
    echo "<strong>Last Name</strong> is: <strong>$lname</strong> <br><br>";
}

//Birthday
if (empty($bday)) {
    echo "Birthday is required <br><br>";
    exit();
}
else {
    echo "<strong>Birthday</strong> is: <strong>$bday</strong> <br><br>";
}

include('index.php');

?>