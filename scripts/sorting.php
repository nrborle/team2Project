<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title>Ranked leaderboard</title>
</head>
<body>
	<?php
	// test data for now
		//$participantList = array("bob","jon","chris","steve","cole","matt");
		$score = array("13","42","33","24","1","43");

	#will get real values from here
		$_SESSION["participantList"] = $participantList;
		$_SESSION["listOfParticipantScores"] = $score;
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


	var participantList = <?php echo json_encode($participantList); ?>;
	var score = <?php echo json_encode($score); ?>;

	//var participantList = ['a','e','d','c','e'];
	//var score = [1,2,3,4,5];
	var a = [];

	  	for(var i=0; i < participantList.length; i++){
			a[i] = [participantList[i],score[i]];
		}



		var sorted = a.sort(sortbysecond);
		var reverse = sorted.reverse(sortbysecond);

	</script>
	<table>
	<tr>
		<td>
			<script>document.write(reverse[0][0]);</script>
		</td>
		<td>
			<script>document.write(reverse[0][1]);</script>
		</td>
	</tr>
	<tr>
		<td>
			<script>document.write(reverse[1][0]);</script>
		</td>
		<td>
			<script>document.write(reverse[1][1]);</script>
		</td>
	</tr>
	<tr>
		<td>
			<script>document.write(reverse[2][0]);</script>
		</td>
		<td>
			<script>document.write(reverse[2][1]);</script>
		</td>
	</tr>
	<tr>
		<td>
			<script>document.write(reverse[3][0]);</script>
		</td>
		<td>
			<script>document.write(reverse[3][1]);</script>
		</td>
	</tr>
	<tr>
		<td>
			<script>document.write(reverse[4][0]);</script>
		</td>
		<td>
			<script>document.write(reverse[4][1]);</script>
		</td>
	</tr>
	<tr>
		<td>
			<script>document.write(reverse[5][0]);</script>
		</td>
		<td>
			<script>document.write(reverse[5][1]);</script>
		</td>
	</tr>
	<tr>
		<td>
			<script>document.write(reverse[6][0]);</script>
		</td>
		<td>
			<script>document.write(reverse[6][1]);</script>
		</td>
	</tr>
	<tr>
		<td>
			<script>document.write(reverse[6][0]);</script>
		</td>
		<td>
			<script>document.write(reverse[6][1]);</script>
		</td>
	</tr>
	<tr>
		<td>
			<script>document.write(reverse[7][0]);</script>
		</td>
		<td>
			<script>document.write(reverse[7][1]);</script>
		</td>


	</table>
</body>
</html>
