<?php
session_start();

        $loc =$_POST['loc'];
        $selection=$_POST['selection'];
        $selection2=$_POST['selection2'];
        $az = $_POST['az'];
        $days;
        
        if(isset($_POST['Save'])){
            
            if(!isset($_POST['loc'])){
                echo "Enter number of locations";
            }
            
            else if($_POST['selection'] == "select"){
                echo "You must choose a Month";
            }else if($_POST['selection']!="select"){
                if($_POST['selection']=="december" || "january"){
                    $days =31;
                }else if($_POST['selection']=="november"){
                    $days = 30;
                }else{
                    $days =28;
                }
                
                
            }
            $counter =0;
            echo "<table>";
            for($i=0;$i<5;$i++){
                echo "<tr>";
                for($j=0; $j<7; $j++){
                    if($counter < $days){
                        echo "<th> $counter </th>";
                        $counter++;
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
        }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Midterm Practice</title>
        <style type="text/css">
        body{
            text-align:center;
            font-size:150%;
            
        }
            
        </style>
    </head>
    <body>
        
    <div class='container'>
        <div class='text-center'>
            
        <h1>Custom Name Generator</h1>
            <form method = "POST">
                   
                 Select a Month
                 <select name="selection">
                    <option value="select">Select</option>
                  <option value="november">November</option>
                  <option value="december">December</option>
                  <option value="january">January</option>
                  <option value="february">February</option>
                </select>
                 <br />
                 <br />
                Number of Locations
                <input type="radio" name="loc" id="digits" value="3" />3
                 <input type="radio" name="loc" id="digits"value="4"/>4
                 <input type="radio" name="loc" id="digits"value="5"/>5 <br /> <br />
                 
                 Select a Country
                 <select name="selection2">
                    
                  <option value="usa">USA</option>
                  <option value="mexico">Mexico</option>
                  <option value="france">France</option>
                </select>
                 <br />
                  <br />
                  Visit Locations in Alphabetical Order
                   <input type="radio" name="az" id="digits" value="az" />A-Z
                 <input type="radio" name="az" id="digits"value="za"/>Z-A
                 <br />
                   
                  
                 <input type="submit" value="Create Library" name="Save"/>
       
              
            </form>
            
        </div>
    </div>
    
    </body>
</html>