<?php
    //include('database.php');

$sql = "SELECT * FROM races";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll( PDO::FETCH_ASSOC );        

foreach ($results as $row)
{
    echo ($results);
}



//this was my attempt to print out tables with ajax


?>
