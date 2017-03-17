<?php

  session_start();

  $participantList = array();
  $P1 = $_POST["P1"];
  $P2 = $_POST["P2"];
  $P3 = $_POST["P3"];
  $P4 = $_POST["P4"];
  $P5 = $_POST["P5"];
  $P6 = $_POST["P6"];
  $P7 = $_POST["P7"];
  $P8 = $_POST["P8"];
  $P9 = $_POST["P9"];
  $P10 = $_POST["P10"];
  $P11 = $_POST["P11"];
  $P12 = $_POST["P12"];
  $P13 = $_POST["P13"];
  $P14 = $_POST["P14"];
  $P15 = $_POST["P15"];

  $participantList[0] = $P1;
  $participantList[1] = $P2;
  $participantList[2] = $P3;
  $participantList[3] = $P4;
  $participantList[4] = $P5;
  $participantList[5] = $P6;
  $participantList[6] = $P7;
  $participantList[7] = $P8;
  $participantList[8] = $P9;
  $participantList[9] = $P10;
  $participantList[10] = $P11;
  $participantList[11] = $P12;
  $participantList[12] = $P13;
  $participantList[13] = $P14;
  $participantList[14] = $P15;

  $_SESSION["participantList"] = $participantList;

  header("Location: createScoringForm.php?form=p&judge=1");

 ?>
