<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?php
            for($i=0; $i<10; $i++) {
                echo "#".$i;
            }
            
            $kids = 3;
            $numOfKids = 2 + $kids++;
            
            echo "$numOfKids";
            
            $printed = print("");
            
            function print($text) {
                echo $text;
                return strlen($text)?true:false;
            }
        ?>
    </body>
</html>