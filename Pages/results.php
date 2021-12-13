
<?php
session_start();



if( isset($_SESSION['username'])){
    
    $currentSession = true;
    echo ('<script> var player1Win = 0 </script>');
    echo('Hello '.$_SESSION['username'].'!');

    
    }else{
   

    }
$winner = $_GET['victor'];
$results = $_GET['results'];

if($winner == 'Player 1' && isset($_SESSION['username'])){
    $winner = $_SESSION['username'];
    echo ('<script>  player1Win = 1</script>');
}



if(isset($_SESSION['username'])){
    $tbleCl = $_SESSION['username'];
    
}else{
    $tbleCl = "Player 1";
}


//echo $winner.' Wins';
$json = json_decode($results);
$elapsedTime = $json->elapsedTime;
echo ('<script> var time = '.$elapsedTime.' </script>');


$moves = $json->{'moves'};
if($moves%2 != 0){

    $tmpMoves = $moves + 1;

    if($json->{'p1Active'} == true){
      $p1Moves = $tmpMoves/2;
      $p2Moves = ($tmpMoves/2) - 1;

    }else{
        $p1Moves = ($tmpMoves/2)-1;
        $p2Moves = ($tmpMoves/2) ;
    }
}else{
    $tmpMoves = $moves;
    if($json->{'p1Active'} == true){
        $p1Moves = $tmpMoves/2;
        $p2Moves = ($tmpMoves/2) - 1;
  
      }else{
          $p1Moves = ($tmpMoves/2)-1;
          $p2Moves = ($tmpMoves/2) ;
      }
    
}


?>

<html>
    <head>
        <link rel="stylesheet" href="../CSS/results.css">
        <script src = "../JS/results.js"></script>
    </head>
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box}
    </style>
    

    <body>
    <a href = 'index.php'> <img id = 'home' src = '../home.png'/></a>
        <style>
            #home{
                float:right;
                padding-right:10px;
                height:60px;
            }
            </style>
        <br>
        <br>
        <section id = 'content'>
            <h1 id = "winner">Winner: <?php echo $winner ?></h1>
            <br>
            <br>
            <h2>Time: <?php echo $elapsedTime;?> Seconds</h2> 
            <br>
            <br> <br>
            <br>
            <table>
                <tbody>
                    <tr><th></th><th><?php echo $tbleCl; ?></th><th>Player 2</th> <th>Total</th></tr>
                    
                    <tr><th>Moves</th><td><?php echo $p1Moves; ?></td><td><?php echo $p2Moves; ?></td><td><?php echo $moves; ?></td></tr>
                </tbody>
            </table>
            <br>
            <br>
            <div class="clearfix">
                <?php 
                if(isset($_SESSION['username'])){
                    echo (' <button type="button" onclick = "postResults()" class="postButton">Post Match Results</button>');
                }
                
                ?>
                <button type="button" onclick =  "window.location.replace('index.php'); " class="postButton"> Return to Homepage</button>
           
               
             </div>

        </section>
    </body>
</html>