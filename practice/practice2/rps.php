<!DOCTYPE html>
<html>

<head>
    <title> RPS </title>
    <style type="text/css">
        body {
            background-color: black;
            color: white;
            text-align: center;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .col {
            text-align: center;
            margin: 0 70px;
        }

        .matchWinner {
            background-color: yellow;
            margin: 0 70px;
        }

        #finalWinner {
            margin: 0 auto;
            width: 500px;
            text-align: center;
        }
        
        hr {
            width:33%;
        }       
        
        #reel1{
            left:145px;
        }
        #reel2{
            left:252px;
        }
    </style>
</head>

<body>

    <h1> Rock, Paper, Scissors </h1>

    <div class="row">
        <div class="col">
            <h2>Player 1</h2>
        </div>
        <div class="col">
            <h2>Player 2</h2>
        </div>
    </div>
    <!--
    <div class="row">
        <div class='col'><img src='img/scissors.png' alt='scissors' width='150'></div>
        <div class='col, matchWinner'><img src='img/rock.png' alt='rock' width='150'></div>
    </div>
    <hr>

    <div class="row">
        <div class='col'><img src='img/rock.png' alt='rock' width='150'></div>
        <div class='col, matchWinner'><img src='img/paper.png' alt='paper' width='150'></div>
    </div>
    <hr>
    
    <div class="row">
        <div class='col, matchWinner'><img src='img/paper.png' alt='paper' width='150'></div>
        <div class='col'><img src='img/rock.png' alt='rock' width='150'></div>
    </div>
    <hr>
    -->
    
    <?php
    
    function displaySymbol($randomValue, $pos) {
                    
        switch ($randomValue) {
            case 0: $symbol = "paper";
                break;
            case 1: $symbol = "rock";
                break;
            case 2: $symbol = "scissors";
                break;
        }
                    
        echo "<img id='reel$pos' src='img/$symbol.png' alt='$symbol' title='". ucfirst($symbol) . "' width='70' >";
        
    }
    
    function play() {
        for ($i=1; $i<3; $i++) {
             ${"randomValue" . $i } = rand(0,2);
             displaySymbol(${"randomValue" . $i}, $i );
        }
    }
    
    echo "<div class='row2'>";
    play();
    echo "</div>";
    echo "<div class='row2'>";
    play();
    echo "</div>";
    echo "<div class='row2'>";
    play();
    echo "</div>";
    
    ?>

    <div id="finalWinner">

        <h1>The winner is Player 2</h1>

    </div>
    Images source: https://www.kisspng.com/png-rockpaperscissors-game-money-4410819/
</body>

</html>
