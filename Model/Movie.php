<?php
include __DIR__.'/Genre.php';
class Movie {
    private $id;
    private $title;
    private $overview;
    private $vote_average;
    private $poster_path;
    private $original_language;

    function __construct($id, $title, $overview, $vote, $language, $image) 
    {
        $this ->id = $id;
        $this -> title = $title;
        $this ->overview = $overview;   
        $this ->vote_average = $vote;
        $this ->poster_path = $image;
        $this ->original_language= $language;
    }
}

$movieString = file_get_contents(__DIR__ .'/movie_db.json');
$movieList = json_decode($movieString, true);

$movies = [];

foreach( $movieList as $item ){
    $movies[] = new Movie($item ['id'], $item ['title'],$item ['overview'],$item ['vote_average'], $item ['original_language'], $item ['poster_path']);
}
var_dump($movies);
?>