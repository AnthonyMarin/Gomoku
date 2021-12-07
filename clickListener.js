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
window.addEventListener('load', function () {
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

  boxes = document.querySelectorAll('div div');
  for(let rowI = 1 ; rowI <= 15 ;rowI++){
  let rowx = 'row'+rowI;
  
  let temp = document.getElementsByClassName(rowx);
  

  for(let i = 0; i <=14; i++){  
  temp[i].addEventListener("click", function(){makeMove(i,rowI-1, temp[i]);});
  }
  }
});
function makeMove(x,y,element){
  console.log(x,y);
  
  
  if(element.classList.contains('p1Clicked' ||'p2Clicked')){
    
  }else{
    if(newGame.p1Active){
      element.classList.add('p1Clicked');
    }else{
      element.classList.add('p2Clicked');
    }
    logPlay(x,y);
  newGame.switchPlayer();
  }

 
 
}
function logPlay(x,y){

if(newGame.p1Active){
  let pos = x+(y*15)
  gridBin[pos] = 1;
}else{
  let pos = x+(y*15)
  gridBin[pos] = 2;
}



}