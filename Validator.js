window.onload = start;

function start(){
  //get the participant list so we know how many participants to check for.
  var participantList = "<?php echo $participantList ?>";
  var currentForm = document.getElementsByTagName("form");
  currentForm[0].addEventListener("submit", validate, true);
}

//Check all criteria for all participants and make sure there is something in the inputs.
function validate(e){
  for(var i=0; i <= participantList.length; i++){
    for(var j=0; j <= 14; j++){
      currentInput = document.getElementById("R"+j+"C"+i);
      if(currentInput == "null" || currentInput == null){
        alert("You must ensure that all participants have a score entered in each criteria.");
        e.preventDefault();
        break;
      }
    }
  }
}
