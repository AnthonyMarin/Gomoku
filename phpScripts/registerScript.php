<?php
 $username = (isset($_POST['username'])) ? $_POST['username'] : 'no name';
 $psw = (isset($_POST['psw'])) ? $_POST['psw'] : 'no psw';
   
$array=['username' =>$username, 'psw'=> $psw];

$con = mysqli_connect("localhost","moviesDB","movies","gomoku");

$con2 = mysqli_connect("localhost","moviesDB","movies","gomoku");
//echo mysqli_error($con);

$sql = "SELECT * FROM `users` WHERE `username`=".$array['username'];

$sql2 = "INSERT INTO `users`(`username`, `psw`, `gamesWon`, `gamesPlayed`, `timePlayed`) VALUES ('".$array['username']."','".$array['psw']."','0','0','0')"; 
$matchingUsers = $con->query($sql);
$con->close();
$matchingUser = $matchingUsers->fetch_row();
//echo json_encode($matchingUser);
if($matchingUser == null){

$con2->query($sql2);
$con2->close();
echo (1);
}else{
echo(0);
}





//echo json_encode($array);
 //$psw = $_GET['psw'];
    
   


?>