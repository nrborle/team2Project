<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title>Ranked leaderboard</title>
</head>
<body>
	<?php
	// test data for now
		//$participantList = array("bob","jon","chris","steve","cole","matt","bob","jone","karl","steph","lee","mark","cj","jo","lane");
		//$score = array("13","42","33","24","1","13","41","14","33","14","1","43","34","54","23");

	#will get real values from here
		$_SESSION["participantList"] = $participantList;
		$_SESSION["participantTotalList"] = $score;
	?>

	<script>
	// will sort by the second value in array
		function sortbysecond(a, b) {
		    if (a[1] === b[1]) {
		        return 0;
		    }else {
		        return (a[1] < b[1]) ? -1 : 1;
		    }
		}

	// convert php into JS
	var participantList = <?php echo json_encode($participantList); ?>;
	var score = <?php echo json_encode($score); ?>;
	var a = [];

	  	for(var i=0; i < participantList.length; i++){
			a[i] = [participantList[i],score[i]];
		}

		

		var sorted = a.sort(sortbysecond);
		var reverse = sorted.reverse(sortbysecond);
		
	</script>
	
<section id="results">
<table>
	<caption>Final Results</caption>
	<thead><tr><th>Rank</th><th>Speaker Name</th><th>Score</th></tr></thead>
	<tr>
		<td>1</td>
		<td id="participant_name_0"><script>document.write(reverse[0][0]);</script></td>
		<td id="particpant_score_0"><script>document.write(reverse[0][1]);</script></td>
	</tr>
	<tr>
		<td>2</td>
		<td id="participant_name_1"><script>document.write(reverse[1][0]);</script></td>
		<td id="particpant_score_1"><script>document.write(reverse[1][1]);</script></td>
	</tr>
	<tr>
		<td>3</td>
		<td id="participant_name_2"><script>document.write(reverse[2][0]);</script></td>
		<td id="particpant_score_2"><script>document.write(reverse[2][1]);</script></td>
	</tr>
	<tr>
		<td>4</td>
		<td id="participant_name_0"><script>document.write(reverse[3][0]);</script></td>
		<td id="particpant_score_0"><script>document.write(reverse[3][1]);</script></td>
	</tr>
	<tr>
		<td>5</td>
		<td id="participant_name_3"><script>document.write(reverse[4][0]);</script></td>
		<td id="particpant_score_3"><script>document.write(reverse[4][1]);</script></td>
	</tr>
	<tr>
		<td>6</td>
		<td id="participant_name_4"><script>document.write(reverse[5][0]);</script></td>
		<td id="particpant_score_4"><script>document.write(reverse[5][1]);</script></td>
	</tr>
	<tr>
		<td>7</td>
		<td id="participant_name_5"><script>document.write(reverse[6][0]);</script></td>
		<td id="particpant_score_5"><script>document.write(reverse[6][1]);</script></td>
	</tr>
	<tr>
		<td>8</td>
		<td id="participant_name_6"><script>document.write(reverse[7][0]);</script></td>
		<td id="particpant_score_6"><script>document.write(reverse[7][1]);</script></td>
	</tr>
	<tr>
		<td>9</td>
		<td id="participant_name_7"><script>document.write(reverse[8][0]);</script></td>
		<td id="particpant_score_7"><script>document.write(reverse[8][1]);</script></td>
	</tr>
	<tr>
		<td>10</td>
		<td id="participant_name_8"><script>document.write(reverse[9][0]);</script></td>
		<td id="particpant_score_8"><script>document.write(reverse[9][1]);</script></td>
	</tr>
	<tr>
		<td>11</td>
		<td id="participant_name_9"><script>document.write(reverse[10][0]);</script></td>
		<td id="particpant_score_9"><script>document.write(reverse[10][1]);</script></td>
	</tr>
	<tr>
		<td>12</td>
		<td id="participant_name_10"><script>document.write(reverse[11][0]);</script></td>
		<td id="particpant_score_10"><script>document.write(reverse[11][1]);</script></td>
	</tr>
	<tr>
		<td>13</td>
		<td id="participant_name_11"><script>document.write(reverse[12][0]);</script></td>
		<td id="particpant_score_12"><script>document.write(reverse[12][1]);</script></td>
	</tr>
	<tr>
		<td>14</td>
		<td id="participant_name_13"><script>document.write(reverse[13][0]);</script></td>
		<td id="particpant_score_13"><script>document.write(reverse[13][1]);</script></td>
	</tr>
	<tr>
		<td>15</td>
		<td id="participant_name_14"><script>document.write(reverse[14][0]);</script></td>
		<td id="particpant_score_14"><script>document.write(reverse[14][1]);</script></td>
	</tr>

</table>
</section>


