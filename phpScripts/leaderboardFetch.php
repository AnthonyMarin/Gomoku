<?php 
$sortType = $_POST['sort'];

$con = mysqli_connect("localhost","moviesDB","movies","gomoku");

if($sortType == 0){
    $sql = "SELECT `username`,`gamesWon`,`gamesPlayed`,`timePlayed` FROM `users`  ORDER BY `gamesWon` DESC LIMIT 25";
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