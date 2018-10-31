<?php

// PLAN:
// 1. Generate a random number ==> store it in the sesion [DONE]
// 2. Have a form where user can enter their guess
// 3. form validation logic ==> determine whether the guess is too high / low
// 4. store the history in the session
// 5. clear the session when the user clicks "start over" [DONE]

// start the session
    session_start();
    
    
    if(isset($_POST['destroy'])) {
        session_destroy();
        session_start();
    }
    
    // user has already "destroy"
    if (!isset($_SESSION['randomVal'])) {  // $_SESSION['randomVal'] ==> null
       $_SESSION['randomVal'] = rand(1,100);
    }
    
    function highLow($guess, $target) {
        if($guess > $target) {
            echo "TOO HIGH";
        }
        if($guess < $target) {
            echo "TOO LOW";
        }
        if($guess == $target) {
            echo "CORRECT";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        Random number: <?php echo $_SESSION['randomVal'] ?>
        <P>Guess the number (between 1 and 100)</P><br>
        <form method="POST">
            Your guess:
            <input type="text" name="guess">
            <input type="submit" name="submit" value="submit">
        </form>
        <br>
        <?php highLow($_POST['guess'], $_SESSION['randomVal']) ?>
        <form method="POST">
            <input type="submit" name="destroy" value="Start Over"/>
        </form>
        
    </body>
</html>