var username;
var psw;
var psw2;
var errorBox;

function onLoad(){
  errorBox =document.getElementById('submitError');
}
function validate(){
    username = document.getElementById('username');
    psw = document.getElementById('password');
    psw2 = document.getElementById('password2');

    let userTemp = username.value;
    let pswTemp = psw.value;
   

    if(psw.value != psw2.value){
        username.value = userTemp;
        psw.value = pswTemp;
        psw2.value = '';
        errorBox.innerText = 'Passwords Do Not Match';

    }else{
        registerRequest();
    }
}
var httpRequest;
function registerRequest(){
    httpRequest = new XMLHttpRequest();
    if (!httpRequest) { 
      
      
        alert('Cannot create an XMLHTTP instance');
        return false;
        }
        
        
        httpRequest.onreadystatechange = registerCB; 
        httpRequest.open('POST','../phpScripts/registerScript.php?');
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('username='+username.value+'&psw='+psw.value); 

}

function registerCB(){
         
    try {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
          if (httpRequest.status === 200) {    
         
            //let ans= JSON.parse(httpRequest.responseText);
            let ans =httpRequest.responseText;

            if(ans == 1){
              window.location.replace('signUpSuccess.php');   //redirect to success page
            }else{
              errorBox.innerText = 'Username already exists';    //add error message
              
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
   
       