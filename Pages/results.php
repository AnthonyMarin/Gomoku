
<?php
session_start();
$winner = $_GET['victor'];
$results = $_GET['results'];
//echo $winner.' Wins';
$json = json_decode($results);
//echo $json->{'p1Active'};

?>

<html>
    <head>
        <link rel="stylesheet" href="../CSS/results.css">
    </head>
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box}
    </style>

    <body>
        <section id = 'content'>
            <h1 id = "winner">Winner: <?php echo $winner ?></h1>
            <br>
            <br>
            <h2>Time:</h2>
            <br>
            <br> <br>
            <br>
            <table>
                <tbody>
                    <tr><th></th><th>Player 1</th><th>Player 2</th></tr>
                    
                    <tr><th>Moves</th><td></td><td></td><td></td></tr>
                </tbody>
            </table>
        </section>
    </body>
</html>