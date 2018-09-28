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
        foreach ($player1 as &$value) {
            displayDice($value);
            $score1 += $value;
        }
        
        echo "<h1>player 1 score = $score1</h1>";
        echo "<br /><br />";
        
        foreach ($player2 as &$value) {
            displayDice($value);
            $score2 += $value;
        }
        
        echo "<h1>player 2 score = $score2</h1>";
        
        if ($score1 > $score2) {
            echo "<h3>player 1 wins</h3>";
        }
        else {
            echo "<h3>player 2 wins</h3>";
        }
    
    function displayDice($value) {
        switch($value) {
            case 1:
                echo "<img src='../img/d1.png'/>";
                break;
            case 2:
                echo "<img src='../img/d2.png'/>";
                break;
            case 3:
                echo "<img src='../img/d3.png'/>";
                break;
            case 4:
                echo "<img src='../img/d4.png'/>";
                break;
            case 5:
                echo "<img src='../img/d5.png'/>";
                break;
            case 6:
                echo "<img src='../img/d6.png'/>";
                break;
        }
    }
?>