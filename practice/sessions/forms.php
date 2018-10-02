<?php
session_start();
$_SESSION["names"];

?>

<form action = "forms.php" method = "POST">
    
    <input type="radio"  id="fullName"  name="nameChoices" value="1">
    <input type="text" id="fullName" size="25" name="name1" />   <br />
    
    <input type="radio"  id="fullName"  name="nameChoices" value="2">
    <input type="text" id="fullName" size="25" name="name2" />   <br />
    
    <input type="radio"  id="fullName"  name="nameChoices" value="3">
    <input type="text" id="fullName" size="25" name="name3" />   <br />
    
    <input type="radio"  id="fullName"  name="nameChoices" value="4">
    <input type="text" id="fullName" size="25" name="name4" />   <br />
    
    <input type="radio"  id="fullName"  name="nameChoices" value="5">
    <input type="text" id="fullName" size="25" name="name5" />   <br />
   
    
    <br/><br/>
    <input type="submit" value="Save" name="Save" onclick="displayData()"/>
    <input type="submit" value="Delete" onclick="displayData()"/>
    
  </form>
    
    
    <?php
        if(isset($_POST['Save'])){
            $selected = $_POST['nameChoices'];
            $username = $_POST['name' . $selected];
            
            $_SESSION["names"] = $username;
            echo $username . " is the favorite!";
            
        }
        if(isset($_POST['Delete'])){
            $username = $_POST['name1'];
            
            $_SESSION["names"] = null;;
            
        }
    ?>
