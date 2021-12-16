<?php

session_start();
?>
<html>
<head> <link rel="stylesheet" href="../CSS/signUp.css">
<script src ="../JS/login.JS"></script>
</head>

<body onload = 'onLoad();'>
<header id = 'topbar'>
        <div id = "user">
        <?php
        
      
       
        
        
        if( isset($_SESSION['username'])){
           
            
        echo('Hello '.$_SESSION['username'].'!');

        
        }else{
       

        }
        
        ?>
        </div>

        <a href = 'index.php'> <img id = 'home' src = '../home.png'/></a>
        <style>
            #home{
                float:left;
                height:60px;
                
            
            }
            #topbar{
                height:60px;
                padding:15px;
            }
            
            #user{
                padding:15px;
                float: right;
            }
        </style>
        </header>
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