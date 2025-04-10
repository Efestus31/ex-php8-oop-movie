<?php

class Genre {
    public $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
}

class Movie {

    public $nome;
    public $anno;
    public $durata;
    public $genere;

    //costruttore
    public function __construct($_nome, $_anno, $_durata, Genre $_genere)
    {
        $this->nome = $_nome;
        $this->anno = $_anno;
        $this->durata = $_durata;
        $this->genere = $_genere;
    }

    //metodo per stampare le info del film
    public function getInfo(){
        return "{$this->nome} ({$this->anno}) - Durata: {$this->durata} - Genere: {$this->genere->nome}";
    }
}




//Creiamo i generi
$fantascienza = new Genre("Fantascienza");
$drammatico = new Genre("Drammatico");

//nuovo film
$inception = new Movie("Inception", 2010, "148 min", $fantascienza, $drammatico);
$titanic = new Movie("Titanic", 1997, "195 min", $drammatico);

//riempio gli attributi della classe
// $inception->nome = "Inception";
// $inception->anno = 2010;
// $inception->durata = "148 min";

// $titanic->nome = "Titanic";
// $titanic->anno = 1997;
// $titanic->durata = "195 min";



// var_dump($inception);
// var_dump($titanic);

echo $inception->getInfo() . "<br>";
echo $titanic->getInfo();

?>