<?php
include 'database.php';
session_start();

$quote = $_POST['quote'];
$author = $_POST['author'];
$passAmount = $_POST['passAmount'];



    if(($_POST['quote']=="")||($_POST['author']=="")){
        
        echo '<div class="error">';

        echo "Please input items into field";
        echo '</div>';
        
    }
    else{
    
     if(isset($_POST['create'])){
        
        $dbConn = getDatabaseConnection();
        $sql = "INSERT INTO `q_quotes` (`quoteId`, `quote`, `author`, `num_likes`) VALUES ('@NextId', '$quote', '$author', '0')";
        $statement = $dbConn->prepare($sql); 
        $statement->execute(); 
        
        header( 'Location: cst336_midterm.php' );
    
     }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Create</title>
    
  </head>
   <link href="css/styles.css" rel="stylesheet" type="text/css">
  <body>
 
    <h1> Create a new quote</h1>
    
    <form method="post">
    Text
    <input type="text" id="textstyle" size="5" name="quote" size="35" />
    <br />
    <br />
    Author
    <input type="text" id="textstyle" size="5" name="author" size="35" />
    <br />
    <br />
    
    <input name="create" type ="submit"/>
    
    </form>
    
    
  </body>
</html>