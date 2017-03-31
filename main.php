<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}else {
	if (!isset($_SESSION['username'])) {
		header('Location: php/login.php');
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Timekeeper</title>
<link rel="stylesheet" href="css/style.css"/>
<script src="scripts/navigator.js"></script>
</head>
<body>

	<nav>
		<ul>
			<li id="event_link"><a href='#'>Event Details</a></li>
			<li id="speakers_link"><a href="#">Speakers</a></li>
			<li id="timekeeper_link"><a href="#">Timekeeper</a></li>
			<li >Scoresheets
				<ul class="sub-menu">
					<li id="J1_P_link"><a href="#">Judge 1 Prepared Scoresheet</a></li>
					<li id="J1_I_link"><a href="#">Judge 1 Impromptu Scoresheet</a></li>
					<li id="J2_P_link"><a href="#">Judge 2 Prepared Scoresheet</a></li>
					<li id="J2_I_link"><a href="#">Judge 2 Impromptu Scoresheet</a></li>
					<li id="J3_P_link"><a href="#">Judge 3 Prepared Scoresheet</a></li>
					<li id="J3_I_link"><a href="#">Judge 3 Impromptu Scoresheet</a></li>
				</ul>
			</li>
			<li id="results_link"><a href="#">Results</a></li>
		</ul>
	</nav>

<form action="formData.php" method="post">
<?php
include "php/eventDetails.php";
include "php/participantList.php";
include "php/timekeeperForm.php";
include "php/scoreSheet.php";
include "php/insertIntoDB.php";

printScoreSheet(1, "P", false);
printScoreSheet(1, "I", false);
printScoreSheet(2, "P", false);
printScoreSheet(2, "I", false);
printScoreSheet(3, "P", false);
printScoreSheet(3, "I", false);

include "php/resultsTable.php";

?>

<button type="submit">Submit</button>
</form>

<script src="scripts/TJ-7_score_calculator.js"></script>
<br><br>
<a href='php/logout.php'>Logout</a>
</body>
</html>
