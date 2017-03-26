
<?php

function getTimeFaults($speechType, $min, $sec){
    $s = $sec + $min*60;
if (strcmp($speechType, "Prepared")==0){
  if ($s >= 300 && $s <= 360) return 0;
  // if speech is between 5 and 6 min inclusive, no faults
  else if (($s >= 295 && $s < 300) || ($s <= 365 && $s > 360)) return 1;
  else if (($s >= 290 && $s < 295) || ($s <= 370 && $s > 365)) return 2;
  else if (($s >= 285 && $s < 290) || ($s <= 375 && $s > 370)) return 3;
  else if (($s >= 280 && $s < 285) || ($s <= 380 && $s > 375)) return 4;
  else if (($s >= 275 && $s < 280) || ($s <= 385 && $s > 380)) return 5;
  else if (($s >= 270 && $s < 275) || ($s <= 390 && $s > 385)) return 6;
  else return 7;
}
else{
  if ($s >= 120 && $s <= 180) return 0;
  else if (($s >= 115 && $s < 120) || ($s <= 185 && $s > 180)) return 1;
  else if (($s >= 110 && $s < 115) || ($s <= 190 && $s > 185)) return 2;
  else return 3;
}
}

/*
//Tests
$type = "Prepared";

//should be 7 points
echo "For a 7-minute prepared speech, time fault is " . getTimeFaults($type, 6, 12) . ".<br />";
//should be 3 points
echo "For a 386-second prepared speech, time fault is " .getTimeFaults($type, 0, 295) . ".<br />";
//should be 0 points
echo "For a 386-second prepared speech, time fault is " .getTimeFaults($type, 0, 295) . ".<br />";
$type="Impromptu";
//should be 0 points
echo "For a 2 minute, 5 second impromptu speech, time fault is " .getTimeFaults($type, 2, 12) . ".<br />";
echo "For a 96-second impromptu speech, time fault is " .getTimeFaults($type, 0, 96) . ".";
*/
?>
