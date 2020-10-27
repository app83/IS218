<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="output.css">
</head>

<body>
<h2>Registration Form Values</h2>

<form>

<?php

$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$bday = filter_input(INPUT_POST, 'bday');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

//First Name
if (empty($fname)) {
    echo "First Name is required <br><br>";
}
else {
    echo "First Name:  <strong>$fname</strong> <br><br>";
}

//Last Name
if (empty($lname)) {
    echo "Last Name is required <br><br>";
}
else {
    echo "Last Name:  <strong>$lname</strong> <br><br>";
}

//Birthday
if (empty($bday)) {
    echo "Birthdate is required <br><br>";
}
else {
    echo "Birthday:  <strong>$bday</strong> <br><br>";
}

//Email Address
if (empty($email)) {
    echo "Email is required <br><br>";
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format. Needs '@' character <br><br>";
}
else {
    echo "Email:  <strong>$email</strong> <br><br>";
}

//Password
if (empty($password)){
    echo "Password is required <br><br>";
}
else if (strlen($password) < 8)
{
    echo "Password must be at least 8 characters <br><br>";
}
else {
    echo "Password:  <strong>$password</strong> <br><br>";
}

?>
</form>
</body>
</html>


