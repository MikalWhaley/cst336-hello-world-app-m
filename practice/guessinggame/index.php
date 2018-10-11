<?php
session_start();



if(isset($_POST['destroy'])){
    session_destroy();
    session_start();
}

if(!isset($_SESSION['randomVal'])){
    $_SESSION['randomVal'] = rand(1,100);
    $_SESSION['gueses'] = array();
}

if(isset($_POST['Save'])){
    $prevGuess = $_POST['Save'];
    
}
array_push($_SESSION['gueses'],$_POST['input']);
print_r($_SESSION['gueses']);

//print_r($_POST['input']);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Session Guessing Game</title>
    </head>
    <body>
        
        <div>
            Count: <?php echo $_SESSION["randomVal"]; ?>
            <form method = "post">
                 <input type="text" id="guess" name="input" /> 
                 <input type="submit" value="Save" name="Save"/>
                 </br>
                <input type = "submit" name = "destroy" value = "Start Over"></input>
               
            </form>
        </div>
        
    </body>
</html>