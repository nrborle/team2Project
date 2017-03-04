<?php
  /*
  This file is suppsoed to get data from both timekeeper files
  and then uses TJ-8 to calculate time faults.
  Then store it all in an array and put that to session.
  */

  echo "<script>";
  echo include("../scripts/TJ-8.js");

  if (strcmp($_POST["formName"],"TK1") {
    $doneTK1 = 1;
    $TK1_Min_and_Sec = array();
    $TK1_List = array();
    for ($i=0; $i < 15; $i++) {
      $currentMin = $_POST["R".$i."C0"];
      $currentSec = $_POST["R".$i."C1"];
      $TK1_Min_and_Sec[0] = $currentMin;
      $TK1_Min_and_Sec[1] = $currentSec;
      $TK1_List[$i] =$TK1_Min_and_Sec;
    }
    header("Location: timekeeperForm2.html");
  } elseif (strcmp($_POST["formName"],"TK2") {
    $doneTK2 = 1;
    $TK2_Min_and_Sec = array();
    $TK2_List = array();
    for ($i=0; $i < 15; $i++) {
      $currentMin = $_POST["R".$i."C0"];
      $currentSec = $_POST["R".$i."C1"];
      $TK2_Min_and_Sec[0] = $currentMin;
      $TK2_Min_and_Sec[1] = $currentSec;
      $TK2_List[$i] =$TK2_Min_and_Sec;
    }
  }


  //if TK1 and TK2 have happened, do the calculation.
  if ($doneTK1 == 1 && $doneTK2 == 1) {
    $participantTimeFaults = array();

    for ($i=0; $i < 15; $i++) {
      echo "var = participant".$i+1."Time"." toSeconds("$TK1_List[$i][0].",".$TK1_List[$i][1]",".$TK2_List[$i][0].",".$TK1_List[$i][1].")";
      echo "participant".$i+1."TimeFault = "."prepTimeFaults(participant".$i+1."Time".")";
      $participantTimeFaults[$i] = echo "participant".$i+1."TimeFault";
    }
    echo "</script>";

    $_SESSION["participantTimeFaults"] = $participantTimeFaults
    header("Location: performCalculation.php");
  }
 ?>
