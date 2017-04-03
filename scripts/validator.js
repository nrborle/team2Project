var form = document.getElementById("main_form");
form.addEventListener("submit", function(e){checkErrors(e);});

form.addEventListener("keydown", function(e){
	if(e.which == 13){
		e.preventDefault();
	}
});

var cells = document.getElementsByClassName("cell");
for(var i = 0; i < cells.length; i++){
	addNumberValidator(cells[i]);
}

function addNumberValidator(cell){
	cell.addEventListener("blur", function(){
		if(!isNumeric(cell.value)){
			cell.parentElement.classList.add("error");
			console.log("error");
		}
		else{
			cell.parentElement.classList.remove("error");
		}
	});
}
function checkErrors(e){
	var errors = document.getElementsByClassName("error");
	if(errors.length > 0){
		e.preventDefault();
		alert("All errors must be corrected before submitting");
	}
}

function isNumeric(n){
	console.log(n);
	if(n==0 || n==1 || n==2 || n==3 || n==4 || n==5 || n==6 || n==7 || n==8 || n==9 || n==10){
		return true;
	}
	else return false;
}