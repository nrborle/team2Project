var preparedWeights = [4,4,5,5,5,5,5,5,2,3,3,10,10,10];
var impromptuWeights = [2,1,1,1,2,2,2,1,1,1,1,3,3,3];
var prepared = "prepared";
var impromptu = "impromptu";

var scores = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var speakerNames = ["", "", "", "", "", "", "", "", "", "", "", "", "", "", ""];

for(var i = 0; i < 15; i++){
	getSpeakerName(i);
}
addAllUpdaters("J1P", prepared);
addAllUpdaters("J2P", prepared);
addAllUpdaters("J3P", prepared);

addAllUpdaters("J1I", impromptu);
addAllUpdaters("J2I", impromptu);
addAllUpdaters("J3I", impromptu);

function getSpeakerName(speakerNumber){
	var nameField = document.getElementById("P"+(speakerNumber+1));
	nameField.addEventListener("change", function(){
		speakerNames[speakerNumber] = this.value;
		//console.log(this.value);
	});
}

function addAllUpdaters(sheet, type){

    for(var c = 0; c < 15; c++){
        for(var r = 0; r <= 1; r++){            
            addTotalUpdater(sheet, r, c, 0, 1, sheet+"subtotal1_C"+c);  
        }
        for(var r = 2; r <= 7; r++){            
            addTotalUpdater(sheet, r, c, 2, 7, sheet+"subtotal2_C"+c);  
        }
        for(var r = 8; r <= 10; r++){           
            addTotalUpdater(sheet, r, c, 8, 10, sheet+"subtotal3_C"+c); 
        }
        for(var r = 11; r <= 13; r++){          
            addTotalUpdater(sheet, r, c, 11, 13, sheet+"subtotal4_C"+c);
        }
        
        for(var r = 0; r <= 13; r++){
            addWeightedTotalUpdater(sheet, type, r, c, 0, 13, sheet+"total_C" + c);
        }
    }
}

function addTotalUpdater(sheet, row, col, fromRow, toRow, target){
    var cell = getCell(sheet, row, col);
    cell.addEventListener("change", function(){
            var sum = sumUnweighted(sheet, col, fromRow, toRow);
            var sub = document.getElementById(target);
            sub.innerHTML = sum;
        });
}

function addWeightedTotalUpdater(sheet, type, row, col, fromRow, toRow, target){
    var cell = getCell(sheet, row, col);
    cell.addEventListener("change", function(){
            var sum = sumWeighted(sheet, type, col, fromRow, toRow);
            var sub = document.getElementById(target);
            sub.innerHTML = sum.toFixed(1);
			
			scores[col] = finalScore(col);
			updateResults();
        });
}
function finalScore(col){
	
	var total = 0;
	total += parseFloat(document.getElementById("J1Ptotal_C"+col).innerHTML);
	total += parseFloat(document.getElementById("J2Ptotal_C"+col).innerHTML);
	total += parseFloat(document.getElementById("J3Ptotal_C"+col).innerHTML);
	total += parseFloat(document.getElementById("J1Itotal_C"+col).innerHTML);
	total += parseFloat(document.getElementById("J2Itotal_C"+col).innerHTML);
	total += parseFloat(document.getElementById("J3Itotal_C"+col).innerHTML);
	//console.log(total);
	
	return total;
}

function sumUnweighted(sheet, col, fromRow, toRow){
    var total = 0;
        
    for(var row = fromRow; row <= toRow; row++){

        var v = getCell(sheet, row, col);
        if(v.value != null && v.value != ""){
            total += parseInt(v.value);
            //console.log(total);
        }
    }
    return total;
}

function sumWeighted(sheet, type, col, fromRow, toRow){
    var total = 0;
    var weights;
        
    if(type == prepared){
        weights = preparedWeights;
    }
    else if(type == impromptu){
        weights = impromptuWeights;
    }
    for(var row = fromRow; row <= toRow; row++){

        var v = getCell(sheet, row, col);
        if(v.value != null && v.value != ""){
            total += weightedValue(parseInt(v.value), weights[row]);
            //console.log(total);
        }
    }
    return total;
}

function updateResults(){
	
	var order = [];
	for(var i = 0; i < 15; i++){
		if(order.length <= 0 || scores[i] <= scores[order[i - 1]]){
			order.push(i);
		}
		else{
			for(var j = 0; j < order.length; j++){
				
				if(scores[i] > scores[order[j]]){
					order.splice(j, 0, i);
					break;
				}
				
			}
		}
	}
	//console.log(scores);
	//console.log(order);
	//console.log(speakerNames);
	
	for(var i = 0; i < order.length; i++){
		document.getElementById("participant_name_"+i).innerHTML = speakerNames[order[i]];		
		document.getElementById("participant_score_"+i).innerHTML = parseFloat(scores[order[i]]).toFixed(1);
	}
}

function getCell(sheet, row, col){  
        var id = sheet+"R"+row+"C"+col;
        return document.getElementById(id);     
}

function weightedValue (score, weight){
  wtdScore = score*weight/10;
  return wtdScore;
}
