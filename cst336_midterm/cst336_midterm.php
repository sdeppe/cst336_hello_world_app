<?php 
include "database.php";

function createQuote($quote, $author) {
    $dbConn = getDatabaseConnection();
    $sql = "INSERT INTO `q_quotes` (`quoteId`, `quote`, `author`, `num_likes`) VALUES (NULL, '$quote', '$author', 0)";
    $statement = $dbConn->prepare($sql);
    $result = $statement->execute();
    
    if (!result) {
        return null;
    }
    
    $last_id = $dbConn->lastInsertId();
    
    $sql = "SELECT * FROM q_quotes WHERE id = $last_id";
    $statement = $dbConn->prepare($sql); 
    
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    $newQuote = $records[0]; 
    return $newQuote; 
}

function displayRandomQuote() {
    $dbConn = getDatabaseConnection();
    $sql .= "SELECT * FROM `q_quotes` WHERE num_likes ORDER BY num_likes DESC";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll();
    
    $fullList = array();
    
    foreach($records as $record){
        array_push($fullList, "<h1>" . $record['quote'] . "</h1>" . "<br><br>" .  "<h2>" . "-" .$record['author'] . "</h2>" . "<br><br>");
    }
    
    shuffle($fullList);
    $ran = array_pop($fullList);
    echo "$ran";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="midterm.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php displayRandomQuote(); ?>
        <a href="./create.php">Create</a>
    </body>
</html>