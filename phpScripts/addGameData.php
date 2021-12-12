<?php 

session_start();
$time = $_POST['time'];
echo($time);

$p1Win = $_POST['p1Win'];


$con = mysqli_connect("localhost","moviesDB","movies","gomoku");

$sql = "UPDATE `users` SET `gamesWon` = gamesWon + ".$p1Win."  , `gamesPlayed`  = gamesPlayed +1 , `timePlayed` = DATE_ADD(timePlayed, INTERVAL ".$time." second)WHERE `username`=".$_SESSION['username'];

if($con->query($sql) == TRUE){
       
}else{
    echo "Error: " . $sql . " <br>" . $con->error;
}

$con->close();

?>