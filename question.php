<?php
echo "Form Values <br><br>";

$name = $_POST["name"];
$body = $_POST["body"];
$skills = $_POST["skills"];

//Question Name
if (strlen($name) < 3)
{
    echo "Question Name must be at least 3 characters <br><br>";
    exit();
}
else if (empty($name)) {
    echo "Question Name is required <br><br>";
    exit();
}
else {
    echo "Question Name is: $name <br><br>";
}

//Question Body
if (strlen($body) > 500)
{
    echo "Question Body must be less than 500 characters <br><br>";
    exit();
}
else if (empty($body)) {
    echo "Question Body is required <br><br>";
    exit();
}
else {
    echo "Question Body is: $body <br><br>";
}

//Question Skills
if (str_word_count($skills) < 2 ) {
    echo "At least 2 Question skills need to be entered <br><br>";
    exit();
}
else {
    //$skill_arr = explode(",", $skills);
    echo "Question Skills are: $skills <br><br>";
}

?>

