<?php

class Movie {

    public $title;
    public $actor;
    public $category;

    function __construct($_title, $_actor, $_category) {
        $this->title = $_title;
        $this->actor = $_actor;
        $this->category = $_category;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getActor() {
        return $this->actor;
    }

    public function getCategory() {
        return $this->category;
    }
}

$superman = new Movie("L'uomo d'acciaio", 'Henry Cavill', 'Fantascienza');

    echo '<h1>'.'Film 1'.'</h1>';
    echo '<p>' .'Titolo: ' .$superman->getTitle(). '</p>';
    echo '<p>' .'Attore: ' .$superman->getActor(). '</p>';
    echo '<p>' .'Categoria: ' .$superman->getCategory(). '</p>';


$batman = new Movie("Batman Begins", 'Christian Bale', 'Azione');

    echo '<h1>'.'Film 2'.'</h1>';
    echo '<p>' .'Titolo: ' .$batman->getTitle(). '</p>';
    echo '<p>' .'Attore: ' .$batman->getActor(). '</p>';
    echo '<p>' .'Categoria: ' .$batman->getCategory(). '</p>';

?>
