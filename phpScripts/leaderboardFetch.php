<?php 
$sortType = $_POST['sort'];

$con = mysqli_connect("localhost","moviesDB","movies","gomoku");
///sort type : 0->gamesWon Desc, 1->gamesWon ASC, 2->gamesPlayed DESC, 3->gamesPlayed ASC, 4->timePlayed DESC, 5-> timePlayed asc
if($sortType == 0){
    $sql = "SELECT `username`,`gamesWon`,`gamesPlayed`,`timePlayed` FROM `users`  ORDER BY `gamesWon` DESC LIMIT 25";  ///each query takes the top 25 users based on the fields
}else if($sortType == 1){
    $sql = "SELECT `username`,`gamesWon`,`gamesPlayed`,`timePlayed` FROM `users`  ORDER BY `gamesWon`  LIMIT 25";
}else if($sortType == 2){
      $sql = "SELECT `username`,`gamesWon`,`gamesPlayed`,`timePlayed` FROM `users`  ORDER BY `gamesPlayed` DESC LIMIT 25";
}else if($sortType == 3){
    $sql = "SELECT `username`,`gamesWon`,`gamesPlayed`,`timePlayed` FROM `users`  ORDER BY `gamesPlayed`  LIMIT 25";
}else if($sortType == 4){
    $sql = "SELECT `username`,`gamesWon`,`gamesPlayed`,`timePlayed` FROM `users`  ORDER BY `timePlayed` DESC LIMIT 25";
}else if($sortType == 5){
    $sql = "SELECT `username`,`gamesWon`,`gamesPlayed`,`timePlayed` FROM `users`  ORDER BY `timePlayed`  LIMIT 25";
}else{}

    
    $res = $con->query($sql); 
  
    while($row = mysqli_fetch_assoc($res))
    {   
        
    $array[] = $row; 

    }

    echo json_encode($array);
    $con->close();

 

?>