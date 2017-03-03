 	

 	var participantList = ['a','b','c','d','e'];
  	var score = [1,2,3,4,5]

  	a=[];

  	for(var i=0; i < participantList.length; i++){
			
  		 a[i] = [participantList[i],score[i]]
	}


	a.sort(sortbysecond);
	document.write(a.reverse(sortbysecond));
		
	
	// will sort by the second value in array
	function sortbysecond(a, b) {
	    if (a[1] === b[1]) {
	        return 0;
	    }else {
	        return (a[1] < b[1]) ? -1 : 1;
	    }
	}
	