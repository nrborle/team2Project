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
    Date:<br>
    <input type="date" name="event_date" id="event_date"><br>
    Level:<br>
    <input type="text" name="event_level" id="event_level"><br>
    Location:<br>
    <input type="text" name="event_location" id="event_location"><br>
    <br>
    Teller:<br>
    <input type="text" name="event_teller" id="event_teller"><br>
    Timekeeper 1:<br>
    <input type="text" name="event_timekeeper1" id="event_timekeeper1"><br>
    Timekeeper 2:<br>
    <input type="text" name="event_timekeeper2" id="event_timekeeper2"><br>
    Judge 1:<br>
    <input type="text" name="event_judge1" id="event_judge1"><br>
    Judge 2:<br>
    <input type="text" name="event_judge2" id="event_judge2"><br>
    Judge 3:<br>
    <input type="text" name="event_judge3" id="event_judge3"><br>
  </fieldset>
</section>
</html>
