<?php

    include 'database.php';
    $dbConn = getDatabaseConnection();
    $sql = "SELECT quote , author FROM q_quotes ORDER BY RAND() LIMIT 1";
    $statement = $dbConn->prepare($sql); 
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    
       foreach($records as $record){
        echo $record['quote'] . " - " . $record['author'];
        echo "<br>";
    }
    
    ?>
    
    <!DOCTYPE html>
<html>
  <head>
    <title>Create</title>

  </head>
   <link href="css/styles.css" rel="stylesheet" type="text/css">
  <body>
 

    <a href="./create.php">create</a>
    
    
    <h2 class = "title1"> 2018 Whaley</h2>
    
  </body>
</html>