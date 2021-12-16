function checkWinConditions(){
    for(let i = 0; i < (size*size); i++){
        if(gridBin[i]!=0){
                                //condition 1 straight up or down
        if(verticalWin(i) ){
            newGame.gameActive = false;
        }else if(horizontalWin(i)){ //condition 2 straight left or right
            newGame.gameActive = false;
        }else if(forwardSlash(i)){
            newGame.gameActive = false; //diagonal conditions 3 and 4
        }else if(backwardSlash(i)){
            newGame.gameActive = false;
        }
        
    }
}
}   //logic for conditions
function verticalWin(i){

    if((gridBin[i] == gridBin[i-size]) && (gridBin[i] == gridBin[i-size*2]) && (gridBin[i] == gridBin[i-size*3] ) && (gridBin[i] == gridBin[i-size*4])    ){ //condition 1
        return true;
    }

}
function horizontalWin(i){
    if((gridBin[i] == gridBin[i+1]) && (gridBin[i] == gridBin[i+2]) && (gridBin[i] == gridBin[i+3] ) && (gridBin[i] == gridBin[i+4])    ){ // condition 2
        return true;     
    }
}
function forwardSlash(i){
    if((gridBin[i] == gridBin[(i-size)+1]) && (gridBin[i] == gridBin[(i-15*2)+2]) && (gridBin[i] == gridBin[(i-15*3)+3] ) && (gridBin[i] == gridBin[(i-15*4)+4])    ){ // condition3
        return true; 
    }
}
function backwardSlash(i){
    if((gridBin[i] == gridBin[(i-size)-1]) && (gridBin[i] == gridBin[(i-15*2)-2]) && (gridBin[i] == gridBin[(i-15*3)-3] ) && (gridBin[i] == gridBin[(i-15*4)-4])    ){ //condtion 4
        return true;
    }
}
var messageBox;
function checkCloseCondition(){
    for(let i = 0; i < (size*size); i++){
        if(gridBin[i]!=0){
                                //condition 1 straight up or down
       
        
        
                                  
         
     
          if(vertical4(i) || horizontal4(i) || forwardSlash4(i)  || backwardSlash4(i)){
            messageBox.innerText = 'Careful! Someone has 4 in a row!'
          
         } 

}
}
//i couldnt get 4in a row and 3 in a row to work together
}

function vertical3(i){

    if((gridBin[i] == gridBin[i-size]) && (gridBin[i] == gridBin[i-size*2])    ){
        return true;
    }

}
function horizontal3(i){
    if((gridBin[i] == gridBin[i+1]) && (gridBin[i] == gridBin[i+2])     ){
        return true;
    }
}
function forwardSlash3(i){
    if((gridBin[i] == gridBin[(i-size)+1]) && (gridBin[i] == gridBin[(i-15*2)+2])    ){
        return true;
    }
}
function backwardSlash3(i){
    if((gridBin[i] == gridBin[(i-size)-1]) && (gridBin[i] == gridBin[(i-15*2)-2])  ) {
        return true;
    }
}


function vertical4(i){

    if((gridBin[i] == gridBin[i-size]) && (gridBin[i] == gridBin[i-size*2]) &&  (gridBin[i] == gridBin[i-size*3])     ){
        return true;
    }

}
function horizontal4(i){
    if((gridBin[i] == gridBin[i+1]) && (gridBin[i] == gridBin[i+2]) && (gridBin[i] == gridBin[i+3] )    ){
        return true;
    }
}
function forwardSlash4(i){
    if((gridBin[i] == gridBin[(i-size)+1]) && (gridBin[i] == gridBin[(i-15*2)+2]) && (gridBin[i] == gridBin[(i-15*3)+3] )    ){
        return true;
    }
}
function backwardSlash4(i){
    if((gridBin[i] == gridBin[(i-size)-1]) && (gridBin[i] == gridBin[(i-15*2)-2]) && (gridBin[i] == gridBin[(i-15*3)-3] ) ) {
        return true;
    }
}

