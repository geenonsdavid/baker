<?php
include 'data.php';

$number = 1; /* nombre d'article commander */

// Stock le montant des différents articles dans un tableau $montant
for ($i=0; $i < count($articles); $i++) { 
   $montant[] = $articles[$i]["price"] * $number; 
}

// calcul $total en additionnant le montant de tous les articles
$total = 0; // init total
for ($i=0; $i < count($montant); $i++) { 
    $total = $total+$montant[$i];
}

$devise = "€";
$date = "22/02/2022";
$dateNow = "23/02/2022";

    
?>