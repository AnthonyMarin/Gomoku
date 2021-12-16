var col1 ;
var col2;
var col3;
var col4;
var col5;
var col6;
var col7;
var col8;
var col9;
var col10 ;
var col11 ;
var col12 ;
var col13 ;
var col14 ;
var col15 ;

var cols;
window.addEventListener('load', function () { //load all column eleemnts
  messageBox =document.getElementById('messageBox');
var timeBox = document.getElementById('time');
 col1 = document.getElementById('col1'); 
 col2 = document.getElementById('col2');
 col3 = document.getElementById('col3');
 col4 = document.getElementById('col4');
 col5 = document.getElementById('col5');
 col6 = document.getElementById('col6');
 col7 = document.getElementById('col7');
 col8 = document.getElementById('col8');
 col9 = document.getElementById('col9');
 col10 = document.getElementById('col10');
 col11 = document.getElementById('col11');
 col12 = document.getElementById('col12');
 col13 = document.getElementById('col13');
 col14 = document.getElementById('col14');
 col15 = document.getElementById('col15');
  cols = [col1,col2,col3,col4,col5,col6,col7,col8,col9,col10,col11,col12,col13,col14,col15];

  boxes = document.querySelectorAll('div div');  //gather all row elements
  for(let rowI = 1 ; rowI <= 15 ;rowI++){
  let rowx = 'row'+rowI;
  
  let temp = document.getElementsByClassName(rowx);
  

  for(let i = 0; i <=14; i++){  
  temp[i].addEventListener("click", function(){makeMove(i,rowI-1, temp[i]);}); ///add click listeners to my boxes to initiate move process
  }
  }
});
function makeMove(x,y,element){

  if(element.classList.contains('p1Clicked')){//does nothing if p1 has clicked this spot
    
    //console.log('already selected');
  }else if(element.classList.contains('p2Clicked')){ //does nothing if p2 has clicked this spot 
  
  }else{
    if(newGame.p1Active){ //checks if p1 is playing
      element.classList.add('p1Clicked');
    }else{
      element.classList.add('p2Clicked'); //marks who clicked the spot
    }
    newGame.incMoves();

    element.innerText = newGame.getMoves();

   logPlay(x,y); //mark in 2d array
  if(newGame.gameActive){ ///if not a win condition, keep playing
  newGame.switchPlayer();
  }
  }
  

 
 
}
function logPlay(x,y){
  let pos = x+(y*15)
 // console.log(pos);

if(newGame.p1Active){
 
  
  gridBin[pos] = 1;
}else{
  gridBin[pos] = 2;
}
checkCloseCondition(); //checks for 5 in a row and 4 in a row
checkWinConditions();



}