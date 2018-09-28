<?php
    /*
    $weekdays = array();
    $weekdays[] = "M";
    $weekdays[] = "T"; 
    array_push($weekdays,"W"); 
    echo "Displaying values using var_dump:";
    var_dump($weekdays);
    echo "<br><br>";
    echo "Displaying values using print_r:";
    print_r($weekdays);
    
    foreach ($weekdays as $day) {
	echo "<br><br> $day";
    }
    */
    
    $card = array("image" => "./img/club.png");
    $card["suit"] = "clubs";
    $card["value"] = 10;
    
    foreach($card as $key=>$value) {
        
    }
    
    $deck = array("numCards"=>52,"cards"=>array());
    
    $deck["cards"][] = array();
    $deck["cards"][0]["suit"]="clubs";
?>