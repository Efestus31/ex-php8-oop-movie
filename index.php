<?php

//Definiamo un trait
trait RatingTrait {
    public $rating;

    //metodo per assegnare un voto
    public function setRating($valore) {
        if($valore >= 0 && $valore <= 5) {
            $this->rating = $valore;
        } else {
            echo "Il valore deve essere tra 0 e 5. <br>";
        }
    }

    //Metodo per ottenere il voto
    public function getRating() {
        return $this->rating ?? "Nessun voto assegnato";
    }
}
class Genre {
    public $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
}

class Movie {

    use RatingTrait;

    public $nome;
    public $anno;
    public $durata;
    public $generi = []; //array per piu generi

    //costruttore
    public function __construct($_nome, $_anno, $_durata, array $_generi)
    {
        $this->nome = $_nome;
        $this->anno = $_anno;
        $this->durata = $_durata;
        $this->generi = $_generi;
    }

    //metodo per stampare le info del film
    public function getInfo(){

        //Creiamo una stringa con tutti i generi 
        $generiStr = implode(", ", array_map(fn($g) => $g->nome, $this->generi));
        return "{$this->nome} ({$this->anno}) - Durata: {$this->durata} - Genere: {$generiStr} - Rating: " . $this->getRating();
    }
}




//Creiamo i generi
$fantascienza = new Genre("Fantascienza");
$azione = new Genre("Azione");
$drammatico = new Genre("Drammatico");

//nuovo film
$inception = new Movie("Inception", 2010, "148 min", [$fantascienza, $azione]);
$titanic = new Movie("Titanic", 1997, "195 min", [$drammatico]);


//Assegnamo un voto al film usando il trait
$inception->setRating(5);

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