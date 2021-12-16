var username;
var psw;

var errorBox;

function onLoad(){
  errorBox =document.getElementById('submitError');
}



function loginRequest(){
    username = document.getElementById('username');
    psw = document.getElementById('password');

    httpRequest = new XMLHttpRequest();
    if (!httpRequest) { 
      
      
        alert('Cannot create an XMLHTTP instance');
        return false;
        }
        
        
        httpRequest.onreadystatechange = loginCB; 
        httpRequest.open('POST','../phpScripts/loginScript.php?');
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('username='+username.value+'&psw='+psw.value); 

}
function loginCB(){
         
    try {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
          if (httpRequest.status === 200) {    
         
            //let ans= JSON.parse(httpRequest.responseText);
            let ans =httpRequest.responseText;
            console.log(ans);
            if(ans == 1){
              window.location.replace('loginSuccess.php');   //redirect to success page
            }else{
              errorBox.innerText = 'Incorrect Username or Password';    //add error message
              
            }


          } else {
            alert('There was a problem with the request.');
          }
        }
      }
      catch( e ) { 
        alert('Caught Exception: ' + e.description);
      }
     
    }
   