<?php 

class Movie{

  public $title;
  public $genre;
  public $release;
  private $rating;

  public function __construct($_title , $_genre, $_release)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->release = $_release;
  }

  public function setRating($_rating){
    $this->rating = $_rating;
  }

  public function getRating(){
    return $this->rating;
  }

}


?>