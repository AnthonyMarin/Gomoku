<html>

    <head>
    <head> <link rel="stylesheet" href="../CSS/success.css">
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
        <br>
        <br>
        <section id ="content">
            <h1 id = "success">Success!</h1>
            <article>
                <div>
                    <a href = "index.php"> Return to Homepage</a>
                </div>
                <div>
                    <a href = "login.php"> Log-In</a>
                </div>
            </article>
        
        <section>
    </body>
</html>