<?php
$connection = new Mongo();
$db = $connection->antiblog;

$list = $db->listCollections();
foreach ($list as $collection) {
    echo "$collection </br>";
}

// NOTES:
// This database is case-sensitive.

// USERS are composed of "username" and "password"
$db->createCollection('users');

// PROFILES are composed of "username", "first_name", "last_name", "interests", "DOB", and "about"
$db->createCollection('profiles');

//BLOGS are composed of "username", "date", "post", and "title"
$db->createCollection('blogs');




header("Location: index.php");
exit;
?>