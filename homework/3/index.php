<?php
session_start();



function names(){
    
    session_destroy();
    if(isset($_POST['Save'])){
        
        $amount = $_POST['amount'];
        $surname = $_POST['surname'];
        $likes1 =$_POST['likes1'];
        $likes2 =$_POST['likes2'];
        $likes3 =$_POST['likes3'];
        $selection=$_POST['selection'];
        
        
        
        $names = array("Grumbus","Chungis","Salami");
        
        if(isset($_POST['likes1'])){
            array_push($names, "Bungo");
        }
        if(isset($_POST['likes2'])){
            array_push($names, "Chombaro");
        }
        if(isset($_POST['likes3'])){
            array_push($names, "Wonk");
        }
        
        
        if($selection == cats){
            array_push($names, "Chunger");
        }
        if($selection == dogs){
            array_push($names, "Sammer");
        }if($selection == fish){
            array_push($names, "Tummer");
        }if($selection == several){
            array_push($names, "Manyman");
        }
        if($selection == other){
            array_push($names, "Grumpo");
        }
        
        $randomIndex = rand(0,sizeof($names));
        
        
        
     if($amount ==0){
         echo "Everybody gets one. (No length prefrence)";
         echo "</br>";
         $amount =1;
     }
     if(!isset($_POST['likes1'])&&!isset($_POST['likes2'])&&!isset($_POST['likes3'])){
         echo "The ol silent treatment. (No likes)";
         echo "</br>";
         
     }
     
        
        if(isset($_POST['surname'])){
            echo "$surname" ." ";
            
            for($i=0; $i<$amount;$i++){
                
            $randomIndex = rand(0,sizeof($names));
                
            echo $names[$randomIndex];
            
            echo " ";
            }
        }else{
            for($i=0; $i<$amount;$i++){
                
            $randomIndex = rand(0,sizeof($names));
            
            echo $names[$randomIndex];
            
            echo " ";
            }
        }
        
        
    }else{
        echo "";
    }
}
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Your Name, Please</title>

    </head>
     <link href="/work/homework/3/css/styles.css" rel="stylesheet" type="text/css">
    <body>
        
        <div class='phpmain'>
            <?php 
            names();
            ?>
            </div>
        
        
        
    <div class='container'>

        <h1>Powerful Name Generator</h1>
            <form method = "POST">
                
                <h2>How many names?</h2>
                
                <label for="buttons"> The Classic (2 Names)</label>
                <input type="radio" name="amount" id="buttons" value="2" <?php if (isset($_POST['amount']) && $_POST['amount'] == '2')  echo ' checked="checked"'; ?>/> <br />
                <label for="buttons"> Powerful Lad (3 Names)</label>
                <input type="radio" name="amount" id="buttons" value="3" <?php if (isset($_POST['amount']) && $_POST['amount'] == '3')  echo ' checked="checked"'; ?>/>  <br />
                <label for="buttons"> "Not to be Trifled With" (4 Names)</label>
                <input type="radio" name="amount" id="buttons" value="4" <?php if (isset($_POST['amount']) && $_POST['amount'] == '4')  echo ' checked="checked"'; ?>/>  <br />
                
                 <br />
                 <h2> Got a surname?</h2>
                 Put 'er there->
                 <input type="text" id="textstyle" size="5" name="surname" value="<?php echo isset($_POST['surname']) ? $_POST['surname']: '' ?>" />  <br />

                 <br />
                 <h2>Things I Like:</h2>
                 <input type="checkbox" name="likes1" id="digits" value="Nachos" <?php if (isset($_POST['likes1']) && $_POST['likes1'] == 'Nachos')  echo ' checked="checked"'; ?>/>1. Nachos <br />
                 <input type="checkbox" name="likes2" id="digits"value="Gummy" <?php if (isset($_POST['likes2']) && $_POST['likes2'] == 'Gummy')  echo ' checked="checked"'; ?>/>2. Gummy bears <br />
                 <input type="checkbox" name="likes3" id="digits"value="Saturday" <?php if (isset($_POST['likes3']) && $_POST['likes3'] == 'Saturday')  echo ' checked="checked"'; ?>/>3. Saturday's with the boys <br />
                 
                  <h3> Got any little dudes?</h3>
                  
                <select name="selection">
                    
                  <option value="cats">Cats</option>
                  <option value="dogs">Dogs</option>
                  <option value="fish">More of a Fish Person</option>
                  <option value="several">Several</option>
                  <option value="other">What's it to ya</option>
                  
                </select>
                
                <br />
                <br />
                 <input type="submit" value="Chomp My Chungis" name="Save"/>
                <br />
                <br />
              
            </form>
            
    </div>
    
    </body>
</html>