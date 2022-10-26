<?php

// 1. Crée deux variables $presentTime et $destinationTime, qui seront des objets DateTime. 
// $presentTime devra correspondre à la date actuelle (le moment du départ) et 
// $destinationTime la date et heure de destination, choisis celle que tu veux.
$presentTime = new DateTime('now') ;
$destinationTime = new DateTime('2022-11-02 12:00') ;

// 2. Affiche ensuite ces deux dates en suivant exactement le format de l'image ci-dessous
// MMM DD YYYY am ou pm HH : MM
// il faut bien afficher, dans cet ordre, le mois, le jour, l'année, le moment de la journée (AM ou PM), 
// l'heure et les minutes.

// A -> affiche AM ou PM
$dateFormat = 'M d Y  A  h:i' ;
echo date_format($presentTime, $dateFormat) . "\n" ;
echo date_format($destinationTime, $dateFormat) . "\n" ;

// 3. Affiche ensuite la durée qui sépare ces deux dates et formate le résultat pour qu'il affiche 
// le nombre d'années, mois, jours, heures et minutes entre les deux dates.
$diff=date_diff($destinationTime,  $presentTime) ;
echo $diff->format('%Y années, %m mois,  %d jours, %h heures et %i min') . "\n" ;

// [BONUS] : Calcule ensuite ce même intervalle, mais cette fois ci uniquement en nombre de minutes 
// séparant les deux dates. Toutes les 10000 minutes, le réservoir a besoin 
// d'un litre de carburant. Affiche donc le nombre de litres de carburant 
// nécessaire pour effectuer ce trajet temporel. 
$minutes = $diff->days * 24 * 60 ;   
$minutes += $diff->h * 60;
$minutes += $diff->i;

echo $minutes . "\n" ;
echo 'Nombre de litres : ' . ceil($minutes/10000) . "\n" ;
