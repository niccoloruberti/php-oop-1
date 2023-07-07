<?php

class Movie {
    public $title;
    public $time;
    public $genre;

    function __construct($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }
}

$shooter = new Movie('Shooter');
$tenet = new Movie('Tenet');

$shooter->time = 126;
$shooter->genre = 'Azione/Thriller';

$tenet->time = 150;
$tenet->genre = 'Azione/Sci-fi';

$movies = array($shooter, $tenet);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Film</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="card w-50 text-center">
                        <ul class="list-group list-group-flush">
                            <?php foreach($movies as $movie) { ?>
                                <li class="list-group-item">
                                    <?php echo $movie->title ?> - <?php echo $movie->time ?> min. - <?php echo $movie->genre ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>