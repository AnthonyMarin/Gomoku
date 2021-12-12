
function postResults(){


    httpRequest = new XMLHttpRequest();
    if (!httpRequest) { 
      
      
        alert('Cannot create an XMLHTTP instance');
        return false;
        }
        
        
        httpRequest.onreadystatechange = resultsCB; 
        httpRequest.open('POST','../phpScripts/addGameData.php?');
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('p1Win='+player1Win+'&time='+time); 

}
function resultsCB(){
    try {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
          if (httpRequest.status === 200) {   
            //let ans= JSON.parse(httpRequest.responseText);
            let ans =httpRequest.responseText;
            console.log(ans);
            window.location.replace('postSuccess.php'); 
           /*
            if(ans == 1){
                //redirect to success page
            }else{
              console.log('error'); //add error message 
            }
            */
          } else {
            alert('There was a problem with the request.');
          }
        }
      }
      catch( e ) { 
        alert('Caught Exception: ' + e.description);
      }
     
    }
   