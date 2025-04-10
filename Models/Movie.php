<?php
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
?>