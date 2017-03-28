<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
  header('Location: login.php');
} else {
  session_unset();
  header('Location: login.php');
}
 ?>
