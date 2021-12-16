<!DOCTYPE html>

<html>
    <head>
        
        <link rel="stylesheet" href="../CSS/index.css">
    </head>
    <body>
        <header id = 'topbar'>
        <div id = "user">
        <?php
        
      
       
        
        session_start();
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
        <br>
        <br>
        <section>
                <div id = 'heading'><h1>Gomoku</h1></div>
        </section>
        <section>
            <div id = "menu container">
                <table id = "menuTable">
                    <tbody>
                        <tr onclick= "window.location=('game.php'); " ><td><p>Play</p></td></tr>  <!--takes to game page, can play if logged in or not -->
                        <tr onclick= "window.location=('leaderboard.php?sortType=0'); "><td><p>Leaderboard</p></td></tr> <!--takes you to leaderboard -->
                        <?php
                       
                         
                         $loginURL = '"window.location='."'login.php'".';"'; 
                         $signupURL = '"window.location='."'signUp.php'".';"';
                         $logoutURL = '"window.location='."'logoutSuccess.php'".';"';
                        
                            if( isset( $_SESSION['username'])){ //will take you to log in/sing up if not logged in ///// log out if signed in
                                
                           
                                echo(' <tr onclick='.$logoutURL.'><td><p>Log-Out</p></div></td></tr>');
                               
                            }else{
                                echo(' <tr onclick='.$loginURL.'><td><p>Log-In</p></div></td></tr>');
                                echo(' <tr  onclick='.$signupURL.'><td><p>Sign Up</p></td></tr>'); 

                            }
                        ?>
                
                        <tr onclick= "window.location=('contactPage.php'); "><td><p>Contact</p></td></tr>
                        <tr onclick= "window.location=('help.php'); "><td><p>Help</p></td></tr>
                     
                    </tbody>

                </table>
            </div>
        </section>
    </body>
    
</html>