	
	<script>
	// Rank the participants in Descending order where the highest scoring participant is in 1st place.


	var a = [['BobA', 25], ['BobB', 54], ['BobC',39],['BobD', 11],['BobE', 89]];

		
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
	

	


	/*
	// will sort by the first value in array
	
	function sortbyfirst(a, b) {
		if (a[0] === b[0]) {
			return 0;
		}else {
			return (a[0] < b[0]) ? -1 : 1;
	 	}
	}
	*/

	</script>




