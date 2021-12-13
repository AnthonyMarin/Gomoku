
var rankIndex;
var sortType = 0;
var table;
var users;
let ranking = 1;
function addRows(usr){

  


  if(sortType == 0 || sortType == 2 || sortType == 4){
    while(usr[ranking-1]['username']){
    //console.log(usr[ranking-1]['username']);
      let newRow = table.insertRow(ranking+2);   
    let rank =  newRow.insertCell(0);
    let rankText = document.createTextNode(ranking);
    rank.appendChild(rankText);

    let user =  newRow.insertCell(1);
    let userText = document.createTextNode(usr[ranking-1]['username']);
    user.appendChild(userText);

    let gamesWon =  newRow.insertCell(2);
    let gamesWonText = document.createTextNode(usr[ranking-1]['gamesWon']);
    gamesWon.appendChild(gamesWonText);
    
    let gamesPlayed =  newRow.insertCell(3);
    let gamesPlayedText = document.createTextNode(usr[ranking-1]['gamesPlayed']);
    gamesPlayed.appendChild(gamesPlayedText);
    let timePlayed =  newRow.insertCell(4);
    let timeText = document.createTextNode(usr[ranking-1]['timePlayed']);
    timePlayed.appendChild(timeText);
    console.log(ranking);

    if(usr[Number(ranking)]['username']=== void(0)){
      break;
    }
    ranking++;

    }
  }else{
    var count = Object.keys(usr).length;
    while(count >=0){
      console.log(usr[ranking-1]['username']);
        let newRow = table.insertRow(ranking+2);   
      let rank =  newRow.insertCell(0);
      let rankText = document.createTextNode(count);
      rank.appendChild(rankText);
  
      let user =  newRow.insertCell(1);
      let userText = document.createTextNode(usr[ranking-1]['username']);
      user.appendChild(userText);
  
      let gamesWon =  newRow.insertCell(2);
      let gamesWonText = document.createTextNode(usr[ranking-1]['gamesWon']);
      gamesWon.appendChild(gamesWonText);
      
      let gamesPlayed =  newRow.insertCell(3);
      let gamesPlayedText = document.createTextNode(usr[ranking-1]['gamesPlayed']);
      gamesPlayed.appendChild(gamesPlayedText);
      let timePlayed =  newRow.insertCell(4);
      let timeText = document.createTextNode(usr[ranking-1]['timePlayed']);
      timePlayed.appendChild(timeText);
      console.log(ranking);

      if(usr[Number(ranking)]['username']=== void(0)){
        break;
      }
      ranking++;
      count--;
    
    
  }
}
}

function displayResults(x){
  table = document.getElementById('leaderboard');
    sortType = x;
    rankingsRequest();
    
         
    
  

}
function rankingsRequest(){
    httpRequest = new XMLHttpRequest();
    if (!httpRequest) { 
      
      
        alert('Cannot create an XMLHTTP instance');
        return false;
        }
        
      
        httpRequest.onreadystatechange = rankingCB; 
        httpRequest.open('POST','../phpScripts/leaderboardFetch.php?');
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('sort='+sortType); 
      }

function rankingCB(){
    try {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
          if (httpRequest.status === 200) {   
          
            
          let ans= JSON.parse(httpRequest.responseText);
          users = ans;
          addRows(users);  
           
    
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
        
      }
     
   
    
}



