<?php

session_start();
session_destroy();

?>
<html>

    
    <head> <link rel="stylesheet" href="../CSS/success.css">
    </head>
    <body>
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
        <br>
        <br>
        <section id ="content">
            <h1 id = "success">Successfully Logged Out!</h1>
            <article>
                <div>
                    <a href = "index.php"> Return to Homepage</a>
                </div>
                <div>
                    
                </div>
            </article>
        
        <section>
    </body>
</html>