var newGame;
var size = 15;
var timeBox;

const squares = [   "a1","b1","c1","d1", "e1", "f1", "g1", "h1", "i1", "j1" , "k1", "l1", "m1", "n1", "o1",
                    "a2","b2","c2","d2", "e2", "f2", "g2", "h2", "i2", "j2" , "k2", "l2", "m2", "n2", "o2",
                    "a3","b3","c3","d3", "e3", "f3", "g3", "h3", "i3", "j3" , "k3", "l3", "m3", "n3", "o3",
                    "a4","b4","c4","d4", "e4", "f4", "g4", "h4", "i4", "j4" , "k4", "l4", "m4", "n4", "o4",
                    "a5","b5","c5","d5", "e5", "f5", "g5", "h5", "i5", "j5" , "k5", "l5", "m5", "n5", "o5",
                    "a6","b6","c6","d6", "e6", "f6", "g6", "h6", "i6", "j6" , "k6", "l6", "m6", "n6", "o6",
                    "a7","b7","c7","d7", "e7", "f7", "g7", "h7", "i7", "j7" , "k7", "l7", "m7", "n7", "o7",
                    "a8","b8","c8","d8", "e8", "f8", "g8", "h8", "i8", "j8" , "k8", "l8", "m8", "n8", "o8",
                    "a9","b9","c9","d9", "e9", "f9", "g9", "h9", "i9", "j9" , "k9", "l9", "m9", "n9", "o9",
                    "a10","b10","c10","d10", "e10", "f10", "g10", "h10", "i10", "j10" , "k10", "l10", "m10", "n10", "o10",
                    "a11","b11","c11","d11", "e11", "f11", "g11", "h11", "i11", "j11" , "k11", "l11", "m11", "n11", "o11",
                    "a12","b12","c12","d12", "e12", "f12", "g12", "h12", "i12", "j12" , "k12", "l12", "m12", "n12", "o12",
                    "a13","b13","c13","d13", "e13", "f13", "g13", "h13", "i13", "j13" , "k13", "l13", "m13", "n13", "o13",
                    "a14","b14","c14","d14", "e14", "f14", "g14", "h14", "i14", "j14" , "k14", "l14", "m14", "n14", "o14",
                    "a15","b15","c15","d15", "e15", "f15", "g15", "h15", "i15", "j15" , "k15", "l15", "m15", "n15", "o15"]

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
        this.elapsedTime=  Math.round(this.elapsedTime);

      
    }
    getElapsedTime(){
        let tmpTime = new Date();
        this.elapsedTime = tmpTime - this.startTime;
        this.elapsedTime /= 1000;
        this.elapsedTime=  Math.round(this.elapsedTime);
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
            if(newGame.p1Active){
                curPlayer = 'Player 1'
            }else{
                curPlayer=  'Player 2'
            }
            newGame.end();
            let results =   JSON.stringify(newGame);

            window.location.href = 'results.php?victor='+curPlayer+'&results='+results;
           // window.location.replace('results.php?victor='+curPlayer);
        }
        document.getElementById('time').innerText = newGame.getElapsedTime();
        if(newGame.p1Active){
            document.getElementById("currentPlayer").innerHTML = "Player 1's Turn";
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
        if(cols[i].classList.contains('p1Clicked' || 'p2Clicked')){
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
