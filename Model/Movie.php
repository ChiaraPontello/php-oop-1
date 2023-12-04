<?php
include __DIR__.'/Genre.php';
class Movie {
    private $id;
    private $title;
    private $overview;
    private $vote_average;
    private $poster_path;
    private $original_language;
}
$Babylon = new Movie();
var_dump($Babylon);
?>