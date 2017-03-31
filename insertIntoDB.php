<?php

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}else {
	if (!isset($_SESSION['username'])) {
		header('Location: php/login.php');
	}
}

include 'connect.php';
$sql = "INSERT INTO Event (id,date,level,location)
				VALUES ($_POST id, $_POST event_date, $_POST event_level, $_POST event_location);";
$sql .= "INSERT INTO Speaker (eventID,speaker,finalScore,squad)
				VALUES ($_POST id,$_POST speaker,$_POST finalScore,$_POST squad)";
?>
