<!DOCTYPE html>

<html>
    <head>
        
        <link rel="stylesheet" href="../CSS/index.css">
    </head>
    <body>
        <?php
        
      
       
        
        session_start();
        if( isset($_SESSION['username'])){
           
            
        echo('Hello '.$_SESSION['username'].'!');

        
        }else{
       

        }
        
        ?>

        <a href = 'index.php'> <img id = 'home' src = '../home.png'/></a>
        <style>
            #home{
                float:right;
                padding-right:10px;
                height:60px;
            }
            
        </style>
        <br>
        <br>
        <section>
                <div id = 'heading'><h1>Gomoku</h1></div>
        </section>
        <section>
            <div id = "menu container">
                <table id = "menuTable">
                    <tbody>
                        <tr onclick= "window.location=('game.php'); " ><td><p>Play</p></td></tr>
                        <tr onclick= "window.location=('leaderboard.php?sortType=0'); "><td><p>Leaderboard</p></td></tr>
                        <?php
                       
                         
                         $loginURL = '"window.location='."'login.php'".';"';
                         $signupURL = '"window.location='."'signUp.php'".';"';
                         $logoutURL = '"window.location='."'logoutSuccess.php'".';"';
                        
                            if( isset( $_SESSION['username'])){
                           
                                echo(' <tr onclick='.$logoutURL.'><td><p>Log-Out</p></div></td></tr>');
                               
                            }else{
                                echo(' <tr onclick='.$loginURL.'><td><p>Log-In</p></div></td></tr>');
                                echo(' <tr  onclick='.$signupURL.'><td><p>Sign Up</p></td></tr>');

                            }
                        ?>
                
                       
                        <tr><td><p>Help</p></td></tr>
                     
                    </tbody>

                </table>
            </div>
        </section>
    </body>
    
</html>