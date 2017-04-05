<link rel="stylesheet" href="css/style.css"/>

<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}else {
		if (!isset($_SESSION['username'])) {
			header('Location: php/login.php');
		}
	}


include('php/weightValues.php');
//$sumDataArray has weighted data for each speaker at this point.
include('php/getTimeFaults.php');


//DATA FROM TIMEKEEPERS SHEET BELOW
$minuteArray_P = array();
$secondArray_P = array();
$minuteArray_I = array();
$secondArray_I = array();

//Prepare minute and second arrays
for ($i=1; $i <= 15; $i++) {
  $minuteArray_P[$i - 1] = ($_POST["T1_"."$i"."_p_min"] + $_POST["T2_"."$i"."_p_min"])/2;
  $secondArray_P[$i - 1] = ($_POST["T1_"."$i"."_p_sec"] + $_POST["T2_"."$i"."_p_sec"])/2;
  $minuteArray_I[$i - 1] = ($_POST["T1_"."$i"."_i_min"] + $_POST["T2_"."$i"."_i_min"])/2;
  $secondArray_I[$i - 1] = ($_POST["T1_"."$i"."_i_sec"] + $_POST["T1_"."$i"."_i_sec"])/2;
}
$timeFaultValuesArray = array();
for ($i=0; $i <= 14; $i++) {
  $currentPrepFault = getTimeFaults("Prepared", $minuteArray_P[$i], $secondArray_P[$i]);
  $currentImprFault = getTimeFaults("Impromptu", $minuteArray_I[$i], $secondArray_I[$i]);
  $timeFaultValuesArray[$i] = ($currentPrepFault + $currentImprFault)*3;
  //echo "<br><br>".$timeFaultValuesArray[$i];
}
//echo "<hr>";


//Calculating grand totals
$grandTotal = array();

for ($i=0; $i <= 14 ; $i++) {
  $grandTotal[$i] = $sumDataArray[$i] - $timeFaultValuesArray[$i];
  //echo "<br><br>".$grandTotal[$i];
}


//associative array for storing name of speaker with their grand total.
// EXAMPLE: $array=[$one=>['1','2','3'], $two=>['4','5'], $three=>['1']];

//NEW
$nameTotalArray = [
  $_POST['P1'] => [$grandTotal[0],$_POST['S1']],
  $_POST['P2'] => [$grandTotal[1],$_POST['S2']],
  $_POST['P3'] => [$grandTotal[2],$_POST['S3']],
  $_POST['P4'] => [$grandTotal[3],$_POST['S4']],
  $_POST['P5'] => [$grandTotal[4],$_POST['S5']],
  $_POST['P6'] => [$grandTotal[5],$_POST['S6']],
  $_POST['P7'] => [$grandTotal[6],$_POST['S7']],
  $_POST['P8'] => [$grandTotal[7],$_POST['S8']],
  $_POST['P9'] => [$grandTotal[8],$_POST['S9']],
  $_POST['P10'] => [$grandTotal[9],$_POST['S10']],
  $_POST['P11'] => [$grandTotal[10],$_POST['S11']],
  $_POST['P12'] => [$grandTotal[11],$_POST['S12']],
  $_POST['P13'] => [$grandTotal[12],$_POST['S13']],
  $_POST['P14'] => [$grandTotal[13],$_POST['S14']],
  $_POST['P15'] => [$grandTotal[14],$_POST['S15']]
];



/* OLD
$nameTotalArray = array(
  $_POST['P1'] => $grandTotal[0],
  $_POST['P2'] => $grandTotal[1],
  $_POST['P3'] => $grandTotal[2],
  $_POST['P4'] => $grandTotal[3],
  $_POST['P5'] => $grandTotal[4],
  $_POST['P6'] => $grandTotal[5],
  $_POST['P7'] => $grandTotal[6],
  $_POST['P8'] => $grandTotal[7],
  $_POST['P9'] => $grandTotal[8],
  $_POST['P10'] => $grandTotal[9],
  $_POST['P11'] => $grandTotal[10],
  $_POST['P12'] => $grandTotal[11],
  $_POST['P13'] => $grandTotal[12],
  $_POST['P14'] => $grandTotal[13],
  $_POST['P15'] => $grandTotal[14]
);
*/

arsort($nameTotalArray);

include('php/insertIntoDB.php');
include('php/results.php');


 ?>
<a href='main.php'>Return to Main</a>
