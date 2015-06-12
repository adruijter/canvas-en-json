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
    
    $queryPrep = $connection->prepare("SELECT `id`, `voornaam`, `tussenvoegsel`,`achternaam` FROM `persoonsgegeven` WHERE `id` < 4");
    
    $queryPrep1 = $connection->prepare("SELECT COUNT(`geslacht`) AS `aantalvrouwen` FROM `persoonsgegeven` WHERE `geslacht` = 'v'");
    
    $queryPrep->execute();
    
    $queryPrep1->execute();
    
    $queryPrep->setFetchMode(PDO::FETCH_ASSOC);
    $queryPrep->setFetchMode(PDO::FETCH_ASSOC);
    
    while ($row = $queryPrep1->fetch())
    {
        echo $row['aantalvrouwen'];
    }
    
    
    $verzendJSONData = '{ "persoonsgegevens" : [ ';
    foreach ($queryPrep->fetchAll() as $key => $value)
    {
        
            $verzendJSONData .= '{ "id" : "'.$value["id"].'", "voornaam" : "'.$value["voornaam"].'", "tussenvoegsel" : "'.$value["tussenvoegsel"].'", "achternaam" : "'.$value["achternaam"];
            if ( $key == $queryPrep->rowCount() -1)
            {
                $verzendJSONData .= '"}]}';
            }
            else
            {
                $verzendJSONData .= '"}, ';
            }
    } 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

echo $verzendJSONData;

?>