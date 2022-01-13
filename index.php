<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$text = $_POST["text"];
$res = "";

//This is the first menu screen
if ( $text == "" ) {
    $response  = "CON Bienvenue sur le portail de NGH Togo VAS \n";
    $response .= "1. Services VAS \n";
    $response .= "2. Paiement Mobile \n";
    $response .= "3. Recherche \n";
    $response .= "4. Voting \n";
}
echo $response;
// services
// get response
// if response is 1 =VAS
if($response[1] == $res ){
    $service  = "CON Service VAS \n";
    $service .= "1. Santé \n";
    $service .= "2. Sport \n";
    $service .= "3. Actualités \n";
    $service .= "4. Autres \n";
}

// if response is 2= paiements Mobile
elseif ($response[2] == $res){
    $paiement  = "CON Quel Opperation voulez vous effecter? \n";
    $paiement .= "1. Depot \n";
    $paiement .= "2. Retrait \n";
    $paiement .= "3. Envoi \n";
    $paiement .= "4. Solde \n";
}

// if response is 3= Recherche
elseif ($response[3] == $res){
    $paiement  = "CON Que Recherchez vous ? \n";
    $paiement .= "1. Histoire \n";
    $paiement .= "2. Resultat des paris sportifs \n";
    $paiement .= "3. Pharmacies de garde \n";
    $paiement .= "4. Astuces  \n";
}

// if response is 4= Voting
elseif ($response[4] == $res){
    $paiement  = "CON A quel Vote voulez vous participer ? \n";
    $paiement .= "1. Election  \n";
    $paiement .= "2. The voice\n";
    $paiement .= "3. loto  \n";
    $paiement .= "4. Astuces  \n";
}
// if response is 5= abonnement
elseif ($response[3] == $res){
    $paiement  = "CON Que Voulez vous faire ? \n";
    $paiement .= "1. Consulter son abonnement \n";
    $paiement .= "2. Se Desabonner \n";
    $paiement .= "3. Annuler \n";
}
echo $response;

// packages

//if choice service is 1
if($service[1] == $res ){
    $package  = "CON Packages  \n";
    $package .= "1. 1jour \n";
    $package .= "2. 3jour \n";
    $package .= "3. 1semaine \n";
    $package .= "4. 1mois \n";
}
?>