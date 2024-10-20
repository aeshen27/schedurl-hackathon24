<?php
// Content of database.php

$mysqli = new mysqli('localhost', 'abbyshen', '15A1GoB!', 'hackathon');

if($mysqli->connect_errno) {
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit;
}
?>