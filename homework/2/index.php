<?php 
    //include 'inc/functions.php'
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Homework 2 </title>
        <link href="css/styles5.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="title">
            <h1>Dice Game</h1>
            <hr>
            <br />
        </div>
        <div>
            <?php
                $player1 = array();
                $player2 = array();
                
                    for ($i=0; $i<5; $i++) {
                        $x = rand(1,6);
                        array_push($player1,$x);
                    }
                
                    for ($i=0; $i<5; $i++) {
                        $x = rand(1,6);
                        array_push($player2,$x);
                    }
                    
                    $score1 = 0;
                    $score2 = 0;
                    echo "<div id='player1'>";
                    foreach ($player1 as &$value) {
                        displayDice($value);
                        $score1 += $value;
                    }
                    
                    echo "<h1>player 1 score = $score1</h1>";
                    echo "</div>";
                    echo "<br><br><hr><br><br>";
                    
                    echo "<div id='player2'>";
                    foreach ($player2 as &$value) {
                        displayDice($value);
                        $score2 += $value;
                    }
                    
                    echo "<h1>player 2 score = $score2</h1>";
                    echo "</div>";
                    echo "<br><br>";
                    
                    
                    echo "<div id='winner'><hr><br>";
                    if ($score1 > $score2) {
                        echo "<h1>player 1 wins</h1>";
                    }
                    else {
                        echo "<h1>player 2 wins</h1>";
                    }
                    echo "</div>";
                    
                function displayDice($value) {
                    switch($value) {
                        case 1:
                            echo "<img src='img/d1.png'/>";
                            break;
                        case 2:
                            echo "<img src='img/d2.png'/>";
                            break;
                        case 3:
                            echo "<img src='img/d3.png'/>";
                            break;
                        case 4:
                            echo "<img src='img/d4.png'/>";
                            break;
                        case 5:
                            echo "<img src='img/d5.png'/>";
                            break;
                        case 6:
                            echo "<img src='img/d6.png'/>";
                            break;
                    }
                }
            ?>
            
            <form>
                <hr>
                <br />
                <div id="again">
                    <input type="submit" value="Play Again!"/>
                </div>
            </form>
            
        </div>
            
    </body>
</html>