<?php
    session_start();
    include 'database.php';

    
    //$selection = $_POST['option'];
    
    if(isset($_POST['save'])){
        $selection = $_POST['option'];
        $dbConn = getDatabaseConnection();
        $sql = "SELECT * FROM p1_quotes WHERE category= '$selection')";
        $statement = $dbConn->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        
        //foreach($records as $record){
        echo $record['quote'];
       // echo "<br>";
        //}
     }
     
    
    ?>
    
    <!DOCTYPE html>
<html>
  <head>
    <title>quotes</title>

  </head>
   
  <body>
      Enter Keyword: <input type="text" name="keyword"/>
      Category: 
      <select method = "post" name="option"> 
      <option value="Reflection">Reflection</option>
      <option value="Motivation">Motivation</option>
      <option value="Life">Life</option>
      <option value="Philosophy">Philosophy</option>
      <option value="Humor">Humor</option>
      
      
      </select>
      
      Order
      <input type="radio" value="a-z"/> A-Z
      <input type="radio" value="a-z"/> Z-A
      
      
      <input type="submit" value="displayQuote" name="save"/>

    
  </body>
</html>