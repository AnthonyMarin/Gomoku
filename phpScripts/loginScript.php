<?php
 session_start();
 $username = (isset($_POST['username'])) ? $_POST['username'] : 'no name';
 $psw = (isset($_POST['psw'])) ? $_POST['psw'] : 'no psw';
   //echo $username;
$array=['username' =>$username, 'psw'=> $psw];

$con = mysqli_connect("localhost","moviesDB","movies","gomoku");

$sql = 'SELECT * FROM `users` WHERE username="'.$array['username'].'" AND psw ='.$array['psw'];///need to add encryption
$matchingUsers = $con->query($sql);
$numRows = mysqli_num_rows($matchingUsers);
//$row = $matchingUsers->fetch_row();
//echo json_encode($matchingUser);
if($numRows == false){


echo (0);
}else{
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['username'] = $array['username'];

echo(1);
}

$con->close();



//echo json_encode($array);
 //$psw = $_GET['psw'];
    
   


?>