<?php
    session_start();
    $_SESSION['choices'];


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Aces Vs Kings</title>
        
        <style>
        </style>
        
    </head>
    
    <body>
        <h1>Aces Vs Kings</h1>
        
        <form method = "post" name="form">
            <div>
                <label for="rows">Number of Rows:</label>
                <input type="text" id="rows" name ="rows"/>
                  <br/> <br/>
                <label for="columns">Number of Colums:</label>
                <input type="text" id="column" name = "columns"/>
                <br/> <br/>
                <select name="suittoOmit">
                    <option value = "Hearts">Hearts</option>
                    <option value = "Diamonds">Diamonds</option>
                    <option value = "Spades">Spades</option>
                    <option value = "Clubs">Clubs</option>
                </select>
                <input type="submit" value="submit" name ="submit"/>
                
                
            </div>
           
        </form>
        <?php
             if(isset($_POST['submit'])){
            $suittoOmit = $_POST['suittoOmit'];
            $rows = $_POST['rows'];
            $columns = $_POST['columns'];
            
            if($suittoOmit == 'Hearts'){
                $suits = array('clubs', 'spades', 'diamonds');
            }
            elseif($suittoOmit == 'Diamonds'){
               $suits = array('clubs', 'spades', 'hearts'); 
            }
            elseif($suittoOmit == 'Spades'){
                $suits = array('clubs', 'diamonds', 'hearts');
            }
            else{
                $suits = array('spades', 'hearts', 'diamonds');
            }
            
            
    $face = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13');
    $deck = array("numCards"=>52, "cards"=>array());
    $card_count = 0;
    for($x = 0; $x < 3; $x++){
        for($y = 0; $y < 13; $y++){
            $deck["cards"][$card_count]["suit"] = $suits[$x];
            $deck["cards"][$card_count]["face"] = $face[$y];
            $card_count = $card_count + 1;
        }
        
    }
    for($x = 0; $x < $columns; $x++){
        for($y = 0; $y < $rows; $y++){
            shuffle($deck['cards']);
            $card = array_pop($deck['cards']);
            $source = "cards/" . $card["suit"] . "/" . $card["face"] . ".png";
            echo "<img id='cards' src='$source' alt='card$y' title = 'Card $y' width='70' >";
        }
        echo "<br> <br>";
    }
                
            
}
        
        ?>
    </body>
</html>