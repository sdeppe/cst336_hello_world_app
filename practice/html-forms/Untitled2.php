<?php
    session_start();
    
    $_POST["firstName[]"];

    echo $_POST["firstName[]"];

?>




<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <form action="Untitled2.php" method="POST">
            
            Names:    <br>
            <input type="radio"  id="item1"  name="degreeChoices"  value="High School" >
                <input type="text" name="fullName[]" size="25" /> <br><br>
                
            <input type="radio"  id="item2"  name="degreeChoices" value="College">
                <input type="text" name="fullName[]" size="25" /> <br><br>
                
            <input type="radio"  id="item3"  name="degreeChoices" value="College">
                <input type="text" name="fullName[]" size="25" /> <br><br>
                
            <input type="radio"  id="item4"  name="degreeChoices" value="College">
                <input type="text" name="fullName[]" size="25" /> <br><br>
                
            <input type="radio"  id="item5"  name="degreeChoices" value="College">
                <input type="text" name="fullName[]" size="25" /> <br><br>
            
            <input type="submit" value="Save"/>
            <input type="submit" value="Clear" onclick="displayData()"/>
          </form>
    </body>
</html>