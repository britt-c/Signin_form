<?php

function validateinfo($username,$age, $pwd, $confpwd, $firstname, $lastname, $email ) {
if (strlen($username) < 2 ) {
		echo "Username is too short. Enter a username with 3+ characters.\n";
} elseif ($age < 18) {
		echo "You must be 18 years or older to access this site.\n";
} elseif ($pwd != $confpwd) {
		echo "Passwords do not match. Please reconfirm password.\n";
} elseif (($email && preg_match('/@/', $email)) != true) {
		echo "Invalid Email.\n";
} else { 
	echo "Welcome " . $firstname . " " . $lastname . "!!\n"; 
}
}


$username = $_POST["username"];
$age = $_POST["age"];
$pwd = $_POST["pwd"];
$confpwd = $_POST["confpwd"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];

validateinfo($username,$age, $pwd, $confpwd, $firstname, $lastname, $email);

?>
