var newGame;
var size = 15;
var timeBox;


var gridBin = new Array(size*size).fill(0);
//console.log(gridBin);


class Player{
    constructor(playerNum,playerMoves){
        this.playerMoves = playerMoves;
        this.playerNum = playerNum;
    }

};
class Game{
    constructor(p1Active, startTime,elapsedTime, endTime,gameActive,gameSize,moves){
        this.p1Active = p1Active;
        this.startTime = startTime;
        this.elapsedTime = elapsedTime;
        this.endTime = endTime;
        this.gameActive=  gameActive;
        this.gameSize = gameSize;
        this.moves = moves;

      
    }
    start(){
        this.startTime = new Date();
        

    }
    getMoves(){
        return this.moves;
    }
    incMoves(){
        this.moves++;

    }
    end(){
        this.endTime = new Date();
        this.elapsedTime = this.endTime - this.startTime;
        this.elapsedTime /= 1000;
        this.elapsedTime=  Math.round(this.elapsedTime); //

      
    }
    getElapsedTime(){
        let tmpTime = new Date();
        this.elapsedTime = tmpTime - this.startTime;
        this.elapsedTime /= 1000;
        this.elapsedTime=  Math.round(this.elapsedTime);//gets seconds of game time
        return this.elapsedTime;
    }
    switchPlayer(){
        changePlayerStyle(this.p1Active);
        this.p1Active = !this.p1Active;
        
    }


};


function createGame(){
    newGame = new Game(true,0,0,0,true,15,0); //p1 active, start time, elaps, endTime, gameActive, gameSize, moves
    newGame.start();
    size = newGame.gameSize;
    
     return;

}
function gameHandler(){

    createGame();

    setInterval(()=>{

        if(newGame.gameActive == false){
            let curPlayer;
            if(newGame.p1Active){   ///check curren player
                curPlayer = 'Player 1'
            }else{
                curPlayer=  'Player 2'
            }
            newGame.end();
            let results =   JSON.stringify(newGame);

            window.location.href = 'results.php?victor='+curPlayer+'&results='+results; //relocates to victory page with game info
           // window.location.replace('results.php?victor='+curPlayer);
        }
        document.getElementById('time').innerText = newGame.getElapsedTime();
        if(newGame.p1Active){
            document.getElementById("currentPlayer").innerHTML = "Player 1's Turn"; //updates the players turn
        }else{
            document.getElementById("currentPlayer").innerHTML = "Player 2's Turn";
        }
    },200)


    

    
    
}
createGame();
function changePlayerStyle(x){
    

    //console.log(x);
    if(x){

        for(let i  =0;i< size;i++){
        if(cols[i].classList.contains('p1Clicked' || 'p2Clicked')){  //change the color of hover elements depending on who is playing
            cols[i].classList.remove('P1');
                cols[i].classList.remove('P2');
        }else{
            cols[i].classList.remove('P1');
            cols[i].classList.add('P2');

        }
        
        
           
        }
    }else{
        for(let i =0;i< size;i++){
            if(cols[i].classList.contains('p1Clicked' || 'p2Clicked')){
                cols[i].classList.remove('P1');
                cols[i].classList.remove('P2');
            }else{
                
                cols[i].classList.remove('P2');
                cols[i].classList.add('P1');

            }
           

         
            }
            
    }


}
