<?php


?>
<html>
<head> <link rel="stylesheet" href="../CSS/signUp.css">
<script src ="../JS/login.JS"></script>
</head>

<body onload = 'onLoad();'>
<a href = 'index.php'> <img id = 'home' src = '../home.png'/></a>
        <style>
            #home{
                float:right;
                padding-right:10px;
                height:60px;
            }
            </style>
<form  method = 'POST'>
<div class="container">
  
    <p id = signUpOption>
    Need an account? <a href = 'signUp.php' > Sign Up </a>
    </p>
    <h1>Log In</h1>
    <p>Please fill in this form to log in.</p>
    <hr>

    <label for="username"><b>Username</b></label>
    <input  id = 'username'type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input id = 'password'type="password" placeholder="Enter Password" name="psw" required>

  
    <div id = 'submitError' ></div>
    
    

    <div class="clearfix">
     <a  href = 'index.php'> <button type="button"class="cancelbtn">Cancel</button></a>
      <button type="button" onclick = "loginRequest()" class="signupbtn">Log In</button>
    </div>
  </div>
</form>
</body>
</html>