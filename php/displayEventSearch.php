<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}else {
	if (!isset($_SESSION['username'])) {
		header('Location: php/login.php');
	}
}
$username = $_SESSION['username'];
include 'connect.php';

$error = mysqli_connect_error();
if($error != null)
{
  $output = "<p>Unable to connect to database!</p>";
  exit($output);
}
else {
  //DO THINGS BECAUSE NO ERROR
  $sql = "SELECT permissions FROM user WHERE username = '$username'";

  $results = mysqli_query($connection, $sql);

  while($row = mysqli_fetch_assoc($results)){
    $permType = $row['permissions'];
  }

  if ($permType == 1) {
    echo "<a class='likeabutton' href='php/searcheventform.php'>Search For The Winner of a Previous Event</a><br>";
  }
}
mysqli_close($connection);
 ?>
