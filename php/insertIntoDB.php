<?php

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}else {
	if (!isset($_SESSION['username'])) {
		header('Location: php/login.php');
	}
}

include 'connect.php';

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Entering the Event Details
$stmt = $connection->prepare("INSERT INTO event (date,level,location) VALUES (?,?,?)");
$stmt->bind_param("sss", $date, $level, $location);

$date = $_POST['event_date'];
$level = $_POST['event_level'];
$location = $_POST['event_location'];
$stmt->execute();
$eventID = mysqli_insert_id($connection);
// Entering each speakers generic info
$stmt = $connection->prepare("INSERT INTO speaker (eventID, speaker,finalScore,squad) VALUES (?,?,?,?)");
$stmt->bind_param("isss", $eventID, $speaker, $finalScore, $squad);

for($i=1;$i<=15;$i++) {
	$speaker = $_POST['P'.$i];
	$finalScore = '0';
	$squad = $_POST['S'.$i];
	$stmt->execute();
}

//$sql = "INSERT INTO event (id,date,level,location)
//VALUES ($_POST[event_id], $_POST[event_date], $_POST[event_level], $_POST[event_location]);";
//$sql .= "INSERT INTO speaker (eventID,speaker,finalScore,squad)
//VALUES ($_POST[event_id], $_POST[P1], '0', $_POST[S1]);";

//if (mysqli_multi_query($connection, $sql)){
//	echo "Success";
//}
//else {
//	echo "Error" . $sql . "<br>" . mysqli_error($connection);
//}

//mysqli_close($connection);


$stmt->close();
$connection->close();
?>
