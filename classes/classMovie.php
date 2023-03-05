<?php

   class movie {

    private $title;
    public $durate;
    public $forAdult;
    public $yearPublication;
    public $movieYears;
    public  function  calcMovieYears($_arg){
        $this->movieYears = date('Y') - $_arg;
    }
    public function setTitle($_title){
        $this->title = $_title;
    }
    public function getTitle(){
    return $this->title;
}
    public function __construct($_title, $_durate, $_forAdult, $_yearPublication){

        $this->title = $_title;
        $this->durate = $_durate;
        $this->forAdult = $_forAdult;
        $this->yearPublication = $_yearPublication;
        $this->calcMovieYears($this->yearPublication);
    }
};
?>
