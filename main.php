<?php
	//pre-checking stuff to load any saved data will go here
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
		</ul>
	</nav>

<form action="formData.php" method="post">

<?php
include "php/participantList.php";
include "php/timekeeperForm.php";
include "php/scoreSheet.php";

printScoreSheet(1, "P", false);
printScoreSheet(1, "I", false);
printScoreSheet(2, "P", false);
printScoreSheet(2, "I", false);
printScoreSheet(3, "P", false);
printScoreSheet(3, "I", false);

include "php/results.php";

?>
<!-- <input type="number" name="J0PR0C0"> -->
<input type="submit" value="Submit">
</form>
</body>
</html>
