<section id="results">
<table>
<caption>Final Results</caption>
<thead><tr><th>Speaker Name</th><th>Score</th><th>Squadron</th></tr></thead>
<?php
foreach($nameTotalArray as $x=>$x_value){
	//Patch to fix phantom participant bug (FIXED)
	if ($x != "" || $x != null) {
		echo "<tr></tr><td>$x</td><td>$x_value[0]</td><td>$x_value[1]</td></tr>";
	}
}
?>
</table>
</section>
