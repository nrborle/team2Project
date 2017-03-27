<?php 
  include 'connect.php';
  session_start();

?>
<!-- html form-->
<!DOCTYPE html>
<html>
   <head lang="en">
      <meta charset="utf-8">
      <title>User Login</title>
      <link rel="stylesheet" type="text/css" href="#">
      <script type="text/javascript" src="scripts/Validate.js"></script>
      </head>
      <body>     
        <div class="login">      
          <form action="login.php" method="post" id="mainForm">
            <center><br/><br/><br/><br/>
              Username:<br><br>
              <input type="text" id="username" name="username" class="required" ><br/><br/>
              Password:<br/><br/>
              <input type="password" id=password name="password" class="required"><br/><br/>
              <input type="submit" name="login" value="Login" ><br/><br/>
            </center>
          </form>
        </div>
      </body>
      </html>

<!-- php check username, password in the database-->
<?php 
  include 'php/connect.php';

  if(isset($_POST['login'])){

    @$username = $_POST['username']; 
    @$password = $_POST['password'];

    $count = 0;      
    $result=("SELECT * FROM user Where password = '$password' and username = '$username' ");
    $result1 = mysqli_query($connection,$result) or die(mysql_error());

    while ($row = mysqli_fetch_assoc($result1)) {
      $a = $row['username'];
      $b = $row['password'];
      $count = $count +1;
    }

    if(( (!empty($username) and !empty($password)) and $count != 0)&&(strcmp($username, @$a) == 0) && (strcmp($password, @$b) == 0))
    {
    header('Location: main.php');

    }else{
    header('Location: login.php');
    }
  } 
?>

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

