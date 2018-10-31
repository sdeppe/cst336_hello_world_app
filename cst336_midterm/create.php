<?php 
function getErrors() {
    $errors = array();
    
    if ($_POST['quote'] == "") {
        array_push($errors, "Text must not be empty");
    }
    
    if ($_POST['author'] == "") {
        array_push($errors, "Author must not be empty");
    }
    
    return $errors;
}

function displayErrors($errors) {
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
         <link href="midterm.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Create a new quote:</h1><br/>
        <form method="post">
            Text: <input type="text" name="quote"></input><br/><br/>
            Author: <input type="text" name="author"></input><br/><br/>
            
            <input type="submit"></input>
        </form>
        <div id="errors">
            <?php
                $errors = getErrors(); 
                    
                    if (count($errors) > 0) {
                        displayErrors($errors); 
                    } else {?>
                        <meta http-equiv="refresh" content="0; URL='/w/cst336_midterm/cst336_midterm.php'" />  
                    <?php }
            ?>
        </div>
    </body>
</html>