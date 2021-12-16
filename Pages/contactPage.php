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
                        <tr ><td><h1>Created By: </h1></td> 
                        <td><p>Anthony Marin</p></td>
                        </tr>
                        <tr >
                            <td><h1>Email:</h1></td>
                            <td><p>anthonymarin144@gmail.com</p></td>
                    
                        </tr>
                      
                    
                
                       
                        <tr>
                            <td><h1>How to contribute:</h1></td>
                           <td> <a href = 'https://github.com/AnthonyMarin/Gomoku'> <p> Github Repo</p></a></td>
                        </tr>
                     
                    </tbody>

                </table>
            </div>
        </section>
    </body>
    
</html>