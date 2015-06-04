<?php
//Allemaal queries

$aantaljongens = 43 + $_POST['id1'];
$aantalmeisjes = 57 + $_POST['id2'];

$verzendJSONData = '{ "aantaljongens" : "'.$aantaljongens.'", "aantalmeisjes" : "'.$aantalmeisjes.'"}';

echo $verzendJSONData;

?>