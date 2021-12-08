function checkWinConditions(){
    for(let i = 0; i < (size*size); i++){
        if(gridBin[i]!=0){
                                //condition 1 straight up or down
        if(verticalWin(i) ){
            newGame.gameActive = false;
        }else if(horizontalWin(i)){
            newGame.gameActive = false;
        }else if(forwardSlash(i)){
            newGame.gameActive = false;
        }else if(backwardSlash(i)){
            newGame.gameActive = false;
        }
        
    }
}
}
function verticalWin(i){

    if((gridBin[i] == gridBin[i-size]) && (gridBin[i] == gridBin[i-size*2]) && (gridBin[i] == gridBin[i-size*3] ) && (gridBin[i] == gridBin[i-size*4])    ){
        return true;
    }

}
function horizontalWin(i){
    if((gridBin[i] == gridBin[i+1]) && (gridBin[i] == gridBin[i+2]) && (gridBin[i] == gridBin[i+3] ) && (gridBin[i] == gridBin[i+4])    ){
        return true;
    }
}
function forwardSlash(i){
    if((gridBin[i] == gridBin[(i-size)+1]) && (gridBin[i] == gridBin[(i-15*2)+2]) && (gridBin[i] == gridBin[(i-15*3)+3] ) && (gridBin[i] == gridBin[(i-15*4)+4])    ){
        return true;
    }
}
function backwardSlash(i){
    if((gridBin[i] == gridBin[(i-size)-1]) && (gridBin[i] == gridBin[(i-15*2)-2]) && (gridBin[i] == gridBin[(i-15*3)-3] ) && (gridBin[i] == gridBin[(i-15*4)-4])    ){
        return true;
    }
}