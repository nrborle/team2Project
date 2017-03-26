<!DOCTYPE html>
<html>
<body>
<h1>getTimeFaults</h1>

<?php

//testing of JS methods from file TJ-8.js, converted to PHP
function prepTimeFaults($s){
                if              ($s >= 300 && $s <= 360) return 0;
                // if speech is between 5 and 6 min inclusive, no faults
                else if     (($s >= 295 && $s < 300) || ($s <= 365 && $s > 360)) return 1;
                else if     (($s >= 290 && $s < 295) || ($s <= 370 && $s > 365)) return 2;
                else if     (($s >= 285 && $s < 290) || ($s <= 375 && $s > 370)) return 3;
                else if     (($s >= 280 && $s < 285) || ($s <= 380 && $s > 375)) return 4;
                else if     (($s >= 275 && $s < 280) || ($s <= 385 && $s > 380)) return 5;
                else if     (($s >= 270 && $s < 275) || ($s <= 390 && $s > 385)) return 6;
                else return 7;
}

//apply faults to impromptu speech given handbook guidelines & time in seconds
function imprTimeFaults($s){
                if              ($s >= 120 && $s <= 180) return 0;
                else if     (($s >= 115 && $s < 120) || ($s <= 185 && $s > 180)) return 1;
                else if     (($s >= 110 && $s < 115) || ($s <= 190 && $s > 185)) return 2;
                else return 3;
}

//convert scores from the two timekeepers to seconds, and average
function toSeconds($min1, $sec1, $min2, $sec2){
                return round(($min1*60 + $sec1 + $min2*60 + $sec2)/2);
}

//should be 123 seconds
echo " Average of 2 min 4 sec and 2 min 2 sec is ". toSeconds(2, 4, 2, 2) . " seconds.<br/>";

//should be 0 faults
echo "For a 7-minute prepared speech, time fault is " . prepTimeFaults(toSeconds(6, 12, 6, 14)) . ".<br />";

//should be 3 points
echo "For a 386-second prepared speech, time fault is " .prepTimeFaults(toSeconds(0, 386, 0, 386)) . ".<br />";

//should be 0 points
echo "For a 2 minute, 5 second impromptu speech, time fault is " .imprTimeFaults(toSeconds(2, 12, 2, 14)) . ".<br />";

// should be 3 points
echo "For a 96-second impromptu speech, time fault is " .imprTimeFaults(toSeconds(0, 96, 0, 97)) . ".<br/>";

// should be 2 points
echo "For a 113-second impromptu speech, time fault is " .imprTimeFaults(toSeconds(0, 113, 0, 113)) . ".";











?>

</body>
</html>
