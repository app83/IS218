<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="output.css">
</head>

<body>
<h2>Login Form Values</h2>

<form>

<?php

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

//Email Address
if (empty($email)) {
    echo "Email is required <br><br>";
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format. Needs '@' character <br><br>";
}
else {
    echo "Email: <strong>$email</strong> <br><br>";
}

//Password
if (empty($password)){
    echo "Password is required <br><br>";
}
else if (strlen($password) < 8) {
    echo "Password must be at least 8 characters <br><br>";
}
else {
    echo "Password: <strong>$password</strong> <br><br>";
}

?>
</form>
</body>
</html>
