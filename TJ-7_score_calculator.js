var preparedWeights = [4,4,5,5,5,5,5,5,2,3,3,10,10,10];
var impromptuWeights = [2,1,1,1,2,2,2,1,1,1,1,3,3,3];

var preparedTotal;
var impromptuTotal;


for(var i = 0; i < 15; i++){
	preparedTotal = calculateScore("P", i);
	impromptuTotal = calculateScore("I", i);
	console.log("Prepared Speech Total: " + preparedTotal);
	console.log("Impromptu Speech Total: " + impromptuTotal);
}

function calculateScore(speech, col){
    var total = 0;
	var weights;
	try{
		if(speech == "P"){
			weights= preparedWeights;
		}
		else if(speech == "I"){
			weights = impromptuWeights;
		}
		else throw "Invalid Argument: " + speech;
	}
	catch(err){console.log(err);}
	
    for(var row = 0; row < 14; row++){
		var id = speech+"R"+row+"C"+col;
        var cell = document.getElementById(id);
        total += cell.value*weights[row]/10;
		//console.log(total);
    }
    return total;
}
