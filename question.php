<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Question Form</title>
    <link rel="stylesheet" href="output.css">
</head>

<body>
<h2>New Question Form Values</h2>

<form>

<?php
$name = filter_input(INPUT_POST, 'name');
$body = filter_input(INPUT_POST, 'body');
$skills = filter_input(INPUT_POST, 'skills');

//$new_skills = explode(',', $skills);

//Question Name
if (strlen($name) < 3) {
    echo "Question Name must be at least 3 characters <br><br>";
}
else if (empty($name)) {
    echo "Question Name is required <br><br>";
}
else {
    echo "Question Name: <strong>$name</strong> <br><br>";
}

//Question Body
if (strlen($body) > 500) {
    echo "Question Body must be less than 500 characters <br><br>";
}
else if (empty($body)) {
    echo "Question Body is required <br><br>";
}
else {
    echo "Question Body: <strong>$body</strong> <br><br>";
}

//Question Skills
if (str_word_count($skills) < 2 ) {
    echo "At least 2 question skills need to be entered <br><br>";
}
else if (empty($skills)) {
    echo "Question Skills are required <br><br>";
}
else {
    echo "Question Skills: <strong>$skills</strong> <br><br>";
}

?>
</form>
</body>
</html>
