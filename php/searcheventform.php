<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}else {
	if (!isset($_SESSION['username'])) {
		header('Location: php/login.php');
	}
}
?>

<!-- html form-->
<!DOCTYPE html>
<html>
   <head lang="en">
      <meta charset="utf-8">
      <title>User Login</title>
      <link rel="stylesheet" href="../css/style.css"/>
      <script type="text/javascript" src="scripts/Validate.js"></script>
      </head>
      <body>
      <center>
        <div class="search">
          <form action="searcheventform.php" method="post" id="mainForm">
          <h1>Enter the following details to search for a previous event</h1>
              Date:<br><br>
              <input type="text" id="date" name="date" class="required" placeholder="ex. 04/01/2017"><br/><br/>
              Level:<br/><br/>
              <input type="text" id=level name="level" class="required" placeholder="ex. Regional"><br/><br/>
              Location:<br/><br/>
              <input type="text" id=location name="location" class="required" placeholder="ex. Kelowna"><br/><br/>
              <input type="submit" name="search" value="search" ><br/><br/>
          </form>
        </div>
      </center>

<?php
  include 'connect.php';

  if(isset($_POST['search'])){
    @$date = $_POST['date'];
    @$level = $_POST['level'];
    @$location = $_POST['location'];
    $count = 0;
    $result=("SELECT * FROM Event WHERE date like '%$date%'and  level like '$level%' and location like '$location%'");
?>

    	<center>
    	  <table  style="width:600px;">
    	  	<tr>
    	  	<th>EventID</th>
    	  	<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EventDate</th>
    	  	<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Level</th>
    	  	<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Location</th>
			<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Winner</th>
			<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FinalScore</th>
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Squad</th>
    	  	</tr>


<?php
		$result1 = mysqli_query($connection,$result) or die(mysql_error());
    		while ($row = mysqli_fetch_assoc($result1)) {
			      $a = $row['date'];
			      $b = $row['level'];
			      $c = $row['location'];
			      @$d = $row['id'];
	      		  echo "<br>";

?>
			      <tr>
			      	<td style="width:20px;"><?php  echo $d;?></td>
			      	<td style="width:20px;"><?php  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$a;?></td>
			      	<td><?php  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$b;?></td>
			      	<td><?php  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$c;?></td>
<?php
			      $count = $count +1;
    		} #ends first while loop

	    $count1 = 0;
	    @$event=("SELECT * FROM Speaker WHERE eventID ='$d' ORDER BY finalScore DESC LIMIT 1 ");

		$event2 = mysqli_query($connection,$event) or die(mysql_error());
	    	if($row = mysqli_fetch_assoc($event2)) {
				  $e = $row['speaker'];
			      $f = $row['finalScore'];
			      $g = $row['squad'];
			      $h = $row['eventID'];
			      $count1 = $count1 +1;
	      		echo "<br>";

?>

			      	<td style="width:20px;"><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$e;?></td>
			      	<td><?php  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$f;?></td>
			      	<td><?php  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$g;?></td>
		      	</tr>
<?php
     	 } #ends second while loop
?>
    	  </table>


<?php
	echo "<br><br>";
    if(($count == 0)){
    	echo "Sorry, not found in the database";
    }elseif ($count > 1){
    	echo "Please enter the data more accurately";

    }elseif ($count1 == 0){
    	echo "Sorry, no speaker info found";

    }
  }#closes first if statment isset(post)

?>
		</center>
		</body>
      <style>table{font-size: 2em;}</style>
      </html>


<!-- Js, If fields are empty, change color to red-->
<script type="text/javascript">
  function isBlank(inputField){
    if (inputField.value==""){
         return true;
      }
      return false;
  }

  function makeRed(inputDiv){
    inputDiv.style.borderColor="#AA0000";
  }

  function makeClean(inputDiv){
    inputDiv.style.borderColor="#FFFFFF";
  }

  window.onload = function()
  {
    var mainForm = document.getElementById("mainForm");
    var requiredInputs = document.querySelectorAll(".required");


    mainForm.onsubmit = function(e){
       var requiredInputs = document.querySelectorAll(".required");
       var err = false;

       for (var i=0; i < requiredInputs.length; i++){
          if( isBlank(requiredInputs[i])){
              err |= true;
              makeRed(requiredInputs[i]);
          }
          else{
              makeClean(requiredInputs[i]);
          }
      }
      if (err == true){
        e.preventDefault();
      }
    }
}

</script>

<br>
<a href='../main.php'>Return to Main</a>
<br>
<a href='logout.php'>Logout</a>
