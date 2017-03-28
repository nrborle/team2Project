<?php
	/*
	echo "<table>";
	echo "<thead><tr><th>Rank</th><th>Speaker Name</th><th>Score</th></tr></thead>";
	for($i=0; $i < 15; $i++){
		$j = $i + 1;
		echo "<tr><td>".$j."</td><td id=\"participant_name_".$i."\"></td><td id=\"particpant_score_".$i."\"></td></tr>";

	}
	echo "</table>";
	*/

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}else {
		if (!isset($_SESSION['username'])) {
			header('Location: php/login.php');
		}
	}

?>
<section id="results">
<table>
	<caption>Score Before Time Faults</caption>
	<thead><tr><th>Rank</th><th>Speaker Name</th><th>Score</th></tr></thead>
	<tr class = "alternate1"><td>1</td><td id="participant_name_0"></td><td id="participant_score_0"></td></tr>
	<tr class = "alternate2"><td>2</td><td id="participant_name_1"></td><td id="participant_score_1"></td></tr>
	<tr class = "alternate1"><td>3</td><td id="participant_name_2"></td><td id="participant_score_2"></td></tr>
	<tr class = "alternate2"><td>4</td><td id="participant_name_3"></td><td id="participant_score_3"></td></tr>
	<tr class = "alternate1"><td>5</td><td id="participant_name_4"></td><td id="participant_score_4"></td></tr>
	<tr class = "alternate2"><td>6</td><td id="participant_name_5"></td><td id="participant_score_5"></td></tr>
	<tr class = "alternate1"><td>7</td><td id="participant_name_6"></td><td id="participant_score_6"></td></tr>
	<tr class = "alternate2"><td>8</td><td id="participant_name_7"></td><td id="participant_score_7"></td></tr>
	<tr class = "alternate1"><td>9</td><td id="participant_name_8"></td><td id="participant_score_8"></td></tr>
	<tr class = "alternate2"><td>10</td><td id="participant_name_9"></td><td id="participant_score_9"></td></tr>
	<tr class = "alternate1"><td>11</td><td id="participant_name_10"></td><td id="participant_score_10"></td></tr>
	<tr class = "alternate2"><td>12</td><td id="participant_name_11"></td><td id="participant_score_11"></td></tr>
	<tr class = "alternate1"><td>13</td><td id="participant_name_12"></td><td id="participant_score_12"></td></tr>
	<tr class = "alternate2"><td>14</td><td id="participant_name_13"></td><td id="participant_score_13"></td></tr>
	<tr class = "alternate1"><td>15</td><td id="participant_name_14"></td><td id="participant_score_14"></td></tr>
</table>
</section>
