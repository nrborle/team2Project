var preparedWeights = [4,4,5,5,5,5,5,5,2,3,3,10,10,10];
var impromptuWeights = [2,1,1,1,2,2,2,1,1,1,1,3,3,3];
var prepared = "prepared";
var impromptu = "impromptu";

window.onload = function(){

	console.log("loaded");
	var form = document.getElementById("mainForm");
	form.addEventListener('submit', calculateAll);

}


function calculateAll(){
	console.log("Calculating total scores");
	for(var i = 0; i < 15; i++){
		totalValue = calculateScore(i);
		console.log(totalValue);
		var total = document.getElementById("total_" + i);
		total.value = totalValue;
	}
}

function calculateScore(col){
    var total = 0;
	var weights;

    for(var row = 0; row < 14; row++){
		var formType = document.getElementsByTagName("table")[0].id;
		if(formType == prepared){
			weights = preparedWeights;
		}
		else if(formType == impromptu){
			weights = impromptuWeights;
		}
		var id = "R"+row+"C"+col;
        var cell = document.getElementById(id);
        total += weightedValue(cell.value, weights[row]);
		//console.log(total);
    }
    return total;
}

function weightedValue (score, weight){
  wtdScore = score*weight/10;
  return wtdScore;
}
