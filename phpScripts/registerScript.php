<?php
 $username = (isset($_POST['username'])) ? $_POST['username'] : 'no name';
 $psw = (isset($_POST['psw'])) ? $_POST['psw'] : 'no psw';
   
$array=['username' =>$username, 'psw'=> $psw];

$con = mysqli_connect("localhost","moviesDB","movies","gomoku");


//echo mysqli_error($con);

$sql = 'SELECT * FROM `users` WHERE `username`="'.$array['username'].'"';


$matchingUsers = $con->query($sql);
$numRows = mysqli_num_rows($matchingUsers);
//$matchingUser = $matchingUsers->fetch_row();
//echo json_encode($matchingUser);
//echo($numRows);

//$con2 = mysqli_connect("localhost","moviesDB","movies","gomoku");

$sql2 = 'INSERT INTO `users`(`username`, `psw`, `gamesWon`, `gamesPlayed`) VALUES ("'.$array['username'].'","'.$array['psw'].'",0,0)'; 
if( $numRows == 0){


//echo ($sql2);
$con->query($sql2);

echo (1);
}else{
echo(0);
}





//echo json_encode($array);
 //$psw = $_GET['psw'];
    
 $con->close();


?>