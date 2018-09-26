<?php
    function playerStart(){
        
        $base = rand(1,6);
        $mult = rand(1,6);

        
        echo '<div class="playerfunc">';
        switch($base){
            case 1:
                echo "<img width = '140' src='dice/face1.png'>";
                break;
            case 2:
                echo "<img width = '140' src='dice/face2.png'>";
                break;
            case 3:
                echo "<img width = '140' src='dice/face3.png'>";
                break;
            case 4:
                echo "<img width = '140' src='dice/face4.png'>";
                break;
            case 5:
                echo "<img width = '140' src='dice/face5.png'>";
                break;
            case 6:
                echo "<img width = '140' src='dice/face6.png'>";
                break;
    }
        echo "<img width = '140' src='img/multiplication.png'>";
        switch($mult){
            case 1:
                echo "<img width = '140' src='dice/face1.png'>";
                break;
            case 2:
                echo "<img width = '140' src='dice/face2.png'>";
                break;
            case 3:
                echo "<img width = '140' src='dice/face3.png'>";
                break;
            case 4:
                echo "<img width = '140' src='dice/face4.png'>";
                break;
            case 5:
                echo "<img width = '140' src='dice/face5.png'>";
                break;
            case 6:
                echo "<img width = '140' src='dice/face6.png'>";
                break;
                
        }
        $total = $base * $mult;
        echo "<img width = '90' src='img/eq.png'>";
        echo $total;
        echo "<br>";
        echo '</div>';
        return $total;
    }
    function flavorText(){
        $num = rand(0,4);
        $line = array(5);
        $line[0] = "Bodacious ";
        $line[1] = "Since 1996";
        $line[2] = "Not your grandmother's website";
        $line[3] = "Edgy";
        $line[4] = "Milk's favorite cookie";
        
        $j=0;
        do{
            if ($num ==0){
                echo $line[$num];
                $num = rand(0,4);
            }
            if ($num ==1){
                echo $line[$num];
                $j++;
            }
            if ($num ==2){
                echo $line[$num];
                $j++;
            }
            if ($num ==3){
                echo $line[$num];
                $j++;
            }
            if ($num ==4){
                echo $line[$num];
                $j++;
            }
        }while ($j>2);
         echo "<br>";
    echo '<div class="underflavor">';
        echo "More than ".sizeof($line)." flavor texts to discover!";
    echo '</div>';
}
        
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <title>Crazy Mike's Wild Ride</title>
        <h1><marquee behavior="alternate">Multiplication Game</marquee></h1>
        
    </head>
    <link href="homework/2/css/styles.css" rel="stylesheet" type="text/css">
    <body background = "img/bg.png">

    <?php
    
    for($i=1; $i<3; $i++){
        ${"player".$i} = playerStart();
        echo "<br>";
        echo "<br>";
    }
    
    echo '<div class="winnerText">';
        if($player1 > $player2){
            echo "Player 1 is the winnner!";
        }if($player1 == $player2){
         echo "!BIG TIE!";
         echo "<br>";
         echo '<img id = "whoa" src=/homework/2/img/whoa.jpg alt="whoaman">';
        }
        if($player1 < $player2){
            echo "Player 2 is the winner!";
        }
    echo '</div>';
    ?>
    
    
    <form>
        <input type="submit" value="Try Again?">
    </form>
    
    <footer>
        <hr>
    <?php
        flavorText();
       ?>
    </footer>
            
    </body>
</html>