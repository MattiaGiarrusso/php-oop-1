<?php

class Movie {
    public $title;
    public $image;
    public $genre;
    public $monthProgramation;
    public static $country = 'United States';
    public static $distribution = 'EU/GB/JP/CH'; 

    function __construct($_title,$_image,$_genre,$_monthProgramation) {   
        $this->title = $_title;
        $this->image = $_image;
        $this->genre = $_genre;
        $this->monthProgramation = $_monthProgramation;
    }

    public function getStaticCountry() {
        return self::$country;
    }
    
    public function getStaticDistribution() {
        return self::$distribution;
    }
}

?>