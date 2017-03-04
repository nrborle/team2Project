<?php

  $listOfParticipantScores_P1 = $_SESSION["listOfParticipantScores_P1"];
  $listOfParticipantScores_I1 = $_SESSION["listOfParticipantScores_I1"];
  $listOfParticipantScores_P2 = $_SESSION["listOfParticipantScores_P2"];
  $listOfParticipantScores_I2 = $_SESSION["listOfParticipantScores_I2"];
  $listOfParticipantScores_P3 = $_SESSION["listOfParticipantScores_P3"];
  $listOfParticipantScores_I3 = $_SESSION["listOfParticipantScores_I3"];

  $participantTimeFaults = $_SESSION["participantTimeFaults"];
  echo "<script>";
  echo include("TJ-6.js")

  $participantWeightedScore = array();
  $participantWeightedScoreP1 = array();
  $participantWeightedScoreI1 = array();
  $participantWeightedScoreP2 = array();
  $participantWeightedScoreI2 = array();
  $participantWeightedScoreP3 = array();
  $participantWeightedScoreI3 = array();

  //Loop for P1
  for ($i=0; $i < 15; $i++) {
    echo "var weightedScore1 weight(".$listOfParticipantScores_P1[$i][0].",4)";
    echo "var weightedScore2 weight(".$listOfParticipantScores_P1[$i][1].",4)";
    echo "var weightedScore3 weight(".$listOfParticipantScores_P1[$i][2].",5)";
    echo "var weightedScore4 weight(".$listOfParticipantScores_P1[$i][3].",5)";
    echo "var weightedScore5 weight(".$listOfParticipantScores_P1[$i][4].",5)";
    echo "var weightedScore6 weight(".$listOfParticipantScores_P1[$i][5].",5)";
    echo "var weightedScore7 weight(".$listOfParticipantScores_P1[$i][6].",5)";
    echo "var weightedScore8 weight(".$listOfParticipantScores_P1[$i][7].",5)";
    echo "var weightedScore9 weight(".$listOfParticipantScores_P1[$i][8].",2)";
    echo "var weightedScore10 weight(".$listOfParticipantScores_P1[$i][9].",3)";
    echo "var weightedScore11 weight(".$listOfParticipantScores_P1[$i][10].",3)";
    echo "var weightedScore12 weight(".$listOfParticipantScores_P1[$i][11].",10)";
    echo "var weightedScore13 weight(".$listOfParticipantScores_P1[$i][12].",10)";
    echo "var weightedScore14 weight(".$listOfParticipantScores_P1[$i][13].",10)";
    $participantWeightedScoreP1[$i] = echo "weightedScore1 + weightedScore2 + weightedScore3 + weightedScore4 + weightedScore5 + weightedScore6 + weightedScore7 + weightedScore8 + weightedScore9 + weightedScore10 + weightedScore11 + weightedScore12 + weightedScore13 + weightedScore14 + weightedScore15";
  }

  //Loop for I1
  for ($i=0; $i < 15; $i++) {
    echo "var weightedScore1 weight(".$listOfParticipantScores_I1[$i][0].",2)";
    echo "var weightedScore2 weight(".$listOfParticipantScores_I1[$i][1].",1)";
    echo "var weightedScore3 weight(".$listOfParticipantScores_I1[$i][2].",1)";
    echo "var weightedScore4 weight(".$listOfParticipantScores_I1[$i][3].",1)";
    echo "var weightedScore5 weight(".$listOfParticipantScores_I1[$i][4].",2)";
    echo "var weightedScore6 weight(".$listOfParticipantScores_I1[$i][5].",2)";
    echo "var weightedScore7 weight(".$listOfParticipantScores_I1[$i][6].",2)";
    echo "var weightedScore8 weight(".$listOfParticipantScores_I1[$i][7].",1)";
    echo "var weightedScore9 weight(".$listOfParticipantScores_I1[$i][8].",1)";
    echo "var weightedScore10 weight(".$listOfParticipantScores_I1[$i][9].",1)";
    echo "var weightedScore11 weight(".$listOfParticipantScores_I1[$i][10].",1)";
    echo "var weightedScore12 weight(".$listOfParticipantScores_I1[$i][11].",3)";
    echo "var weightedScore13 weight(".$listOfParticipantScores_I1[$i][12].",3)";
    echo "var weightedScore14 weight(".$listOfParticipantScores_I1[$i][13].",3)";
    $participantWeightedScoreI1[$i] = echo "weightedScore1 + weightedScore2 + weightedScore3 + weightedScore4 + weightedScore5 + weightedScore6 + weightedScore7 + weightedScore8 + weightedScore9 + weightedScore10 + weightedScore11 + weightedScore12 + weightedScore13 + weightedScore14 + weightedScore15";
  }

  //Loop for P2
  for ($i=0; $i < 15; $i++) {
    echo "var weightedScore1 weight(".$listOfParticipantScores_P2[$i][0].",4)";
    echo "var weightedScore2 weight(".$listOfParticipantScores_P2[$i][1].",4)";
    echo "var weightedScore3 weight(".$listOfParticipantScores_P2[$i][2].",5)";
    echo "var weightedScore4 weight(".$listOfParticipantScores_P2[$i][3].",5)";
    echo "var weightedScore5 weight(".$listOfParticipantScores_P2[$i][4].",5)";
    echo "var weightedScore6 weight(".$listOfParticipantScores_P2[$i][5].",5)";
    echo "var weightedScore7 weight(".$listOfParticipantScores_P2[$i][6].",5)";
    echo "var weightedScore8 weight(".$listOfParticipantScores_P2[$i][7].",5)";
    echo "var weightedScore9 weight(".$listOfParticipantScores_P2[$i][8].",2)";
    echo "var weightedScore10 weight(".$listOfParticipantScores_P2[$i][9].",3)";
    echo "var weightedScore11 weight(".$listOfParticipantScores_P2[$i][10].",3)";
    echo "var weightedScore12 weight(".$listOfParticipantScores_P2[$i][11].",10)";
    echo "var weightedScore13 weight(".$listOfParticipantScores_P2[$i][12].",10)";
    echo "var weightedScore14 weight(".$listOfParticipantScores_P2[$i][13].",10)";
    $participantWeightedScoreP2[$i] = echo "weightedScore1 + weightedScore2 + weightedScore3 + weightedScore4 + weightedScore5 + weightedScore6 + weightedScore7 + weightedScore8 + weightedScore9 + weightedScore10 + weightedScore11 + weightedScore12 + weightedScore13 + weightedScore14 + weightedScore15";
  }

  //Loop for I2
  for ($i=0; $i < 15; $i++) {
    echo "var weightedScore1 weight(".$listOfParticipantScores_I2[$i][0].",2)";
    echo "var weightedScore2 weight(".$listOfParticipantScores_I2[$i][1].",1)";
    echo "var weightedScore3 weight(".$listOfParticipantScores_I2[$i][2].",1)";
    echo "var weightedScore4 weight(".$listOfParticipantScores_I2[$i][3].",1)";
    echo "var weightedScore5 weight(".$listOfParticipantScores_I2[$i][4].",2)";
    echo "var weightedScore6 weight(".$listOfParticipantScores_I2[$i][5].",2)";
    echo "var weightedScore7 weight(".$listOfParticipantScores_I2[$i][6].",2)";
    echo "var weightedScore8 weight(".$listOfParticipantScores_I2[$i][7].",1)";
    echo "var weightedScore9 weight(".$listOfParticipantScores_I2[$i][8].",1)";
    echo "var weightedScore10 weight(".$listOfParticipantScores_I2[$i][9].",1)";
    echo "var weightedScore11 weight(".$listOfParticipantScores_I2[$i][10].",1)";
    echo "var weightedScore12 weight(".$listOfParticipantScores_I2[$i][11].",3)";
    echo "var weightedScore13 weight(".$listOfParticipantScores_I2[$i][12].",3)";
    echo "var weightedScore14 weight(".$listOfParticipantScores_I2[$i][13].",3)";
    $participantWeightedScoreI2[$i] = echo "weightedScore1 + weightedScore2 + weightedScore3 + weightedScore4 + weightedScore5 + weightedScore6 + weightedScore7 + weightedScore8 + weightedScore9 + weightedScore10 + weightedScore11 + weightedScore12 + weightedScore13 + weightedScore14 + weightedScore15";
  }

  //Loop for P3
  for ($i=0; $i < 15; $i++) {
    echo "var weightedScore1 weight(".$listOfParticipantScores_P3[$i][0].",4)";
    echo "var weightedScore2 weight(".$listOfParticipantScores_P3[$i][1].",4)";
    echo "var weightedScore3 weight(".$listOfParticipantScores_P3[$i][2].",5)";
    echo "var weightedScore4 weight(".$listOfParticipantScores_P3[$i][3].",5)";
    echo "var weightedScore5 weight(".$listOfParticipantScores_P3[$i][4].",5)";
    echo "var weightedScore6 weight(".$listOfParticipantScores_P3[$i][5].",5)";
    echo "var weightedScore7 weight(".$listOfParticipantScores_P3[$i][6].",5)";
    echo "var weightedScore8 weight(".$listOfParticipantScores_P3[$i][7].",5)";
    echo "var weightedScore9 weight(".$listOfParticipantScores_P3[$i][8].",2)";
    echo "var weightedScore10 weight(".$listOfParticipantScores_P3[$i][9].",3)";
    echo "var weightedScore11 weight(".$listOfParticipantScores_P3[$i][10].",3)";
    echo "var weightedScore12 weight(".$listOfParticipantScores_P3[$i][11].",10)";
    echo "var weightedScore13 weight(".$listOfParticipantScores_P3[$i][12].",10)";
    echo "var weightedScore14 weight(".$listOfParticipantScores_P3[$i][13].",10)";
    $participantWeightedScoreP3[$i] = echo "weightedScore1 + weightedScore2 + weightedScore3 + weightedScore4 + weightedScore5 + weightedScore6 + weightedScore7 + weightedScore8 + weightedScore9 + weightedScore10 + weightedScore11 + weightedScore12 + weightedScore13 + weightedScore14 + weightedScore15";
  }

  //Loop for I3
  for ($i=0; $i < 15; $i++) {
    echo "var weightedScore1 weight(".$listOfParticipantScores_I3[$i][0].",2)";
    echo "var weightedScore2 weight(".$listOfParticipantScores_I3[$i][1].",1)";
    echo "var weightedScore3 weight(".$listOfParticipantScores_I3[$i][2].",1)";
    echo "var weightedScore4 weight(".$listOfParticipantScores_I3[$i][3].",1)";
    echo "var weightedScore5 weight(".$listOfParticipantScores_I3[$i][4].",2)";
    echo "var weightedScore6 weight(".$listOfParticipantScores_I3[$i][5].",2)";
    echo "var weightedScore7 weight(".$listOfParticipantScores_I3[$i][6].",2)";
    echo "var weightedScore8 weight(".$listOfParticipantScores_I3[$i][7].",1)";
    echo "var weightedScore9 weight(".$listOfParticipantScores_I3[$i][8].",1)";
    echo "var weightedScore10 weight(".$listOfParticipantScores_I3[$i][9].",1)";
    echo "var weightedScore11 weight(".$listOfParticipantScores_I3[$i][10].",1)";
    echo "var weightedScore12 weight(".$listOfParticipantScores_I3[$i][11].",3)";
    echo "var weightedScore13 weight(".$listOfParticipantScores_I3[$i][12].",3)";
    echo "var weightedScore14 weight(".$listOfParticipantScores_I3[$i][13].",3)";
    $participantWeightedScoreI3[$i] = echo "weightedScore1 + weightedScore2 + weightedScore3 + weightedScore4 + weightedScore5 + weightedScore6 + weightedScore7 + weightedScore8 + weightedScore9 + weightedScore10 + weightedScore11 + weightedScore12 + weightedScore13 + weightedScore14 + weightedScore15";
  }

  //TOTAL SCORES CALCULATED HERE
  $participantTotalList = array();
  for ($i=0; $i < 15; $i++) {
    $participantTotalList[$i] = $participantWeightedScoreP1[$i] + $participantWeightedScoreI1[$i] + $participantWeightedScoreP2[$i] + $participantWeightedScoreI2[$i] + $participantWeightedScoreP3[$i] + $participantWeightedScoreI3[$i];
  }

  echo "</script>";

  $_SESSION["participantTotalList"] = $participantTotalList;

 ?>
