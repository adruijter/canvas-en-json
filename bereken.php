<?php
// PDO gebruiken voor database contact
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "openhuismboutrecht";

try
{
    $connection = new PDO("mysql:host=".$serverName.";dbname=".$databaseName, $userName, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $queryPrep = $connection->prepare("SELECT `id`, `voornaam`, `tussenvoegsel`,`achternaam` FROM `persoonsgegeven` WHERE `id` < 3");
    
    $queryPrep->execute();
    
    $queryPrep->setFetchMode(PDO::FETCH_ASSOC);
    
    
    $verzendJSONData = '{ "persoonsgegevens" : [ ';
    foreach ($queryPrep->fetchAll() as $key => $value)
    {
        $verzendJSONData .= '{ "id" : "'.$value["id"].'", "voornaam" : "'.$value["voornaam"].'", "tussenvoegsel" : "'.$value["tussenvoegsel"].'", "achternaam" : "'.$value["achternaam"].'"}, ';
    }
    $verzendJSONData .= ' {"id" : "", "voornaam" : "", "tussenvoegsel" : "", "achternaam" : ""}]}';
    
    
    /*
    $queryPrep->execute();
    
    while ($row = $queryPrep->fetch() )
    {
        echo $row["id"];
    }
    */  
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

echo $verzendJSONData;

?>