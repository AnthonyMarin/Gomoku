
    
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/game.css">
    <script src = "../JS/clickListener.js"></script>
    <script src = "../JS/gameJavaScript.js"></script>
 
    <script src = "../JS/winConditions.JS"></script>

 
</head>
<body onload = "gameHandler()">
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
    <section>
        <div>
            <h1 id = 'gom'>Gomoku</h1>
        </div>
    </section>
    <section id = "gameInfo">
            <article id = "timer"><h3 >Time:<h3 id = "time"></h3></h3></article>
            <article id = 'messageBox'></article>
            <article id = "currentPlayer"></article>
    </section>

        <section class="grid-container">
<!--switch rows and coums-->
            <div id="col1" class = 'P1 '>
                
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row15"></div>
            </div>
            <div id="col2" class = 'P1 '>
                
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row15"></div>
            </div>
            <div id="col3" class = 'P1 '>
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row15"></div>
            </div>
            <div id="col4" class = 'P1 '>
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row15"></div>
            </div>
            <div id="col5" class = 'P1 '>
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row15"></div>
            </div>
            <div id="col6" class = 'P1 '>
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row15"></div>
            </div>
            <div id="col7" class = 'P1 '>
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row15"></div>
            </div>
            <div id="col8" class = 'P1'>
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row15"></div>
            </div>
            <div id="col9" class = 'P1' >
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row15"></div>
            </div>
            <div id="col10" class = 'P1'>
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row15"></div>
            </div>
            <div id="col11" class = 'P1'>
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row15"></div>
            </div>
            <div id="col12" class = 'P1'>
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row15"></div>
            </div>
            <div id="col13" class = 'P1'>
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row15"></div>
            </div>
            <div id="col14" class = 'P1'>
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row15"></div>
            </div>
            <div id="col15" class = 'P1'>
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row15"></div>
            </div>
         
        </section>
        <button type = 'button' onclick ="window.location=('game.php'); ">Reload</button>

        </div>

    </section>
    <script>
    </script>
</body>

</html>