<?php

class Movie {
    public $title;
    public $genre;
    public $monthProgramation;
    public static $country = 'United States';
    public static $distribution = 'EU/GB/JP/CH'; 

    function __construct($_title,$_genre,$_monthProgramation) {   
        $this->title = $_title;
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

$avengers = new Movie ('Avengers','Superheroes','May');
$djangoUnchained = new Movie ('Django Unchained', 'Western, Commedy','April');
var_dump($avengers);
var_dump($djangoUnchained);

$movie = [
    $avengers,
    $djangoUnchained
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <div>
        <?php foreach ($movie as $movie) { ?>
            <div>
                <h1><?php echo $movie->title; ?></h1>
                <div><?php echo $movie->genre; ?></div>
                <div><?php echo $movie->monthProgramation; ?></div>
                <div><?php echo $movie->getStaticCountry(); ?></div> 
                <div><?php echo $movie->getStaticDistribution(); ?></div>           
            </div>
        <?php } ?>
    </div>
    
</body>
</html>
