<?php
 session_start();
 $username = (isset($_POST['username'])) ? $_POST['username'] : 'no name';
 $psw = (isset($_POST['psw'])) ? $_POST['psw'] : 'no psw';
   
$array=['username' =>$username, 'psw'=> $psw];

$con = mysqli_connect("localhost","moviesDB","movies","gomoku");

$sql = "SELECT `username`, `psw` FROM `users` WHERE `username`=".$array['username']." AND `psw` =".$array['psw'];

$sql2 = "INSERT INTO `users`(`username`, `psw`, `gamesWon`, `gamesPlayed`, `timePlayed`) VALUES ('".$array['username']."','".$array['psw']."','0','0','0')"; 
$matchingUsers = $con->query($sql);
$con->close();
$matchingUser = $matchingUsers->fetch_row();
//echo json_encode($matchingUser);
if($matchingUser == null){


echo (0);
}else{
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['username'] = $array['username'];

echo(1);
}





//echo json_encode($array);
 //$psw = $_GET['psw'];
    
   


?>