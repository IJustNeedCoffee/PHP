<?php
 
// Nombre de tirages impaire pour éviter les égalités
 $tirages = 1000;
 $pile = 0;
 
    for ($a = 0; $a < $tirages; $a++)
    {
 
        $rand = rand(1,2);
        $pile += ($rand == 1) ? 1 : 0;
 
    }

// On calcule face
$face = $tirages - $pile;

// Switch pas très utile dans la mesure ou il n'est pas plus court qu'un if/else
// mais il permet de bien visualiser ce qui se passe et modifier le code plus rapidement et proprement

switch ($pile) {
    case ($pile > ($tirages/2)):
        echo "Pile l'emporte !";
    break;
    
    case ($pile < ($tirages/2)):
        echo "Face l'emporte !";
    break;
    
    case ($pile == ($tirages/2)):
        echo "Egalité !";   
}

echo "</br>";
echo "=> Pile : " . $pile . "</br>=> Face : " . $face;

?>
