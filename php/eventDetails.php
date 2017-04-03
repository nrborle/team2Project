<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}else {
	if (!isset($_SESSION['username'])) {
		header('Location: php/login.php');
	}
}
 ?>

<html>
<section id="event">
  <fieldset>
		<legend>Enter the details for the event below</legend>
		<table>
		<tr>
			<td>Date</td>
			<td><input type="date" name="event_date" id="event_date"></td>
		</tr>
		<tr>
		<td>Level</td>
		<td><input type="text" name="event_level" id="event_level"></td>
		</tr>
		<tr>
		<td>Location</td>
		<td><input type="text" name="event_location" id="event_location"></td>
    	</tr>
		<tr>
			<td>Teller</td>
			<td><input type="text" name="event_teller" id="event_teller"></td>
		</tr>
		<tr>
			<td>Timekeeper 1</td>
			<td><input type="text" name="event_timekeeper1" id="event_timekeeper1"></td>
		</tr>
		<tr>
			<td>Timekeeper 2</td>
			<td><input type="text" name="event_timekeeper2" id="event_timekeeper2"></td>
		</tr>
		<tr>
			<td>Judge 1</td>
			<td><input type="text" name="event_judge1" id="event_judge1"></td>
		</tr>
		<tr>
			<td>Judge 2</td>
			<td><input type="text" name="event_judge2" id="event_judge2"></td>
		</tr>
		<tr>
			<td>Judge 3</td>
			<td><input type="text" name="event_judge3" id="event_judge3"></td>
		</tr>
	</table>
  </fieldset>
</section>
</html>
