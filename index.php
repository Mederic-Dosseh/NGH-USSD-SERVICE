<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$text = $_POST["text"];

//This is the first menu screen
if ( $text == "" ) {
    $response  = "CON Bienvenue sur le portail de NGH Togo VAS \n";
    $response .= "1. Services VAS \n";
    $response .= "2. Paiement Mobile \n";
    $response .= "3. Recherche \n";
    $response .= "4. Voting \n";
}

echo $response
?>