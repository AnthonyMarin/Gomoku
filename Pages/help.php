<!DOCTYPE html>

<html>
    <head>
        
        <link rel="stylesheet" href="../CSS/help.css">
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
                        <tr ><td><h1>How to Play: </h1></td> 
                        <td><p>From the main menu, click play to play with another player on the same machine. The goal is to fill 5 boxes in a row on the game grid with the same colors. After a successful move, the players with give control to the other player.</p></td>
                        </tr>
                        <tr >
                            <td><h1>How to navigate:</h1></td>
                            <td><p>From the main menu, you can log in,sign up, play offline, or visit this help page. At anytime you want to get back to the main menu, click the pawprint in the top right corner.</p></td>
                    
                        </tr>
                      
                    
                
                       
                        <tr>
                            <td><h1>How to save match:</h1></td>
                           <td> <p> After signing up and loggin in, you will see your username in the top-left corner. After finishing your game, you can click on "Post Results" from the post-game screen and your data will be saved.</p></td>
                        </tr>
                     
                    </tbody>

                </table>
            </div>
        </section>
    </body>
    
</html>