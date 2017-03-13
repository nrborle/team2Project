<?php

  //initialize weight values for speech types
  $weightValuesPrepared = array(4, 4, 5, 5, 5, 5, 5, 5, 2, 3, 3, 10, 10, 10);
  $weightValuesImprompt = array(2, 1, 1, 1, 2, 2, 2, 1, 1, 1, 1, 3, 3, 3);

  //initialize new arrayy of weighted scores
  $weightedScores = array((array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))));

  //test case, delete from production code
  $testScores = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];

  //test case, delete from production code
  echo(applyWeight($testScores, 14, 2, 1)[14][2][1][0]);

  // echo($weightedScores[14][2][1][0]);


  //this function accepts the array to be weighted, and the array's indexes as an argument, applies the correct weighting and puts the weighted value into
  //a new array with the correct indexes.
  function applyWeight($arr, $participant, $judge, $speechtype){

    for($i = 0; $i<count($arr); $i++){
      if($speechtype == 0){
        $GLOBALS['weightedScores'][$participant][$judge][$speechtype][$i] = ($arr[$i]/10)*$GLOBALS['weightValuesPrepared'][$i];

      }if($speechtype == 1){
        $GLOBALS['weightedScores'][$participant][$judge][$speechtype][$i] = ($arr[$i]/10)*$GLOBALS['weightValuesImprompt'][$i];

      }else{
        echo("error");
      }
    }

    return $GLOBALS['weightedScores'];

  }

//   $testarr = [][][];
// $testarr[2][2][2] = 4;
//   echo($testarr[2][2][2]);

?>
