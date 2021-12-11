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
        <section>
                <div id = 'heading'><h1>Gomoku</h1></div>
        </section>
        <section>
            <div id = "menu container">
                <table id = "menuTable">
                    <tbody>
                        <tr onclick="window.location='game.php';" ><td><p>Play</p></td></tr>
                        <tr><td><p>Leaderboard</p></td></tr>
                        <?php
                       
                         
                         $loginURL = '"window.location='."'login.php'".';"';
                         $signupURL = '"window.location='."'signUp.php'".';"';
                         $logoutURL = '"window.location='."'logoutSuccess.php'".';"';
                        
                            if( isset( $_SESSION['username'])){
                                session_destroy();
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