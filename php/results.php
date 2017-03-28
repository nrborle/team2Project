

<section id="results">
<table>
<caption>Final Results</caption>
<thead><tr><th>Speaker Name</th><th>Score</th><th>Squadron</th></tr></thead>
<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}else {
	if (!isset($_SESSION['username'])) {
		header('Location: php/login.php');
	}
}
foreach($nameTotalArray as $x=>$x_value){
	//Patch to fix phantom participant bug (FIXED)
	if ($x != "" || $x != null) {
		echo "<tr></tr><td>$x</td><td>$x_value[0]</td><td>$x_value[1]</td></tr>";
	}
}
?>
</table>
</section>
