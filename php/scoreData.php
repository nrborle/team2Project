<?php

  /*
  Loop through and make an array which contains the scores
  for a participant. Then loop for each aprticipant. This builds
  an array of arrays which will have all the scores for a particular
  form. This happens for each all 6 forms.
  */

  if (strcmp($_SESSION["currentForm"],"p") && strcmp($_SESSION["currentJudge"],"1") {
    buildListOfParticipants("P","1");
    header("Location: createScoringForm.php?form=i?judge=1");
  }
  elseif (strcmp($_SESSION["currentForm"],"i") && strcmp($_SESSION["currentJudge"],"1") {
    buildListOfParticipants("I","1");
    header("Location: createScoringForm.php?form=p?judge=2");
  }
  elseif (strcmp($_SESSION["currentForm"],"p") && strcmp($_SESSION["currentJudge"],"2") {
    buildListOfParticipants("P","2");
    header("Location: createScoringForm.php?form=i?judge=2");
  }
  elseif (strcmp($_SESSION["currentForm"],"i") && strcmp($_SESSION["currentJudge"],"2") {
    buildListOfParticipants("I","2");
    header("Location: createScoringForm.php?form=p?judge=3");
  }
  elseif (strcmp($_SESSION["currentForm"],"p") && strcmp($_SESSION["currentJudge"],"3") {
    buildListOfParticipants("P","3");
    header("Location: createScoringForm.php?form=i?judge=3");
  }
  elseif (strcmp($_SESSION["currentForm"],"i") && strcmp($_SESSION["currentJudge"],"3") {
    buildListOfParticipants("I","3");
    header("Location: ../timekeeperForm1.html");
  }
  else {
    //ERROR
  }
?>

<?php
  //FUNCTIONS
  function buildListOfParticipants($type, $num){
    $listOfParticipantScores = array();
    $participantScore = array();
    for ($c=0; $c < 15; $c++) {
      for ($r=0; $r < 14; $r++) {
        $participantScore[r] = $_POST["R".$r."C".$c];
      }
      $listOfParticipantScores[c] = $participantScore;
    }
    session_start();
    $_SESSION["listOfParticipantScores_".$type.$num] = $listOfParticipantScores;
  }
 ?>
