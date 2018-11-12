<?php
session_start();
include 'function.php';

checkLoggedIn();

$memeID = $_GET['id'];
$memeObj = fetchMemeFromDB($memeID);

function generateOptions($selectedType) {
    $memeTypes = array(
        "college-grad" => "Happy College Grad",
        "thinking-ape" => "Deep Thought Monkey",
        "coding" => "Learning to Code",
        "old-class" => "Old Classroom");

    foreach ($memeTypes as $memeType => $description) {
        echo "<option ";
        
        if ($selectedType == $memeType)
            echo "selected='selected' ";
        
        echo "value='$memeType'>$description</option>";
    }
}
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head> 
    <body>
        <?php include 'navigation.php' ?> 
        <h1>Edit Meme</h1>
        <?php displayMemes(array($memeObj
        
        <form method="post">
            <input type="hidden" name="id" value=<?= $memeObj['id'] ?>>
            Line 1: <input type="text" name="line1" value=<?= $memeObj['line1'] ?>></input> <br/>
            Line 2: <input type="text" name="line2" value=<?= $memeObj['line2'] ?>></input> <br/>
            Meme Type:
            <select name="meme-type">
                <?php generateOptions($memeObj['meme_type'); ?>
            </select>
            <br/>
            <input type="submit"></input>
        </form>
    </body> 
</html>