<!DOCTYPE html>
<html>
<head>
<style>
	table, td{border: solid 1px black;}
	.cell {width: 3em; border: none;}
</style>
</head>
<body>

<?php
  //FUNCTIONS
  function buildForm($f,$j){
    echo "<form method='post' action='scoreData.php' id='".$f.$j."'>";
    echo include("../scoreSheet.html");
    echo "</form>";
  }
 ?>

<?php
  $currentForm = $_GET["form"];
  $currentJudge = $_GET["judge"];

	$_SESSION["currentForm"] = $currentForm;
	$_SESSION["currentJudge"] = $currentJudge;

  buildForm($currentForm, $currentJudge);
 ?>
</body>
</html>
