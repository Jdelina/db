<?php

$user ='root';
$pass ='';
$db = 'wd33p';

$db = new mysqli ('localhost', $user, $pass, $db) or die("Unable to Connect to the Database");

echo("Database Connected");

?>