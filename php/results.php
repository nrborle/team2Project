<!--


	<tr><td>1</td><td id="participant_name_0"><?php echo $_POST['P1']; ?></td><td id="particpant_score_0"><?php echo $grandTotal[0]; ?></td></tr>
	<tr><td>2</td><td id="participant_name_1"><?php echo $_POST['P2']; ?></td><td id="particpant_score_1"><?php echo $grandTotal[1]; ?></td></tr>
	<tr><td>3</td><td id="participant_name_2"><?php echo $_POST['P3']; ?></td><td id="particpant_score_2"><?php echo $grandTotal[2]; ?></td></tr>
	<tr><td>4</td><td id="participant_name_3"><?php echo $_POST['P4']; ?></td><td id="particpant_score_3"><?php echo $grandTotal[3]; ?></td></tr>
	<tr><td>5</td><td id="participant_name_4"><?php echo $_POST['P5']; ?></td><td id="particpant_score_4"><?php echo $grandTotal[4]; ?></td></tr>
	<tr><td>6</td><td id="participant_name_5"><?php echo $_POST['P6']; ?></td><td id="particpant_score_5"><?php echo $grandTotal[5]; ?></td></tr>
	<tr><td>7</td><td id="participant_name_6"><?php echo $_POST['P7']; ?></td><td id="particpant_score_6"><?php echo $grandTotal[6]; ?></td></tr>
	<tr><td>8</td><td id="participant_name_7"><?php echo $_POST['P8']; ?></td><td id="particpant_score_7"><?php echo $grandTotal[7]; ?></td></tr>
	<tr><td>9</td><td id="participant_name_8"><?php echo $_POST['P9']; ?></td><td id="particpant_score_8"><?php echo $grandTotal[8]; ?></td></tr>
	<tr><td>10</td><td id="participant_name_9"><?php echo $_POST['P10']; ?></td><td id="particpant_score_9"><?php echo $grandTotal[9]; ?></td></tr>
	<tr><td>11</td><td id="participant_name_10"><?php echo $_POST['P11']; ?></td><td id="particpant_score_10"><?php echo $grandTotal[10]; ?></td></tr>
	<tr><td>12</td><td id="participant_name_11"><?php echo $_POST['P12']; ?></td><td id="particpant_score_11"><?php echo $grandTotal[11]; ?></td></tr>
	<tr><td>13</td><td id="participant_name_12"><?php echo $_POST['P13']; ?></td><td id="particpant_score_12"><?php echo $grandTotal[12]; ?></td></tr>
	<tr><td>14</td><td id="participant_name_13"><?php echo $_POST['P14']; ?></td><td id="particpant_score_13"><?php echo $grandTotal[13]; ?></td></tr>
	<tr><td>15</td><td id="participant_name_14"><?php echo $_POST['P15']; ?></td><td id="particpant_score_14"><?php echo $grandTotal[14]; ?></td></tr>


//-->

<section id="results">
<table>
<caption>Final Results</caption>
<thead><tr><th>Speaker Name</th><th>Score</th></tr></thead>
<?php
foreach($nameTotalArray as $x=>$x_value){
	echo "<tr></tr><td>$x</td><td>$x_value</td></tr>";
}
?>
</table>
</section>
