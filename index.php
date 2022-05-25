<?php  

class Movie {
    public $title;
    public $genre;
    public $year;

    function __construct(String $titleMovie, String $genreMovie, Int $yearMovie)
    {
        $this->title = $titleMovie;
        $this->genre = $genreMovie;
        $this->year = $yearMovie;
    }

    public function setGenre(String $_genre)
    {
        $this->genre = $_genre;
    }
    
    public function getGenre()
    {
        return $this->genre;
    }
      
};

$star_wars = new Movie('Star Wars', 'Fantasy', 1977);

$lotr = new Movie('Lord Of The Rings', 'Fantasy', 2001);

var_dump($star_wars);
var_dump($lotr);

$star_wars->setGenre('Science Fiction');
var_dump($star_wars);


?>