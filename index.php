<?php


if (strlen($_GET["password"]) < 8)
{
    echo "Password must be at least 8 characters"."<br />";
    exit();
}

if($_GET["email"] || $_GET["password"] )
{
    echo "Your email address is: ".$_GET['email']. "<br />";
    echo "Your password is: ".$_GET['password']. "<br />";

    exit();
}



?>