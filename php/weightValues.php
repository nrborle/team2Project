<?php

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}else {
	if (!isset($_SESSION['username'])) {
		header('Location: php/login.php');
	}
}

// phpinfo();
  // Variables
  $cell = null;
  $unweighted = [[[[]]]];

  // This function takes in the input from the judge scores form and arranges it into a 4D array
  function inputData()
  {
    for($p=0;$p<=14;$p++)
    {
      for($j=0;$j<=2;$j++)
        {
          for($s=0;$s<=1;$s++)
            {
              for($i=0;$i<=13;$i++)
                {
                  $jj = $j + 1;
                  if($s == 0){
                    $GLOBALS['unweighted'][$p][$j][$s][$i] = $_POST["J".$jj."PR".$i."C".$p];
                  }elseif($s == 1){
                    $GLOBALS['unweighted'][$p][$j][$s][$i] = $_POST["J".$jj."IR".$i."C".$p];
                  }else{
                    var_dump($s == 0);
                  }
                  // $GLOBALS['unweighted'][$p][$j][$s][$i] = $_POST["J1PR0C0"];
                  // echo($_POST["J1PR0C0"]);
                }
            }
        }
    }
  }

  function weighData()
  {
    for($p=0;$p<=14;$p++)
    {
      for($j=0;$j<=2;$j++)
        {
          for($s=0;$s<=1;$s++)
            {
              // $testt = $GLOBALS['unweighted'][0][0][0][0];
              applyWeight($p, $j, $s, $GLOBALS['unweighted'][$p][$j][$s]);
            }
        }
    }
  }
  function sumData()
  {
    $summedScoresTemp = array();
    $summedScoresTemp1 = array();

    $summedScores = array();
    for($p=0;$p<=14;$p++)
    {
      for($j=0;$j<=2;$j++)
        {
          for($s=0;$s<=1;$s++)
            {
              $summedScoresTemp[$s] = array_sum($GLOBALS['weightedScores'][$p][$j][$s]);
            }
            $summedScoresTemp1[$j] = array_sum($summedScoresTemp);
        }
        $summedScores[$p] = array_sum($summedScoresTemp1);
    }
    return $summedScores;
  }

  function displayData()
  {
    for($p=0;$p<=14;$p++)
    {
      for($j=0;$j<=2;$j++)
        {
          for($s=0;$s<=1;$s++)
            {
              for($i=0;$i<=13;$i++)
                {
                  //$unweighted[$p][$j][$s][$i] = $_POST["p".$p."j".$j."s".$s."i".$i];
                  //echo($GLOBALS['weightedScores'][$p][$j][$s][$i]);
                  //echo(" -");
                }
                //echo('Speech Type'."\n");
            }
          //echo('Judge Number'."\n");
        }
        //echo('Participant Number'."\n");
    }
  }



  //_________________________________________________________________________________________________________________________________________________________________________________________________

  //initialize weight values for speech types
  $weightValuesPrepared = array(4, 4, 5, 5, 5, 5, 5, 5, 2, 3, 3, 10, 10, 10);
  $weightValuesImprompt = array(2, 1, 1, 1, 2, 2, 2, 1, 1, 1, 1, 3, 3, 3);

  //initialize new arrayy of weighted scores
  $weightedScores = array((array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))), (array(array(array(), array()), array(array(), array()), array(array(), array()))));

  //test case, delete from production code
//  $testScores = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];

  //test case, delete from production code
//  echo(applyWeight(14, 2, 1, $testScores)[14][2][1][0]);

  // echo($weightedScores[14][2][1][0]);


  //this function accepts the array to be weighted, and the array's indexes as an argument, applies the correct weighting and puts the weighted value into
  //a new array with the correct indexes.
  function applyWeight($participant, $judge, $speechtype, $arr){
    //
    for($i = 0; $i<count($arr); $i++){
      if($speechtype == 1){
        $GLOBALS['weightedScores'][$participant][$judge][$speechtype][$i] = ($arr[$i]/10)*$GLOBALS['weightValuesImprompt'][$i];

      }else{
        $GLOBALS['weightedScores'][$participant][$judge][$speechtype][$i] = ($arr[$i]/10)*$GLOBALS['weightValuesPrepared'][$i];

      }
    }

    return $GLOBALS['weightedScores'];

  }

//   $testarr = [][][];
// $testarr[2][2][2] = 4;
//   echo($testarr[2][2][2]);

inputData();
//echo ($unweighted[1][2][0][4]);
weighData();
//echo "Pre-Time Fault totals:<br><br>";
$sumDataArray = array();
for($i = 0; $i < count(sumData()); $i++){
  //echo("Participant ".$i.": <br>");
  //echo(sumData()[$i]."<br>");
  $sumDataArray[$i] = sumData()[$i];
}

?>
