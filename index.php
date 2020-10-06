<?php

$email = $_POST["email"];
$password = $_POST["password"];

//Email Address
if (empty($email)) {
    echo "Email is required <br><br>";
    exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format. Needs '@' character <br><br>";
    exit();
}
else {
    echo "<strong>Email Address</strong> is: <strong>$email</strong> <br><br>";
}

//Password
if (empty($password)){
    echo "Password is required <br><br>";
    exit();
}
else if (strlen($password) < 8)
{
    echo "Password must be at least 8 characters <br><br>";
    exit();
}
else {
    echo "<strong>Password</strong> is: <strong>$password</strong> <br><br>";
}

?>