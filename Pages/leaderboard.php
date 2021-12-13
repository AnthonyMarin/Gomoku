<?php 
    session_start();
    if(isset($_GET['sortType'])){
        $sortType = $_GET['sortType'];
        
    }else{
        $sortType=0;
      

    }
    
?>
<html>
<head>
    <script src = "../JS/leaderboard.JS"></script>
    <link rel="stylesheet" href="../CSS/leaderboard.css">
</head>

<body onload = "displayResults(<?php echo $sortType;?>)">
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
        
    <h1 id = "pageTitle">Leaderboard</h1>

    <form id= 'buttons' action = "leaderboard.php?" method = "GET"> 
        <div class = "buttonSections">
         <input type = 'radio' id = "gwD" name='sortType'value ='0' />
         <label for="gwd">Games Won:Descending</label>

         <input type = 'radio' id = "gwa" name='sortType' value ='1' />
         <label for="gwa">Games Won: Ascending</label>
        </div>
        <div class = "buttonSections">
         <input type = 'radio' id = "gpd" name='sortType'value ='2' />
         <label for="gpd">Games Played: Descending</label>
         <input type = 'radio' id = "gpa" name='sortType'value ='3' />
         <label for="gpa">Games Played: Ascending</label>
        </div>
        <div class = "buttonSections">
         <input type = 'radio' id = "tpd" name='sortType'value ='4' />
         <label for="tpd">Time Played: Descending</label>
         <input type = 'radio' id = "tpa" name='sortType'value ='5' />
         <label for="tpa">Time Played: Ascending</label>
        </div>
        <button type = 'submit'>Sort</button>
</div>
        
    </form>   
   
        
    <table id = "leaderboard" class = "leaderboard">
    <?php if (isset($_SESSION['username'])) {
        echo('<tr><th colspan = "5">Your Ranking</th></tr>');
        include '../phpScripts\getUserRank.php';
  
        
    }else{
        echo('<tr></tr>');
        echo('<tr></tr>');
    }
    ?>
    

        <tr>
            <th>Rank</th>
            <th>Username</th>
            <th>Games Won</th>
            <th>Games Played</th>
            <th>Time Played</th>
        </tr>
    </table>
</body>
</html>
