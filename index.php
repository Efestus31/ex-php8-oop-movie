<?php
require_once "./Models/Movie.php";
require_once "./Models/Genre.php";

//Creiamo i generi
$fantascienza = new Genre("Fantascienza");
$azione = new Genre("Azione");
$drammatico = new Genre("Drammatico");

//nuovo film
$inception = new Movie("Inception", 2010, "148 min", [$fantascienza, $azione]);
$titanic = new Movie("Titanic", 1997, "195 min", [$drammatico]);


//Assegnamo un voto al film usando il trait
$inception->setRating(5);

echo $inception->getInfo() . "<br>";
echo $titanic->getInfo();

?>