window.onload = start;

function start(){
  //get the participant list so we know how many participants to check for.
  var participantList;
  var currentForm = document.getElementsByTagName("form");
  currentForm[0].addEventListener("submit", validate, true);
}

//Check all criteria for all participants and make sure there is something in the inputs.
function validate(e){
  var validationMatrix[][];
  for(var i=0; i <= participantList.length; i++){
    for(var j=0; j <= 14; j++){
      currentInput = document.getElementById("R"+i+"C"+j);
      if(currentInput == "" || currentInput == null){
        alert("You must ensure that all participants have their full scores entered.");
        e.preventDefault();
        break;
      }
    }
  }
}
