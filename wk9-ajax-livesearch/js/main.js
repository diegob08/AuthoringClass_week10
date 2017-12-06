(function() {
"use strict";

    var searchRequest;
    var searchField = document.querySelector('#searchbox');
    
    function showResults(e){
        console.log('showResults');
        var str = e.currentTarget.value; //store what the user is typing in a string
        searchRequest = createRequest();
        if(searchRequest===null){
            alert('nope!');
            return;
        }
        
        var url = 'searchcustomer.php?searchstring='+str;
        
        searchRequest.onreadystatechange = searchStatus;
        searchRequest.open('GET', url, true);
        searchRequest.send(null);
    }
    
    function searchStatus(){
        console.log('searchStatus');
        if(searchRequest.readyState===4 || searchRequest.readystate==='complete'){
            document.querySelector('#txtHint').innerHTML=searchRequest.responseText;
        }
    }
    
    searchField.addEventListener('keyup', showResults, false);

		
})();


	
	
	
	