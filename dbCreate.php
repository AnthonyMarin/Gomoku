<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE GomokuNew";
$sql2 = 'CREATE TABLE users (
    playerIndex INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username text NOT NULL,
    psw text NOT NULL,
    gamesWon int(11),
    gamesPlayed int(11),
    timePlayed time DEFAULT "00:00:00",
    registeredOn TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )';
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";

} else {
  echo "Error creating database: " . $conn->error;
}
$dbname = "gomoku";
$conn2 = new mysqli($servername, $username, $password, $dbname);
if ($conn2->query($sql2) === TRUE) {
    echo "Table created successfully";
    
  } else {
    echo "Error creating database: " . $conn2->error;
  }
$sql3 = 'INSERT INTO  `users` (`username`,`psw`,`gamesWon`,`gamesPlayed`) VALUES ("JohnM", "1", "0","0")';
$sql4 = 'INSERT INTO  `users` (`username`,`psw`,`gamesWon`,`gamesPlayed`) VALUES ("Mary", "1", "0","0")';
if ($conn2->query($sql3) === TRUE) {
    $conn2->query($sql4);
    echo "User created successfully";
    
  } else {
    echo "Error creating database: " . $conn2->error;
  }

$conn->close();
$conn2->close();
?>