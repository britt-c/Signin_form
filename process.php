<?php

require_once("signup.php");

if (preg_match("@", "{$_POST["email"]}", $matches) !== $matches[1]) {
		echo "Invalid Email.";
} elseif ( strlen({$_POST["username"]}) !> 2 ) {
		echo "Username is too short. Enter a username with 3+ characters.\n";
} elseif ({$_POST["age"]} !>= 18) {
		echo "You must be 18 years or older to access this site.\n";
} elseif ( {$_POST["pwd"]} !== {$_POST["confpwd"]}) {
		echo "Passwords do not match. Please reconfirm password.\n";
} else { 
	echo "Welcome " . {$_POST["firstname"]} . " " . {$_POST["lastname"]} "!!\n"; 
}

?>
