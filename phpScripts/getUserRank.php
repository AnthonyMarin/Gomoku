<?php 

$sortType = $_GET['sortType'];

$con = mysqli_connect("localhost","moviesDB","movies","gomoku");
$pos = 0;
if($sortType == 0){
    $preSQL = 'SET @pos =0';
    $sql =    ///orders results based on sort type///collects position of user/////////sort type : 0->gamesWon Desc, 1->gamesWon ASC, 2->gamesPlayed DESC, 3->gamesPlayed ASC, 4->timePlayed DESC, 5-> timePlayed asc
            'SELECT * FROM(                                                         
            SELECT (@pos:=@pos+1) pos, username, gamesPlayed,gamesWon,timePlayed
            FROM users
            ORDER BY gamesWon   DESC
            )  A WHERE username = "'.$_SESSION['username'].'";';
}else if($sortType == 1){
    $preSQL = 'SET @pos =0';
    $sql =   
            'SELECT * FROM(
            SELECT (@pos:=@pos+1) pos, username, gamesPlayed,gamesWon,timePlayed
            FROM users
            ORDER BY gamesWon  
            )  A WHERE username = "'.$_SESSION['username'].'";';
}else if($sortType == 2){
    $preSQL = 'SET @pos =0';
    $sql =   
            'SELECT * FROM(
            SELECT (@pos:=@pos+1) pos, username, gamesPlayed,gamesWon,timePlayed
            FROM users
            ORDER BY gamesPlayed DESC  
            )  A WHERE username = "'.$_SESSION['username'].'";';
}else if($sortType == 3){
    $preSQL = 'SET @pos =0';
    $sql =   
            'SELECT * FROM(
            SELECT (@pos:=@pos+1) pos, username, gamesPlayed,gamesWon,timePlayed
            FROM users
            ORDER BY gamesPlayed  
            )  A WHERE username = "'.$_SESSION['username'].'";';
}else if($sortType == 4){
    $preSQL = 'SET @pos =0';
    $sql =   
            'SELECT * FROM(
            SELECT (@pos:=@pos+1) pos, username, gamesPlayed,gamesWon,timePlayed
            FROM users
            ORDER BY timePlayed DESC  
            )  A WHERE username = "'.$_SESSION['username'].'";';
}else if($sortType == 5){
    $preSQL = 'SET @pos =0';
    $sql =   
            'SELECT * FROM(
            SELECT (@pos:=@pos+1) pos, username, gamesPlayed,gamesWon,timePlayed
            FROM users
            ORDER BY timePlayed  
            )  A WHERE username = "'.$_SESSION['username'].'";';
}else{}
    //echo($sql);
    $con->query($preSQL);
    $res = $con->query($sql) or die($con->error); 
  
    $row = $res->fetch_assoc();
  
    echo('<tr><td>'.$row['pos'].'</td><td>'.$row['username'].'</td><td>'.$row['gamesPlayed'].'</td><td>'.$row['gamesWon'].'</td> <td>'.$row['timePlayed'].'</td></tr>'); //prints rows of the leaderboard

    $con->close();

?>