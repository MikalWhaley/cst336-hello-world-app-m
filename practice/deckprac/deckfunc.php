<?php
function generateDeck(){
    $suits = array('C', 'S', 'H', 'D');
    $face = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13');
    $deck = array("numCards"=>52, "cards"=>array());
    
    $card_count = 0;
    for($x = 0; $x < 4; $x++){
        for($y = 0; $y < 13; $y++){
            $deck["cards"][$card_count]["suit"] = $suits[$x];
            $deck["cards"][$card_count]["face"] = $face[$y];
            $card_count = $card_count + 1;
        }
   }
        return $deck;
}

function shuffleDeck($array){

    shuffle($array['cards']);
   return $array;   
    

    
}
?>