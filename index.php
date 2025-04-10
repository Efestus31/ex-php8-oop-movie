<?php



class Movie {

    public $nome;
    public $anno;
    public $durata;

    //costruttore
    public function __construct($_nome, $_anno, $_durata)
    {
        $this->nome = $_nome;
        $this->anno = $_anno;
        $this->durata = $_durata;
    }

    
}

//nuovo film
$inception = new Movie("Inception", 2010, "148 min");
$titanic = new Movie("Titanic", 1997, "195 min");

//riempio gli attributi della classe
// $inception->nome = "Inception";
// $inception->anno = 2010;
// $inception->durata = "148 min";

// $titanic->nome = "Titanic";
// $titanic->anno = 1997;
// $titanic->durata = "195 min";



var_dump($inception);
var_dump($titanic);
?>