<?php
session_start();

$length = $_POST['length'];
$digits = $_POST['digits'];
$passAmount = $_POST['passAmount'];



    if(isset($_POST['Save'])){
        if(isset($_POST['digits'])){
            $set = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');
        }else{
            $set = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        }
        
        for($i = 0; $i<$passAmount; $i++){
            $password = array();
            $digits = 0;
            for($j=0; $j <$length; $j++){
                $random_char = array_rand($set,1);
                
                if(is_numeric($set[$random_char] && $digits <3 || $j != 0)){
                     array_push($password,$set[$random_char]);
                     $digits++;
                }elseif(is_numeric($set[$random_char] && ($digits ==3 || $j == 0))){
                    do{
                        $random_char = array_rand($set,1);
                    }while(is_numeric($set[$random_char]));
                    
                }else{
                    array_push($password,$set[$random_char]);
                }

                
            }
            echo "Password: ";
            for($g=0; $g<$length;$g++){
               echo $password[$g];
            }
            echo '<br/>';
        }
        
        
    }


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Password Generator</title>
        <style type="text/css">
        body{
            text-align:center;
            background:pink;
            
        }
            
        </style>
    </head>
    <body>
        
    <div class='container'>
        <div class='text-center'>
            
        <h1>Custom Name Generator</h1>
            <form method = "POST">
                
                How many Passwords?
                <input type="text" id="passNum" size="1" name="passAmount" /> (No more than 8)  <br />
                
                <h2>Password Length</h2>
                <input type="radio" name="length" id="buttons" value="6" />6 Characters
                <input type="radio" name="length" id="buttons" value="8" />8 Characters
                <input type="radio" name="length" id="buttons" value="10" />10 Characters
                <br />
                <br />
                
                
                <input type="checkbox" name="digits" id="digits"/>Include digits (up to 3 digits will be part of the password)
                 <br />
                 <br />
                 <input type="submit" value="Generate Passwords" name="Save"/>
                 <br />
                 <br />
                 <input type="submit" value="Display Password History" name="Save"/>
                
              
            </form>
            
        </div>
    </div>
    
    </body>
</html>